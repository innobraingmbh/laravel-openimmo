<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use JMS\Serializer\Serializer;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

/**
 * @see \Innobrain\OpenImmo\Services\SchemaGenerator
 *
 * @method static array generateFor(string $className)
 * @method static \Innobrain\OpenImmo\Services\SchemaGenerator skipUserDefinedFields(bool $skip = true)
 */
class SchemaGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\SchemaGenerator::class;
    }
}
