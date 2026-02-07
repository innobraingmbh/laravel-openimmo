# Upgrade Guide

## Upgrading to v4.x from v3.x

### Helper Functions Are Now Namespaced (Breaking Change)

Helper functions have moved from the global namespace to `Innobrain\OpenImmo\Helpers`. You need to add `use function` imports wherever you call them.

**Before:**
```php
$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$areas = getAreas($openImmo);
```

**After:**
```php
use function Innobrain\OpenImmo\Helpers\getProvider;
use function Innobrain\OpenImmo\Helpers\getAreas;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$areas = getAreas($openImmo);
```

The function names and signatures are unchanged -- only an import is required.

#### Automated Migration with Rector

The package ships with a Rector config that handles this migration automatically:

```bash
vendor/bin/rector process app/ --config vendor/innobrain/laravel-openimmo/rector-migrate-helpers.php
```

This will rewrite all global helper calls to use the namespaced versions with proper `use function` imports.

You can also include the rule in your own `rector.php`:

```php
use Innobrain\OpenImmo\Rector\MigrateToNamespacedHelpersRector;

require_once __DIR__.'/vendor/innobrain/laravel-openimmo/rector/MigrateToNamespacedHelpersRector.php';

return RectorConfig::configure()
    ->withRules([
        MigrateToNamespacedHelpersRector::class,
    ]);
```

#### Manual Migration

If you prefer to migrate manually, find affected call sites:

```bash
grep -rn "getProvider\|getAreas\|getGeo\|getPrices\|getEquipment\|getFreeTexts\|getPropertyType\|getMarketingType\|getTypeOfUse\|getTechnicalManagement\|getConditionInformation" --include="*.php" app/
```

A full list of helper functions is available in `src/helpers.php`.

For each match, add the corresponding `use function` import at the top of the file:

```php
use function Innobrain\OpenImmo\Helpers\{getFunctionName};
```

### New: Original (German) DTOs and Helpers

A parallel set of DTOs is now available at `Innobrain\OpenImmo\Dtos\Original` that keep the original German XSD names (e.g., `Anbieter` instead of `Provider`, `Flaechen` instead of `Areas`).

German helper functions are available under `Innobrain\OpenImmo\Helpers\Original`:

```php
use Innobrain\OpenImmo\Dtos\Original\Openimmo;

use function Innobrain\OpenImmo\Helpers\Original\getAnbieter;
use function Innobrain\OpenImmo\Helpers\Original\getFlaechen;

$openImmo = new Openimmo;
$anbieter = getAnbieter($openImmo);
$flaechen = getFlaechen($openImmo);
```
