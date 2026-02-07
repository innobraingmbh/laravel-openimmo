<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use GoetasWebservices\XML\XSDReader\Schema\Type\Type;
use Illuminate\Support\Facades\Facade;
use Nette\PhpGenerator\Property;

/**
 * @see \Innobrain\OpenImmo\Services\TypeUtil
 *
 * @method static string getTypeForSerializer(string $type, null|string $namespace = null)
 * @method static string getValidPhpType(string $propertyType, null|string $namespace = null)
 * @method static float|false|int|array|string|null getDefaultValueForType(string $propertyType, bool $nullable)
 * @method static null|string extractTypeForPhp(Type $typeFromXsd, null|string $propertyName = null)
 * @method static bool isConstantsBasedProperty(Property $property)
 * @method static string camelize(string $key)
 * @method static string studly(string $key)
 */
class TypeUtil extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\TypeUtil::class;
    }
}
