<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Illuminate\Support\Str;
use JMS\Serializer\Annotation\Type as SerializerType;
use Prism\Prism\Contracts\Schema;
use Prism\Prism\Schema\ArraySchema;
use Prism\Prism\Schema\BooleanSchema;
use Prism\Prism\Schema\NumberSchema;
use Prism\Prism\Schema\ObjectSchema;
use Prism\Prism\Schema\StringSchema;
use ReflectionClass;
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

        // @phpstan-ignore-next-line
        if (! $property->getType()?->isBuiltin()) {
            // @phpstan-ignore-next-line
            return $this->handleClass(new ReflectionClass($property->getType()?->getName()), $path);
        }

        return match ($type) {
            'int', '?int', 'float', '?float' => new NumberSchema($name, $name, $isNullable),
            'bool', '?bool' => new BooleanSchema($name, $name, $isNullable),
            default => new StringSchema($name, $name, $isNullable),
        };
    }

    private function getSerializerType(ReflectionProperty $property): ?string
    {
        $attributes = $property->getAttributes(SerializerType::class);
        if ($attributes !== []) {
            /** @var SerializerType $serializerType */
            $serializerType = $attributes[0]->newInstance();

            return is_string($serializerType->name) ? $serializerType->name : null;
        }

        $docComment = $property->getDocComment();
        if (is_string($docComment) && preg_match('/@Type\("(.+?)"\)/', $docComment, $matches) === 1) {
            return $matches[1];
        }

        return null;
    }
}
