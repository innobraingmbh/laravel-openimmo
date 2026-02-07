<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Rector\MigrateToNamespacedHelpersRector;
use Rector\Config\RectorConfig;

require_once __DIR__.'/../../../rector/MigrateToNamespacedHelpersRector.php';

return RectorConfig::configure()
    ->withImportNames()
    ->withRules([
        MigrateToNamespacedHelpersRector::class,
    ]);
