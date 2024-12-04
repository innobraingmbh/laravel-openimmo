<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Katalam\OpenImmo\OpenImmoServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

use function Orchestra\Testbench\package_path;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            static fn (string $modelName) => 'Katalam\\OpenImmo\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            OpenImmoServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-openimmo_table.php.stub';
        $migration->up();
        */
    }

    /**
     * Get Application base path.
     */
    public static function applicationBasePath(): string
    {
        return package_path('skeleton');
    }
}
