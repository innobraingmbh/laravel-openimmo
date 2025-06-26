<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use Prism\Prism\Schema\ArraySchema;
use Prism\Prism\Schema\ObjectSchema;

/**
 * @see \Innobrain\OpenImmo\Services\SchemaGenerator
 *
 * @method static ObjectSchema|ArraySchema generateFor(string $className)
 * @method static \Innobrain\OpenImmo\Services\SchemaGenerator skipUserDefinedFields(bool $skip = true)
 */
class SchemaGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\SchemaGenerator::class;
    }
}
