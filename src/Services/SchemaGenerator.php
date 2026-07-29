<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Illuminate\Support\Manager;
use Innobrain\OpenImmo\Converters\Concerns\SchemaConverterInterface;
use Innobrain\OpenImmo\Converters\JsonSchemaConverter;
use Innobrain\OpenImmo\Converters\PrismSchemaConverter;
use Innobrain\OpenImmo\Enums\SchemaDriver;
use Override;

class SchemaGenerator extends Manager
{
    public function createPrismDriver(): PrismSchemaConverter
    {
        return new PrismSchemaConverter;
    }

    public function createJsonSchemaDriver(): JsonSchemaConverter
    {
        return new JsonSchemaConverter;
    }

    /**
     * @param  string|null|SchemaDriver  $driver
     */
    #[Override]
    public function driver($driver = null): mixed
    {
        if ($driver instanceof SchemaDriver) {
            return parent::driver($driver->value);
        }

        return parent::driver($driver);
    }

    public function getDefaultDriver(): string
    {
        return SchemaDriver::Prism->value;
    }

    public function generateFor(string $className): mixed
    {
        return $this->driver()->generateFor($className);
    }

    public function skipUserDefinedFields(bool $skip = true): SchemaConverterInterface
    {
        return $this->driver()->skipUserDefinedFields($skip);
    }
}
