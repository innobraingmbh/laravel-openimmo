<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters;

use Illuminate\JsonSchema\JsonSchema;
use Illuminate\JsonSchema\Types\Type;
use Innobrain\OpenImmo\Converters\Concerns\BaseSchemaConverter;
use Override;

final class JsonSchemaConverter extends BaseSchemaConverter
{
    #[Override]
    protected function convertString(string $name, string $description, bool $nullable): Type
    {
        return $this->applyNullable(JsonSchema::string()->description($description), $nullable);
    }

    #[Override]
    protected function convertNumber(string $name, string $description, bool $nullable): Type
    {
        return $this->applyNullable(JsonSchema::number()->description($description), $nullable);
    }

    #[Override]
    protected function convertBoolean(string $name, string $description, bool $nullable): Type
    {
        return $this->applyNullable(JsonSchema::boolean()->description($description), $nullable);
    }

    #[Override]
    protected function convertEnum(string $name, string $description, array $options, bool $nullable): Type
    {
        return $this->applyNullable(JsonSchema::string()->description($description)->enum($options), $nullable);
    }

    #[Override]
    protected function convertObject(string $name, string $description, array $properties): Type
    {
        return JsonSchema::object($properties)->description($description);
    }

    #[Override]
    protected function convertArray(string $name, string $description, mixed $items): Type
    {
        return JsonSchema::array()->items($items)->description($description);
    }

    private function applyNullable(Type $type, bool $nullable): Type
    {
        return $nullable ? $type->nullable() : $type;
    }
}
