<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Illuminate\Support\Str;
use JMS\Serializer\Annotation\Type as SerializerType;
use Prism\Prism\Contracts\Schema;
use Prism\Prism\Schema\ArraySchema;
use Prism\Prism\Schema\BooleanSchema;
use Prism\Prism\Schema\EnumSchema;
use Prism\Prism\Schema\NumberSchema;
use Prism\Prism\Schema\ObjectSchema;
use Prism\Prism\Schema\StringSchema;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

class SchemaGenerator
{
    private bool $skipUserDefinedFields = false;

    public function skipUserDefinedFields(bool $skip = true): self
    {
        $this->skipUserDefinedFields = $skip;

        return $this;
    }

    public function generateFor(string $className): ObjectSchema|ArraySchema
    {
        return $this->handleClass(new ReflectionClass($className));
    }

    private function handleClass(ReflectionClass $class, ?string $path = null, bool $isArray = false): ArraySchema|ObjectSchema
    {
        $properties = $class->getProperties();
        $path = in_array($path, [null, '', '0'], true) ? $class->getShortName() : $path.'.'.$class->getShortName();

        $schemas = [];

        foreach ($properties as $property) {
            if (($schema = $this->handleProperty($property, $path)) instanceof Schema) {
                $schemas[] = $schema;
            }
        }

        $objectSchema = new ObjectSchema(
            name: $class->getShortName(),
            description: $this->getClassDescription($class),
            properties: $schemas,
        );

        return $isArray
            ? new ArraySchema(
                name: $class->getShortName(),
                description: $this->getClassDescription($class),
                items: $objectSchema,
            )
            : $objectSchema;
    }

    private function getClassDescription(ReflectionClass $class): string
    {
        $docComment = $class->getDocComment();
        $matches = Str::matchAll('/^ * .+$/m', $docComment);

        return collect($matches)->map(fn (string $match) => Str::substr($match, 3))->get(1) ?? '';
    }

    private function handleProperty(ReflectionProperty $property, ?string $path = null): ?Schema
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
                return $this->handleClass(new ReflectionClass($matches[1]), $path, true);
            }
        }

        $propertyType = $property->getType();
        if ($propertyType instanceof ReflectionNamedType && ! $propertyType->isBuiltin()) {
            $typeName = $propertyType->getName();

            if ($typeName === 'DateTime' || $typeName === 'DateTimeImmutable') {
                return new StringSchema($name, $name, $isNullable);
            }

            return $this->handleClass(new ReflectionClass($typeName), $path);
        }

        $enumOptions = $this->getEnumOptions($property);

        return match ($type) {
            'int', '?int', 'float', '?float' => new NumberSchema($name, $name, $isNullable),
            'bool', '?bool' => new BooleanSchema($name, $name, $isNullable),
            default => $enumOptions !== null
                ? new EnumSchema($name, $name, $enumOptions, $isNullable)
                : new StringSchema($name, $name, $isNullable),
        };
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
}
