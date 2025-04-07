<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Innobrain\OpenImmo\Services\DtoGenerator;

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
