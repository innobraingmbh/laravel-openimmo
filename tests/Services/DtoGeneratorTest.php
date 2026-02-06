<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Innobrain\OpenImmo\Services\DtoGenerator;
use Nette\PhpGenerator\ClassType;

test('target folder', function () {
    $generator = new DtoGenerator;

    expect($generator->getTargetFolder())->toBe('./src/Dtos/');
});

it('can set existing target folder', function () {
    $folder = sys_get_temp_dir();

    $generator = new DtoGenerator;
    $generator->setTargetFolder($folder);

    expect($generator->getTargetFolder())->toBe($folder.'/');
});

it('throws exception when setting non-existing target folder', function () {
    $folder = '/dev/null';

    $generator = new DtoGenerator;
    $generator->setTargetFolder($folder);
})->throws(ErrorException::class);

it('will wipe the target folder', function () {
    $generator = new DtoGenerator;
    $generator->setTargetFolder(sys_get_temp_dir());

    File::put(sys_get_temp_dir().'/testfile.php', 'This file should be wiped');
    File::put(sys_get_temp_dir().'/testfile2.abc', 'This file should NOT be wiped');

    $generator->generate('./tests/fixtures/Ausblick.xsd');

    expect(File::exists(sys_get_temp_dir().'/testfile.php'))->toBeFalse()
        ->and(File::exists(sys_get_temp_dir().'/testfile2.abc'))->toBeTrue();
});

test('default namespace', function () {
    $generator = new DtoGenerator;

    expect($generator->getNamespace())->toBe(DtoGenerator::NAMESPACE);
});

test('custom namespace', function () {
    $generator = new DtoGenerator;
    $generator->setNamespace('Innobrain\\OpenImmo\\Dtos\\Original');

    expect($generator->getNamespace())->toBe('Innobrain\\OpenImmo\\Dtos\\Original');
});

it('generates original DTOs with German names and correct namespace when translation is skipped', function () {
    $originalNamespace = 'Innobrain\\OpenImmo\\Dtos\\Original';

    $generator = new DtoGenerator;
    $generator
        ->setNamespace($originalNamespace)
        ->setTargetFolder(storage_path('app/Dtos/Original/'))
        ->setSkipTranslation()
        ->setSkipHelperGeneration();

    $generator->generate('./tests/fixtures/Ausblick.xsd');

    $classFileName = storage_path('app/Dtos/Original/Ausblick.php');
    expect(File::exists($classFileName))->toBeTrue();

    $fileContents = file_get_contents($classFileName);

    /** @var ClassType $generatedClass */
    $generatedClass = ClassType::fromCode($fileContents);

    // Class should use original German name
    expect($generatedClass->getName())->toBe('Ausblick');

    // Namespace should be the Original namespace
    expect($fileContents)->toContain('namespace '.$originalNamespace.';');

    // Property should use original German name (blick, not translated)
    expect($generatedClass->hasProperty('blick'))->toBeTrue();

    // Constants should use original German names (untranslated)
    $constants = $generatedClass->getConstants();
    expect($constants)->toHaveKey('BLICK_BERGE')
        ->and($constants)->toHaveKey('BLICK_SEE')
        ->and($constants)->toHaveKey('BLICK_MEER')
        ->and($constants)->toHaveKey('BLICK_IN_DIE_FERNE');

    // Setter return type should reference Original namespace
    $setter = $generatedClass->getMethod('setBlick');
    expect($setter->getReturnType())->toBe('\\'.$originalNamespace.'\\Ausblick');
});
