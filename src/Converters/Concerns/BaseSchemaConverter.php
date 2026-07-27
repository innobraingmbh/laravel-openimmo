<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

use Illuminate\Support\Str;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Type as SerializerType;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

abstract class BaseSchemaConverter implements SchemaConverterInterface
{
    protected bool $skipUserDefinedFields = false;

    public function skipUserDefinedFields(bool $skip = true): static
    {
        $this->skipUserDefinedFields = $skip;

        return $this;
    }

    public function generateFor(string $className): mixed
    {
        return $this->handleClass(new ReflectionClass($className));
    }

    private function handleClass(ReflectionClass $class, ?string $path = null, bool $isArray = false): mixed
    {
        $path = in_array($path, [null, '', '0'], true) ? $class->getShortName() : $path.'.'.$class->getShortName();

        $properties = [];

        foreach ($class->getProperties() as $property) {
            $entry = $this->handleProperty($property, $path);

            if ($entry !== null) {
                [$name, $converted] = $entry;
                $properties[$name] = $converted;
            }
        }

        $object = $this->convertObject($class->getShortName(), $this->getClassDescription($class), $properties);

        return $isArray
            ? $this->convertArray($class->getShortName(), $this->getClassDescription($class), $object)
            : $object;
    }

    private function getClassDescription(ReflectionClass $class): string
    {
        $attrs = $class->getAttributes(Description::class);
        if ($attrs !== []) {
            return $attrs[0]->newInstance()->value;
        }

        $docComment = $class->getDocComment();
        if ($docComment === false) {
            return '';
        }

        $matches = Str::matchAll('/^ * .+$/m', $docComment);

        return collect($matches)->map(fn (string $match) => Str::substr($match, 3))->get(1) ?? '';
    }

    private function getPropertyDescription(ReflectionProperty $property): string
    {
        $attrs = $property->getAttributes(Description::class);
        if ($attrs !== []) {
            return $attrs[0]->newInstance()->value;
        }

        return $property->getName();
    }

    /**
     * @return array{0: string, 1: mixed}|null
     */
    private function handleProperty(ReflectionProperty $property, ?string $path = null): ?array
    {
        $name = $property->getName();

        if ($this->skipUserDefinedFields && in_array($name, [
            'userDefinedAnyfield',
            'userDefinedSimplefield',
            'userDefinedExtend',
        ], true)) {
            return null;
        }

        $type = (string) $property->getType();
        $isNullable = $property->getType()?->allowsNull() ?? false;

        if ($type === 'array') {
            $serializerType = $this->getSerializerType($property);
            if ($serializerType && preg_match('/^array<(.+)>$/', $serializerType, $matches) === 1 && class_exists($matches[1])) {
                $itemClass = new ReflectionClass($matches[1]);

                return [$itemClass->getShortName(), $this->handleClass($itemClass, $path, true)];
            }
        }

        $propertyType = $property->getType();
        if ($propertyType instanceof ReflectionNamedType && ! $propertyType->isBuiltin()) {
            $typeName = $propertyType->getName();

            if ($typeName === 'DateTime' || $typeName === 'DateTimeImmutable') {
                return [$name, $this->convertString($name, $this->getPropertyDescription($property), $isNullable)];
            }

            $nestedClass = new ReflectionClass($typeName);

            return [$nestedClass->getShortName(), $this->handleClass($nestedClass, $path)];
        }

        $enumOptions = $this->getEnumOptions($property);
        $description = $this->getPropertyDescription($property);

        $converted = match ($type) {
            'int', '?int', 'float', '?float' => $this->convertNumber($name, $description, $isNullable),
            'bool', '?bool' => $this->convertBoolean($name, $description, $isNullable),
            default => $enumOptions !== null
                ? $this->convertEnum($name, $description, $enumOptions, $isNullable)
                : $this->convertString($name, $description, $isNullable),
        };

        return [$name, $converted];
    }

    /**
     * @return array<int, string>|null
     */
    private function getEnumOptions(ReflectionProperty $property): ?array
    {
        $doc = $property->getDocComment();
        if ($doc === false) {
            return null;
        }

        if (preg_match('/@see ([A-Z][A-Z0-9_]+)\* constants/', $doc, $matches) !== 1) {
            return null;
        }

        $prefix = $matches[1];
        $constants = $property->getDeclaringClass()->getConstants();

        $options = array_values(array_filter(
            $constants,
            fn (string $name) => str_starts_with($name, $prefix),
            ARRAY_FILTER_USE_KEY,
        ));

        return $options !== [] ? $options : null;
    }

    private function getSerializerType(ReflectionProperty $property): ?string
    {
        $attributes = $property->getAttributes(SerializerType::class);
        if ($attributes === []) {
            return null;
        }

        /** @var SerializerType $serializerType */
        $serializerType = $attributes[0]->newInstance();

        return is_string($serializerType->name) ? $serializerType->name : null;
    }

    abstract protected function convertString(string $name, string $description, bool $nullable): mixed;

    abstract protected function convertNumber(string $name, string $description, bool $nullable): mixed;

    abstract protected function convertBoolean(string $name, string $description, bool $nullable): mixed;

    /**
     * @param  array<int, string>  $options
     */
    abstract protected function convertEnum(string $name, string $description, array $options, bool $nullable): mixed;

    /**
     * @param  array<string, mixed>  $properties
     */
    abstract protected function convertObject(string $name, string $description, array $properties): mixed;

    abstract protected function convertArray(string $name, string $description, mixed $items): mixed;
}
