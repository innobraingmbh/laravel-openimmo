<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use DateTime;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexType;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexTypeSimpleContent;
use GoetasWebservices\XML\XSDReader\Schema\Type\Type;
use Innobrain\OpenImmo\Facades\CodeGenUtil;
use Nette\PhpGenerator\Property;

class TypeUtil
{
    public function getTypeForSerializer(string $type): string
    {
        $isPlural = str_ends_with($type, '[]');
        $singular = str_replace('[]', '', $type);
        switch ($singular) {
            case 'string':
            case 'float':
            case 'int':
            case 'array':
                $type = $singular;
                break;

            case 'positiveInteger':
                $type = 'int';
                break;

            case 'bool':
            case 'boolean':
                $type = 'bool';
                break;

            case 'dateTime':
            case DateTime::class:
                $type = 'DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>';
                break;

            case 'date':
                $type = 'DateTime<\'Y-m-d\'>';
                break;

            case 'decimal':
                $type = 'float';
                break;

            case 'kontakt':
            case 'base64Binary':
                $type = 'string';
                break;

            default:
                $ns = DtoGenerator::NAMESPACE;
                $type = $ns.'\\'.$singular;
                break;
        }

        if ($isPlural) {
            return 'array<'.$type.'>';
        }

        return $type;
    }

    public function getValidPhpType(string $propertyType): string
    {
        $isPlural = str_ends_with($propertyType, '[]');
        if ($isPlural) {
            return 'array';
        }

        switch ($propertyType) {
            case 'decimal':
            case 'float':
                $propertyType = 'float';
                break;

            case 'bool':
            case 'boolean':
                $propertyType = 'bool';
                break;

            case 'int':
            case 'positiveInteger':
            case 'PositiveIntegerType':
                $propertyType = 'int';
                break;

            case 'date':
            case 'dateTime':
            case '\\'.DateTime::class:
                $propertyType = '\\'.DateTime::class;
                break;

            case 'string':
            case 'kontakt':
            case 'base64Binary':
                $propertyType = 'string';
                break;

            case 'array':
                $propertyType = 'array';
                break;

            default:
                $ns = DtoGenerator::NAMESPACE;
                $propertyType = '\\'.$ns.'\\'.$propertyType;
        }

        return $propertyType;
    }

    public function getDefaultValueForType(string $propertyType, bool $nullable): float|false|int|array|string|null
    {
        $defaultValue = match ($propertyType) {
            'float' => 0.0,
            'bool' => false,
            'int' => 0,
            'string' => '',
            'array' => [],
            default => str_ends_with($propertyType, '[]') ? [] : null,
        };

        return $nullable ? null : $defaultValue;
    }

    public function extractTypeForPhp(Type $typeFromXsd, ?string $propertyName = null): ?string
    {
        $type = 'string';

        if (($typeFromXsd->getName() ?? '') !== '') {
            $type = $typeFromXsd->getName();
        } elseif ($typeFromXsd instanceof ComplexType) {
            if ($propertyName !== null) {
                return ucfirst($propertyName);
            }
        } elseif ($typeFromXsd instanceof ComplexTypeSimpleContent) {
            // is default string
        } elseif ($typeFromXsd->getRestriction()->getBase() !== '') {
            $type = $typeFromXsd->getRestriction()->getBase()->getName();
        }

        return $type;
    }

    public function isConstantsBasedProperty(Property $property): bool
    {
        return strtoupper($property->getName()).'_* constants' === CodeGenUtil::getAnnotationFromProperty($property, 'see');
    }

    public function camelize(string $key): string
    {
        return str($key)
            ->lower()
            ->replace('-', '_')
            ->camel()
            ->toString();
    }

    public function studly(string $key): string
    {
        return str($key)
            ->lower()
            ->replace('-', '_')
            ->studly()
            ->toString();
    }
}
