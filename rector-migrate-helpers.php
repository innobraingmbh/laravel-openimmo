<?php

declare(strict_types=1);

/**
 * Rector config to migrate global OpenImmo helper functions to namespaced imports.
 *
 * Run from your project root:
 *   vendor/bin/rector process app/ --config vendor/innobrain/laravel-openimmo/rector-migrate-helpers.php
 */

use Innobrain\OpenImmo\Rector\MigrateToNamespacedHelpersRector;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withImportNames()
    ->withRules([
        MigrateToNamespacedHelpersRector::class,
    ]);
