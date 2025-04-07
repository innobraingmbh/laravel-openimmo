<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Illuminate\Support\Facades\File;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Nette\PhpGenerator\PhpFile;
use ReflectionClass;
use ReflectionProperty;

class HelperGenUtil
{
    protected string $targetFile = './src/helpers.php';

    private readonly PhpFile $phpFile;

    private array $recursionBlocker = [];

    private array $blacklistHelperFunctionNames = [
        'UserDefinedSimplefield',
        'UserDefinedAnyfield',
        'UserDefinedExtend',
    ];

    public function __construct()
    {
        $this->phpFile = new PhpFile;
        $this->phpFile->setStrictTypes();
        $this->phpFile->addComment('This file is auto-generated.');
    }

    public function generate(): void
    {
        $startingClass = OpenImmo::class;
        $reflection = new ReflectionClass($startingClass);
        $properties = $reflection->getProperties();
        $this->phpFile->addUse($startingClass);

        foreach ($properties as $property) {
            $this->loopProperties($property, [$startingClass]);
        }

        $this->printFile();
    }

    private function printFile(): void
    {
        $code = (new Printer)->printFile($this->phpFile);
        File::put($this->targetFile, $code);
    }

    private function loopProperties(ReflectionProperty $property, array $classes): void
    {
        $name = $property->getName();

        if (in_array($name, $this->recursionBlocker, true)) {
            return;
        }
        $this->recursionBlocker[] = $property->getName();

        $className = DtoGenerator::NAMESPACE.'\\'.ucfirst($name);

        if (! class_exists($className)) {
            return;
        }

        $reflection = new ReflectionClass($className);
        $properties = $reflection->getProperties();

        foreach ($properties as $p) {
            $this->loopProperties($p, [...$classes, $className]);
            $this->generateFunction($p, [...$classes, $className]);
        }
        $this->generateFunction($property, $classes);
    }

    private function generateFunction(ReflectionProperty $property, array $classes): void
    {
        $propertyName = ucfirst($property->getName());

        if (in_array($propertyName, $this->blacklistHelperFunctionNames, true)) {
            return;
        }

        $functions = $this->phpFile->getFunctions();
        if (array_key_exists('get'.$propertyName, $functions)) {
            return;
        }

        $childClass = $classes[count($classes) - 1];
        $childClassBaseName = class_basename($childClass);
        $propertyClassName = DtoGenerator::NAMESPACE.'\\'.$propertyName;

        if (! class_exists($propertyClassName)) {
            return;
        }
        $propertyTypeName = $property->getType()?->getName();
        if ($propertyTypeName !== 'array' && $property->getType()?->isBuiltin()) {
            return;
        }

        $isArrayDto = $propertyTypeName === 'array';

        $function = $this->phpFile->addFunction('get'.$propertyName);
        $function->addParameter('openImmo')
            ->setType(OpenImmo::class)
            ->setNullable(false);

        $this->phpFile->addUse($propertyClassName);
        $function->setReturnType($propertyClassName);
        $function->addComment('Will return the '.$propertyName.' object from an OpenImmo Dto.');
        $function->addComment('If it does not exist, it will be created.');
        $function->addComment('Make sure to call this function only on referenced objects.');

        $isStartingClass = $childClassBaseName === 'OpenImmo';
        if ($isStartingClass && $isArrayDto) {
            $function->setBody(<<<PHP
            \$children = \$openImmo->get$propertyName();
            \$child = data_get(\$children, '0');
            
            if (! \$child instanceof $propertyName) {
                \$child = new $propertyName;
                \$children[] = \$child;
                \$openImmo->set$propertyName(\$children);
            }
            
            return \$child;
            PHP);
        } elseif ($isStartingClass) {
            $function->setBody(<<<PHP
            \$child = \$openImmo->get$propertyName();
            
            if (! \$child instanceof $propertyName) {
                \$child = new $propertyName;
                \$openImmo->set$propertyName(\$child);
            }
            
            return \$child;
            PHP);
        } elseif ($isArrayDto) {
            $function->setBody(<<<PHP
            \$parent = get$childClassBaseName(\$openImmo);
            \$children = \$parent->get$propertyName();
            \$child = data_get(\$children, '0');
            
            if (! \$child instanceof $propertyName) {
                \$child = new $propertyName;
                \$children[] = \$child;
                \$parent->set$propertyName(\$children);
            }
            
            return \$child;
            PHP);
        } else {
            $function->setBody(<<<PHP
            \$parent = get$childClassBaseName(\$openImmo);
            \$child = \$parent->get$propertyName();
            
            if (! \$child instanceof $propertyName) {
                \$child = new $propertyName;
                \$parent->set$propertyName(\$child);
            }
            
            return \$child;
            PHP);
        }
    }
}
