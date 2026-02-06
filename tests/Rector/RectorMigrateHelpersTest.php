<?php

declare(strict_types=1);

use Symfony\Component\Process\Process;

test('rector migrates global helper calls to namespaced imports', function () {
    $packageRoot = realpath(__DIR__.'/../../');
    $fixture = __DIR__.'/../fixtures/rector/global_helpers.php.inc';
    $tempFile = tempnam(sys_get_temp_dir(), 'rector_test_').'.php';

    copy($fixture, $tempFile);

    $process = new Process([
        PHP_BINARY,
        $packageRoot.'/vendor/bin/rector',
        'process',
        $tempFile,
        '--config',
        $packageRoot.'/rector-migrate-helpers.php',
        '--no-ansi',
    ]);
    $process->run();

    $result = file_get_contents($tempFile);

    expect($result)
        ->toContain('use function Innobrain\OpenImmo\Helpers\getProvider;')
        ->toContain('use function Innobrain\OpenImmo\Helpers\getAreas;')
        ->toContain('use function Innobrain\OpenImmo\Helpers\getGeo;')
        ->toContain('$provider = getProvider($openImmo);')
        ->toContain('$areas = getAreas($openImmo);')
        ->toContain('$geo = getGeo($openImmo);');

    unlink($tempFile);
});
