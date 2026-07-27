<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters;

use Innobrain\OpenImmo\Converters\Concerns\BaseSchemaConverter;
use Override;
use Prism\Prism\Contracts\Schema;
use Prism\Prism\Schema\ArraySchema;
use Prism\Prism\Schema\BooleanSchema;
use Prism\Prism\Schema\EnumSchema;
use Prism\Prism\Schema\NumberSchema;
use Prism\Prism\Schema\ObjectSchema;
use Prism\Prism\Schema\StringSchema;

final class PrismSchemaConverter extends BaseSchemaConverter
{
    #[Override]
    protected function convertString(string $name, string $description, bool $nullable): Schema
    {
        return new StringSchema($name, $description, $nullable);
    }

    #[Override]
    protected function convertNumber(string $name, string $description, bool $nullable): Schema
    {
        return new NumberSchema($name, $description, $nullable);
    }

    #[Override]
    protected function convertBoolean(string $name, string $description, bool $nullable): Schema
    {
        return new BooleanSchema($name, $description, $nullable);
    }

    #[Override]
    protected function convertEnum(string $name, string $description, array $options, bool $nullable): Schema
    {
        return new EnumSchema($name, $description, $options, $nullable);
    }

    #[Override]
    protected function convertObject(string $name, string $description, array $properties): ObjectSchema
    {
        return new ObjectSchema($name, $description, array_values($properties));
    }

    #[Override]
    protected function convertArray(string $name, string $description, mixed $items): ArraySchema
    {
        return new ArraySchema($name, $description, $items);
    }
}
