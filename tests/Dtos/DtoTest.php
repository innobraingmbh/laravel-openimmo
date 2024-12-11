<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Katalam\OpenImmo\Services\TypeUtil;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Property;
use Random\RandomException;

/**
 * @throws RandomException
 */
function getExampleData(string $type): mixed
{
    $isPlural = str_ends_with($type, '[]');
    $singular = str_replace('[]', '', $type);

    $value = match ($singular) {
        'string' => Str::random(),
        'float' => (float) mt_rand() / (float) mt_getrandmax(),
        'int' => random_int(0, 10000),
        'bool' => (bool) random_int(0, 2),
        'array' => [42],
        DateTime::class => new DateTime,
        default => null,
    };

    return $isPlural ? [$value] : $value;
}

function testClassProperty(ClassType $class, Property $property): void
{
    $type = TypeUtil::OPENIMMO_NAMESPACE.$class->getName();
    $subject = new $type;
    $property->getType();
    $testValue = getExampleData($property->getType());
    $propertyName = $property->getName();

    $return = $subject->{'set'.ucfirst($propertyName)}($testValue);

    expect($return)->toBe($subject)
        ->and($subject->{'get'.ucfirst($propertyName)}())->toBe($testValue);
}

test('dto values working', function () {
    $files = File::files(base_path('../src/Dtos'));

    collect($files)->each(function (SplFileInfo $file) {
        if ($file->getExtension() !== 'php') {
            return;
        }

        /** @var ClassType $class */
        $class = ClassType::fromCode(File::get($file->getRealPath()));

        collect($class->getProperties())->each(function (Property $property) use ($class) {
            testClassProperty($class, $property);
        });
    });
});
