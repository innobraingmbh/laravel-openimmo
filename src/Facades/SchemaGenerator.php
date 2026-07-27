<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use Innobrain\OpenImmo\Enums\SchemaDriver;

/**
 * @see \Innobrain\OpenImmo\Services\SchemaGenerator
 *
 * @method static mixed generateFor(string $className)
 * @method static \Innobrain\OpenImmo\Converters\Concerns\SchemaConverterInterface skipUserDefinedFields(bool $skip = true)
 * @method static \Innobrain\OpenImmo\Converters\Concerns\SchemaConverterInterface driver(SchemaDriver $driver)
 */
class SchemaGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\SchemaGenerator::class;
    }
}
