<?php

declare(strict_types=1);

/**
 * Rector config to migrate global OpenImmo helper functions to namespaced imports.
 *
 * Run from your project root:
 *   vendor/bin/rector process --config vendor/innobrain/laravel-openimmo/rector-migrate-helpers.php
 *
 * Or include the set in your own rector.php:
 *   ->withConfiguredRule(RenameFunctionRector::class, require __DIR__.'/vendor/innobrain/laravel-openimmo/rector-helper-mapping.php')
 */

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;

return RectorConfig::configure()
    ->withImportNames()
    ->withConfiguredRule(
        RenameFunctionRector::class,
        require __DIR__.'/rector-helper-mapping.php',
    );
