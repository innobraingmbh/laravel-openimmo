<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Property;

/**
 * @see \Katalam\OpenImmo\Services\CodeGenUtil
 *
 * @method static void addDescriptionPart(Property $classProperty, string $descriptionPart, string $separator = \Katalam\OpenImmo\Services\CodeGenUtil::DESCRIPTION_PART_DELIMITER)
 * @method static void generateGetterAndSetter(Property $property, ClassType $class, bool $fluentApi = true, bool $nullable = false)
 * @method static void generateGetter(Property $property, ClassType $class, bool $nullable)
 * @method static void generateSetter(Property $property, ClassType $class, bool $fluentApi, bool $nullable)
 * @method static null|string getAnnotationFromProperty(Property $property, string $annotation)
 */
class CodeGenUtil extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Katalam\OpenImmo\Services\CodeGenUtil::class;
    }
}
