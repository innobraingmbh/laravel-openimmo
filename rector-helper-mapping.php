<?php

declare(strict_types=1);

/**
 * Auto-generated mapping of global helper function names to their namespaced equivalents.
 * Used by rector-migrate-helpers.php to rename function calls.
 */

$helpersFile = __DIR__.'/src/helpers.php';
$content = file_get_contents($helpersFile);

preg_match_all('/^function (get\w+)\(/m', $content, $matches);

$mapping = [];
foreach ($matches[1] as $functionName) {
    $mapping[$functionName] = 'Innobrain\\OpenImmo\\Helpers\\'.$functionName;
}

return $mapping;
