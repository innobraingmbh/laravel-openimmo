<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Services;

use GoetasWebservices\XML\XSDReader\Exception\IOException;
use GoetasWebservices\XML\XSDReader\Schema\Attribute\Attribute;
use GoetasWebservices\XML\XSDReader\Schema\Element\Choice;
use GoetasWebservices\XML\XSDReader\Schema\Element\Element;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementDef;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementItem;
use GoetasWebservices\XML\XSDReader\Schema\Element\ElementRef;
use GoetasWebservices\XML\XSDReader\Schema\Element\Sequence;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Extension;
use GoetasWebservices\XML\XSDReader\Schema\Inheritance\Restriction;
use GoetasWebservices\XML\XSDReader\Schema\Item;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexType;
use GoetasWebservices\XML\XSDReader\Schema\Type\ComplexTypeSimpleContent;
use GoetasWebservices\XML\XSDReader\Schema\Type\SimpleType;
use GoetasWebservices\XML\XSDReader\SchemaReader;
use Illuminate\Support\Facades\File;
use InvalidArgumentException;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Property;
use Nette\PhpGenerator\Visibility;

class DtoGenerator
{
    protected string $targetFolder = './src/Dtos/';

    protected bool $wipeTargetFolder = true;

    protected array $referencedInlineElements = [];

    private string $namespace = 'Katalam\\OpenImmo\\Dtos';

    public function setTargetFolder(string $targetFolder): self
    {
        $this->targetFolder = $targetFolder;

        return $this;
    }

    public function setWipeTargetFolder(bool $wipeTargetFolder = true): self
    {
        $this->wipeTargetFolder = $wipeTargetFolder;

        return $this;
    }

    /**
     * @throws IOException
     */
    public function generate(string $xsdPath): void
    {
        $this->wipeTargetFolder();

        $reader = new SchemaReader;
        $schema = $reader->readFile($xsdPath);

        collect($schema->getElements())
            ->each(function (ElementDef $element) {
                if (! ($element->getType() instanceof SimpleType)) {
                    $this->parseElement($element);
                }
            });
    }

    protected function parseElement(ElementDef $element): void
    {
        $className = str($element->getName())
            ->lower()
            ->replace('-', '_')
            ->studly()
            ->toString();
        $className = TypeUtil::translateClass($className);

        $namespace = (new PhpNamespace($this->namespace))
            ->addUse(XmlRoot::class, 'XmlRoot')
            ->addUse(Type::class, 'Type');

        $class = $namespace->addClass($className);

        $class
            ->addComment('Class '.$className.PHP_EOL.$element->getDoc())
            ->addComment('@XmlRoot("'.$element->getName().'")');

        /** @var Attribute[] $attributes */
        $attributes = $element->getType()->getAttributes();

        collect($attributes)
            ->each(function (Attribute $attribute) use ($class, $namespace) {
                $this->parseAttribute($attribute, $class, $namespace);
            });

        if ($element->getType() instanceof ComplexTypeSimpleContent) {
            $this->parseSimpleValue($element->getType()->getExtension(), $class, $namespace);
        } else {
            /** @var ComplexType $complexType */
            $complexType = $element->getType();
            if ($complexType->isMixed()) {
                // @see https://github.com/ujamii/openimmo/issues/3
                $this->parseSimpleValue(null, $class, $namespace);
            } else {
                collect($element->getType()->getElements())
                    ->each(function (Choice|ElementRef|Element $property) use ($class, $namespace) {
                        if ($property instanceof Choice) {
                            /** @var ElementRef $choiceProperty */
                            collect($property->getElements())
                                ->each(function (ElementRef|Sequence $choiceProperty) use ($class, $namespace) {
                                    $this->parseProperty($choiceProperty, $class, $namespace);
                                });
                        } else {
                            $this->parseProperty($property, $class, $namespace);
                        }
                    });
            }
        }

        if (count($element->getType()->getAttributes()) > 0) {
            $namespace->addUse(XmlAttribute::class);
        }

        $classPropertyCount = count($class->getProperties());
        $hasConstructor = $class->hasMethod('__construct');
        if (! $hasConstructor && $classPropertyCount > 0) {
            $this->generateConstructor($class);
        }

        $this->createPhpFile($namespace, $class);
    }

    protected function createPhpFile(PhpNamespace $namespace, ClassType $class): void
    {
        $file = new PhpFile;
        $file->addNamespace($namespace);
        $file->setStrictTypes();
        $code = (new Printer)->printFile($file);

        File::put($this->targetFolder.$class->getName().'.php', $code);
    }

