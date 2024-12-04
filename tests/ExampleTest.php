<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;

use function Pest\Laravel\artisan;

it('works', function () {
    artisan('app:generate');

    $files = File::files('./src/Dtos');

    expect(count($files))->toBeGreaterThan(0);
});
