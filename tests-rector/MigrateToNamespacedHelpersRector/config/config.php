<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Rector\MigrateToNamespacedHelpersRector;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withImportNames()
    ->withRules([
        MigrateToNamespacedHelpersRector::class,
    ]);