    protected function generateConstructor(ClassType $class): void
    {
        $constructor = $class->addMethod('__construct');

        $constructorCode = [];
        foreach ($class->getProperties() as $classPropertyName => $property) {
            $type = $property->getType();
            $typeIsArray = $type === 'array';
            $phpParam = $constructor->addParameter($classPropertyName)
                ->setNullable($property->isNullable())
                ->setType($typeIsArray ? 'array' : $type);
            $phpParam->setDefaultValue(TypeUtil::getDefaultValueForType($type, $property->isNullable()));

            $constructorCode[] = '$this->'.$classPropertyName.' = $'.$classPropertyName.';';
        }

        $constructor->setBody(implode(PHP_EOL, $constructorCode));
    }

    protected function parseProperty(Element|ElementRef|ElementDef|Sequence|ElementItem $property, ClassType $class, PhpNamespace $namespace): void
    {
        $propertyName = str($property->getName())
            ->lower()
            ->replace('-', '_')
            ->camel()
            ->toString();
        $propertyName = TypeUtil::translateProperties($propertyName);

        if (array_key_exists($propertyName, $class->getProperties())) {
            return;
        }
        if ($property instanceof Sequence) {
            foreach ($property->getElements() as $sequenceProperty) {
                $this->parseProperty($sequenceProperty, $class, $namespace);
            }

            return;
        }
        $classProperty = $class->addProperty($propertyName)
            ->setVisibility(Visibility::Protected);
        $xsdType = $this->getPhpPropertyTypeFromXsdElement($property);

        // take min/max into account, as this may be an array instead
        if ($property->getMax() === -1) {
            $classProperty->addComment('@XmlList(inline = true, entry = "'.$property->getName().'")');
            $namespace->addUse(XmlList::class);
        }

        $phpType = TypeUtil::getValidPhpType($xsdType);
        $serializerType = TypeUtil::getTypeForSerializer($xsdType);

        $classProperty->addComment('@Type("'.$serializerType.'")');
        $namespace->addUse(Type::class);

        $isArray = $phpType === 'array';
        $nullable = ! $isArray && $property->getMin() === 0;

        // if the property type is an object, it should be nullable
        if ($phpType === '\DateTime' || str_starts_with($serializerType, TypeUtil::OPENIMMO_NAMESPACE)) {
            $nullable = true;
        }

        $classProperty->setType($phpType)
            ->setNullable($nullable);

        if ($nullable) {
            $classProperty->setValue(null);
        } else {
            $classProperty
                ->setValue(TypeUtil::getDefaultValueForType($phpType, $nullable))
                ->addComment('@SkipWhenEmpty');
            $namespace->addUse(SkipWhenEmpty::class);
        }

        if ($property->getType()->getRestriction() !== null) {
            $this->parseRestriction(
                $property,
                $classProperty,
                $class,
            );
        }

        CodeGenUtil::generateGetterAndSetter($classProperty, $class, true, $nullable);
    }

    private function getPhpPropertyTypeFromXsdElement(Item|Element|ElementRef|ElementDef|ElementItem $property): string
    {
        if ($property instanceof ElementRef) {
            if ($property->getReferencedElement()->getType() instanceof SimpleType) {
                $propertyType = TypeUtil::extractTypeForPhp($property->getReferencedElement()->getType());
            } else {
                $propertyType = str($property->getReferencedElement()->getName())
                    ->lower()
                    ->replace('-', '_')
                    ->camel()
                    ->toString();
            }
        } elseif ($property->getType() instanceof ComplexType) {
            $this->referencedInlineElements[] = $property;
            $propertyName = str($property->getName())
                ->lower()
                ->replace('-', '_')
                ->camel()
                ->toString();
            $propertyType = TypeUtil::extractTypeForPhp($property->getType(), $propertyName);
        } else {
            $propertyType = TypeUtil::extractTypeForPhp($property->getType());
        }

        if (! ($property instanceof Attribute) && $property->getMax() === -1) {
            $propertyType .= '[]';
        }

        return $propertyType;
    }

    protected function parseSimpleValue(?Extension $extension, ClassType $class, PhpNamespace $namespace): void
    {
        if (is_null($extension)) {
            $xsdType = 'string';
        } else {
            $xsdType = TypeUtil::extractTypeForPhp($extension->getBase());
        }

        $propertyType = TypeUtil::getValidPhpType($xsdType);

        $property = $class->addProperty('value')
            ->setVisibility(Visibility::Protected)
            ->setType($propertyType)
            ->setNullable()
            ->setValue(null)
            ->addComment('@Inline')
            ->addComment('@Type("'.TypeUtil::getTypeForSerializer($xsdType).'")');

        $namespace
            ->addUse(Type::class)
            ->addUse(Inline::class);

        CodeGenUtil::generateGetterAndSetter($property, $class, true, ! TypeUtil::isConstantsBasedProperty($property));
    }

