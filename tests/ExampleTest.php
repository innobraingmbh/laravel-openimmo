<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Innobrain\OpenImmo\Console\Commands\Generate;

use function Pest\Laravel\artisan;

it('works', function () {
    artisan(Generate::class);

    $files = File::files('./src/Dtos');

    expect(count($files))->toBeGreaterThan(0);
})->skip('Only need to run once');
