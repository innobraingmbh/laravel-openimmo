<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

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
use Innobrain\OpenImmo\Facades\CodeGenUtil;
use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Facades\TypeUtil;
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
    public const string NAMESPACE = 'Innobrain\\OpenImmo\\Dtos';

    protected string $namespace = self::NAMESPACE;

    protected string $targetFolder = './src/Dtos/';

    protected bool $wipeTargetFolder = true;

    protected bool $skipTranslation = false;

    protected bool $skipHelperGeneration = false;

    protected array $referencedInlineElements = [];

    public function setTargetFolder(string $targetFolder): self
    {
        $targetFolder = str($targetFolder)
            ->rtrim('/')
            ->append('/')
            ->toString();

        File::ensureDirectoryExists($targetFolder);

        $this->targetFolder = $targetFolder;

        return $this;
    }

    public function getTargetFolder(): string
    {
        return $this->targetFolder;
    }

    public function setWipeTargetFolder(bool $wipeTargetFolder = true): self
    {
        $this->wipeTargetFolder = $wipeTargetFolder;

        return $this;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function setSkipTranslation(bool $skipTranslation = true): self
    {
        $this->skipTranslation = $skipTranslation;

        return $this;
    }

    public function setSkipHelperGeneration(bool $skipHelperGeneration = true): self
    {
        $this->skipHelperGeneration = $skipHelperGeneration;

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
        collect($this->referencedInlineElements)
            ->each(function (Element $element) {
                $this->parseElement($element);
            });

        if (! $this->skipHelperGeneration) {
            $helperGen = new HelperGenUtil;

            $helpersNamespace = str_replace('\\Dtos', '\\Helpers', $this->namespace);
            $helperGen->setHelpersNamespace($helpersNamespace);
            $helperGen->setDtoNamespace($this->namespace);

            $rootClassName = 'Openimmo';
            if (! $this->skipTranslation) {
                $rootClassName = TranslationService::translateClass($rootClassName);
            }

            $helperGen->setStartingClass($this->namespace.'\\'.$rootClassName);

            if ($this->namespace === self::NAMESPACE) {
                $helperGen->setTargetFile('./src/helpers.php');
            } else {
                $suffix = str($this->namespace)->afterLast('\\')->snake()->toString();
                $helperGen->setTargetFile('./src/helpers_'.$suffix.'.php');
            }

            $helperGen->generate();
        }
    }

    protected function parseElement(ElementDef|Element $element): void
    {
        $className = TypeUtil::studly($element->getName());
        if (! $this->skipTranslation) {
            $className = TranslationService::translateClass($className);
        }

        $namespace = new PhpNamespace($this->namespace)
            ->addUse(XmlRoot::class, 'XmlRoot')
            ->addUse(Type::class, 'Type');

        $class = $namespace->addClass($className);

        $class
            ->addComment('Class '.$className.PHP_EOL.$element->getDoc())
            ->addAttribute(XmlRoot::class, ['name' => $element->getName()]);

        /** @var Attribute[] $attributes */
        // @phpstan-ignore-next-line
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
                // @phpstan-ignore-next-line
                collect($element->getType()->getElements())
                    ->each(function (Choice|ElementRef|Element $property) use ($class, $namespace) {
                        if ($property instanceof Choice) {
                            collect($property->getElements())
                                // @phpstan-ignore-next-line
                                ->each(function (ElementRef|Sequence $choiceProperty) use ($class, $namespace) {
                                    /** @var ElementRef $choiceProperty */
                                    $this->parseProperty($choiceProperty, $class, $namespace);
                                });
                        } else {
                            $this->parseProperty($property, $class, $namespace);
                        }
                    });
            }
        }

        // @phpstan-ignore-next-line
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
        $propertyName = TypeUtil::camelize($property->getName());
        if (! $this->skipTranslation) {
            $propertyName = TranslationService::translateProperty($propertyName);
        }

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
        // @phpstan-ignore-next-line
        if ($property->getMax() === -1) {
            $classProperty->addAttribute(XmlList::class, ['inline' => true, 'entry' => $property->getName()]);
            $namespace->addUse(XmlList::class);
        }

        $phpType = TypeUtil::getValidPhpType($xsdType, $this->namespace);
        $serializerType = TypeUtil::getTypeForSerializer($xsdType, $this->namespace);

        $classProperty->addAttribute(Type::class, [$serializerType]);
        $namespace->addUse(Type::class);

        $isArray = $phpType === 'array';
        // @phpstan-ignore-next-line
        $nullable = ! $isArray && $property->getMin() === 0;

        // if the property type is an object, it should be nullable
        if ($phpType === '\DateTime' || str_starts_with($serializerType, $this->namespace)) {
            $nullable = true;
        }

        $classProperty->setType($phpType)
            ->setNullable($nullable);

        if ($nullable) {
            $classProperty->setValue(null);
        } else {
            $classProperty
                ->setValue(TypeUtil::getDefaultValueForType($phpType, false))
                ->addAttribute(SkipWhenEmpty::class);
            $namespace->addUse(SkipWhenEmpty::class);
        }

        // @phpstan-ignore-next-line
        if ($property->getType()->getRestriction() !== null) {
            $this->parseRestriction(
                $property,
                $classProperty,
                $class,
            );
        }

        $propertyName = $property->getName();
        $classProperty->addAttribute(SerializedName::class, [$propertyName]);
        $namespace->addUse(SerializedName::class);

        CodeGenUtil::generateGetterAndSetter($classProperty, $class, true, $nullable, $this->namespace);
    }

    private function getPhpPropertyTypeFromXsdElement(Item|Element|ElementRef|ElementDef|ElementItem $property): string
    {
        if ($property instanceof ElementRef) {
            if ($property->getReferencedElement()->getType() instanceof SimpleType) {
                $propertyType = TypeUtil::extractTypeForPhp($property->getReferencedElement()->getType());
            } else {
                $propertyType = TypeUtil::studly($property->getReferencedElement()->getName());
                if (! $this->skipTranslation) {
                    $propertyType = TranslationService::translateClass($propertyType);
                }
            }
        } elseif ($property->getType() instanceof ComplexType) {
            $this->referencedInlineElements[] = $property;
            $propertyName = TypeUtil::studly($property->getName());
            if (! $this->skipTranslation) {
                $propertyName = TranslationService::translateClass($propertyName);
            }

            $propertyType = TypeUtil::extractTypeForPhp($property->getType(), $propertyName);
        } else {
            $propertyType = TypeUtil::extractTypeForPhp($property->getType());
        }

        // @phpstan-ignore-next-line
        if (! ($property instanceof Attribute) && $property->getMax() === -1) {
            $propertyType .= '[]';
        }

        return $propertyType;
    }

    protected function parseSimpleValue(?Extension $extension, ClassType $class, PhpNamespace $namespace): void
    {
        $xsdType = is_null($extension) ? 'string' : TypeUtil::extractTypeForPhp($extension->getBase());

        $propertyType = TypeUtil::getValidPhpType($xsdType, $this->namespace);

        $property = $class->addProperty('value')
            ->setVisibility(Visibility::Protected)
            ->setType($propertyType)
            ->setNullable()
            ->setValue(null)
            ->addAttribute(Inline::class)
            ->addAttribute(Type::class, [TypeUtil::getTypeForSerializer($xsdType, $this->namespace)]);

        $namespace
            ->addUse(Type::class)
            ->addUse(Inline::class);

        CodeGenUtil::generateGetterAndSetter($property, $class, true, ! TypeUtil::isConstantsBasedProperty($property), $this->namespace);
    }

    protected function parseAttribute(Attribute $attribute, ClassType $class, PhpNamespace $namespace): void
    {
        $propertyName = TypeUtil::camelize($attribute->getName());
        if (! $this->skipTranslation) {
            $propertyName = TranslationService::translateAttribute($propertyName);
        }

        $xsdType = TypeUtil::extractTypeForPhp($attribute->getType());
        $phpType = TypeUtil::getValidPhpType($xsdType, $this->namespace);

        $nullable = true;

        $property = $class->addProperty($propertyName)
            ->setVisibility(Visibility::Protected)
            ->setType($phpType);
        $property
            ->addAttribute(Type::class, [TypeUtil::getTypeForSerializer($xsdType, $this->namespace)])
            ->addAttribute(XmlAttribute::class);

        $namespace->addUse(Type::class);

        $this->addSerializedName($attribute, $property, $namespace);
        $commentEqualsRequired = $this->addUseCommentIfPresent($attribute, $property);
        if ($commentEqualsRequired === true) {
            $nullable = false;
        }

        $property->setNullable($nullable)
            ->setValue(TypeUtil::getDefaultValueForType($phpType, $nullable));

        $this->parseRestriction($attribute, $property, $class);

        CodeGenUtil::generateGetterAndSetter($property, $class, true, $nullable, $this->namespace);
    }

    protected function parseRestriction(Attribute|Element|ElementRef|ElementItem $attribute, Property $property, ClassType $class): void
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
                        if (! $this->skipTranslation) {
                            $prefix = str(TranslationService::translateConstant($prefix->toString()));
                        }

                        collect($options)
                            ->each(function (array $option) use ($property, $class, $prefix) {
                                $name = str(data_get($option, 'value'))
                                    ->replace(['-', ' '], '_')
                                    ->upper()
                                    ->toString();
                                if (! $this->skipTranslation) {
                                    $name = TranslationService::translateConstant($name);
                                }

                                $constantName = $prefix->append('_')->append($name)->toString();

                                $constantAlreadyDefined = collect($class->getConstants())
                                    ->keys()
                                    ->contains($constantName);

                                if ($constantAlreadyDefined) {
                                    return;
                                }

                                $class->addConstant($constantName, data_get($option, 'value'))
                                    ->setType($property->getType());
                            });

                        $property->addComment(sprintf('@see %s_* constants', $prefix))
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
     * Serialized names differ from property names.
     */
    private function addSerializedName(Attribute $attribute, Property $property, PhpNamespace $namespace): void
    {
        $propertyName = $attribute->getName();
        $property->addAttribute(SerializedName::class, [$propertyName]);
        $namespace->addUse(SerializedName::class);
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
            if ($file->getExtension() === 'php') {
                File::delete((string) $file);
            }
        }
    }
}
