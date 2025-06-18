<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use ReflectionClass;
use ReflectionProperty;

class SchemaGenerator
{
    private array $schema = [];

    private bool $skipUserDefinedFields = false;

    public function skipUserDefinedFields(bool $skip = true): self
    {
        $this->skipUserDefinedFields = $skip;

        return $this;
    }

    public function generateFor(string $className): array
    {
        $this->schema = [];

        $class = new ReflectionClass($className);
        $this->handleClass($class);

        return $this->schema;
    }

    private function handleClass(ReflectionClass $class, ?string $path = null): void
    {
        $properties = $class->getProperties();
        $path = $path ? $path.'.'.$class->getShortName() : $class->getShortName();

        foreach ($properties as $property) {
            $this->handleProperty($property, $path);
        }
    }

    private function handleProperty(ReflectionProperty $property, ?string $path = null): void
    {
        $property->setAccessible(true);
        $name = $property->getName();

        if ($this->skipUserDefinedFields && in_array($name, [
            'userDefinedAnyfield',
            'userDefinedSimplefield',
            'userDefinedExtend',
        ], true)) {
            return;
        }

        $type = (string) $property->getType();
        $isNullable = $property->getType()?->allowsNull() ?? false;

        $fullPath = $path ? $path.'.'.$name : $name;

        if ($type === 'array') {
            $docComment = $property->getDocComment();
            if ($docComment) {
                preg_match('/@Type\("array<(.+?)>"\)/', $docComment, $matches);
                if (isset($matches[1]) && class_exists($matches[1])) {
                    $this->handleClass(new ReflectionClass($matches[1]), $path);

                    return;
                }
            }
        }

        if (! $property->getType()?->isBuiltin()) {
            $this->handleClass(new ReflectionClass($property->getType()?->getName()), $path);

            return;
        }

        data_set($this->schema, $fullPath, [
            'name' => $name,
            'type' => $type,
            'nullable' => $isNullable,
            'description' => $name,
        ]);
    }
}
