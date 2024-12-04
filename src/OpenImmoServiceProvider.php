<?php

declare(strict_types=1);

namespace Katalam\OpenImmo;

use Katalam\OpenImmo\Console\Commands\Generate;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OpenImmoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('openimmo')
            ->hasCommand(Generate::class)
            ->hasConfigFile();
    }
}
