<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Property;

class CodeGenUtil
{
    public const string DESCRIPTION_PART_DELIMITER = PHP_EOL;

    /**
     * Adds a new description part to the given class property.
     */
    public function addDescriptionPart(Property $classProperty, string $descriptionPart, string $separator = self::DESCRIPTION_PART_DELIMITER): void
    {
        if (trim($descriptionPart) === '') {
            return;
        }

        $comment = $classProperty->getComment() ?? '';
        if (trim($comment) === '') {
            $currentDescriptionParts = [];
        } else {
            $currentDescriptionParts = explode($separator !== '' && $separator !== '0' ? $separator : self::DESCRIPTION_PART_DELIMITER, $comment);
        }

        $currentDescriptionParts[] = $descriptionPart;
        $classProperty->setComment(implode($separator, $currentDescriptionParts));
    }

    public function generateGetterAndSetter(Property $property, ClassType $class, bool $fluentApi = true, bool $nullable = false): void
    {
        $this->generateGetter($property, $class, $nullable);
        $this->generateSetter($property, $class, $fluentApi, $nullable);
    }

    public function generateGetter(Property $property, ClassType $class, bool $nullable): void
    {
        $propertyType = $property->getType();
        $returnsArray = $propertyType === 'array';
        $getter = $class->addMethod('get'.ucfirst($property->getName()));
        $getterCode = 'return $this->'.$property->getName().';';
        if ($returnsArray) {
            $getter->setBody($getterCode)
                ->setReturnType('array')
                ->addComment('Returns array of '.str_replace('[]', '', $propertyType))
                ->setReturnNullable(false);
        } else {
            $getter->setBody($getterCode)
                ->setReturnType($propertyType)
                ->setReturnNullable($nullable);
        }
    }

    public function generateSetter(Property $property, ClassType $class, bool $fluentApi, bool $nullable): void
    {
        $setter = $class->addMethod('set'.ucfirst($property->getName()));
        $propertyType = $property->getType();
        $isPlural = $propertyType === 'array';

        $setter->addParameter($property->getName())
            ->setType($isPlural ? 'array' : $propertyType)
            ->setNullable($isPlural ? false : $nullable);

        $setterCode = '$this->'.$property->getName().' = $'.$property->getName().';';
        if ($fluentApi) {
            $setter->setReturnType('\\'.DtoGenerator::NAMESPACE.'\\'.$class->getName());
            $setterCode .= PHP_EOL.'return $this;';
        }

        $setter->setBody($setterCode);
    }

    public function getAnnotationFromProperty(Property $property, string $annotation): ?string
    {
        $commentLines = explode(self::DESCRIPTION_PART_DELIMITER, $property->getComment() ?? '');
        foreach ($commentLines as $commentLine) {
            if (str_starts_with($commentLine, '@'.$annotation)) {
                return str_replace(sprintf('@%s ', $annotation), '', $commentLine);
            }
        }

        return null;
    }
}