    protected function parseAttribute(Attribute $attribute, ClassType $class, PhpNamespace $namespace): void
    {
        $propertyName = str($attribute->getName())
            ->lower()
            ->replace('-', '_')
            ->camel()
            ->toString();
        $propertyName = TypeUtil::translateAttributes($propertyName);

        $xsdType = TypeUtil::extractTypeForPhp($attribute->getType());
        $phpType = TypeUtil::getValidPhpType($xsdType);

        $nullable = true;

        $property = $class->addProperty($propertyName)
            ->setVisibility(Visibility::Protected)
            ->setType($phpType);
        $property
            ->addComment('@Type("'.TypeUtil::getTypeForSerializer($xsdType).'")')
            ->addComment('@XmlAttribute');

        $namespace->addUse(Type::class);

        $this->addSerializedNameIfNecessary($attribute, $property, $namespace);
        $commentEqualsRequired = $this->addUseCommentIfPresent($attribute, $property);
        if ($commentEqualsRequired === true) {
            $nullable = false;
        }

        $property->setNullable($nullable)
            ->setValue(TypeUtil::getDefaultValueForType($phpType, $nullable));

        $this->parseRestriction($attribute, $property, $class);

        CodeGenUtil::generateGetterAndSetter($property, $class, true, $nullable);
    }

    protected function parseRestriction(Attribute|Element|ElementRef $attribute, Property $property, ClassType $class): void
    {
        $restrictions = $attribute->getType()->getRestriction();
        if (! $restrictions instanceof Restriction) {
            return;
        }
        $name = $attribute->getName();

        collect($restrictions->getChecks())
            ->each(function (array $options, string $type) use ($class, $name, $property) {
                switch ($type) {
                    case 'enumeration':
                        $prefix = str($name)->upper();
                        $prefix = str(TypeUtil::translateConstants($prefix->toString()));
                        File::append('log.txt', $prefix.PHP_EOL);
                        collect($options)
                            ->each(function (array $option) use ($class, $prefix) {
                                $name = str(data_get($option, 'value'))
                                    ->replace(['-', ' '], '_')
                                    ->upper()
                                    ->toString();
                                $name = TypeUtil::translateConstants($name);

                                $constantName = $prefix->append('_')->append($name)->toString();

                                $constantAlreadyDefined = collect($class->getConstants())
                                    ->keys()
                                    ->contains($constantName);

                                if ($constantAlreadyDefined) {
                                    return;
                                }

                                $class->addConstant($constantName, data_get($option, 'value'));
                            });

                        $property->addComment("@see $prefix* constants")
                            ->setValue(TypeUtil::getDefaultValueForType($property->getType(), false))
                            ->setNullable(false);
                        break;
                    case 'whiteSpace':
                        // Do nothing. This is not a real restriction, it is just an empty block.
                        break;
                    case 'minLength':
                        CodeGenUtil::addDescriptionPart($property, 'Minimum length: '.$options[0]['value']);
                        break;

                    case 'minInclusive':
                        CodeGenUtil::addDescriptionPart($property, 'Minimum value (inclusive): '.$options[0]['value']);
                        break;

                    case 'maxInclusive':
                        CodeGenUtil::addDescriptionPart($property, 'Maximum value (inclusive): '.$options[0]['value']);
                        break;

                    case 'fractionDigits':
                        CodeGenUtil::addDescriptionPart($property, 'Maximum precision: '.$options[0]['value']);
                        break;

                    default:
                        throw new InvalidArgumentException(vsprintf('Type "%s" is not handled in %s->parseAttribute', [$type, self::class]));
                }
            });
    }

    /**
     * Serialized names may differ from property names.
     */
    private function addSerializedNameIfNecessary(Attribute $attribute, Property $property, PhpNamespace $namespace): void
    {
        $attributeName = $attribute->getName();

        if (strtolower($attributeName) !== $attributeName) {
            $property->addComment('@SerializedName("'.$attributeName.'")');
            $namespace->addUse(SerializedName::class);
        }
    }

    private function addUseCommentIfPresent(Attribute $attribute, Property $property): ?true
    {
        $use = $attribute->getUse();

        if ($use === '') {
            return null;
        }

        $property->addComment($use);

        if ($use !== 'required') {
            return null;
        }

        return true;
    }

    protected function wipeTargetFolder(): void
    {
        if (! $this->wipeTargetFolder) {
            return;
        }

        File::ensureDirectoryExists($this->targetFolder);

        $files = File::files($this->targetFolder);

        foreach ($files as $file) {
            File::delete((string) $file);
        }
    }
}
