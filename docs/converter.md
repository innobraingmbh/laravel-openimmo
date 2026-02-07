# Converter

The `FormatConverterService` converts OpenImmo DTOs to other formats. It uses Laravel's `Manager` pattern, so you can switch between converter drivers.

## Enterprise Converter

The package ships with the `Enterprise` driver, which converts OpenImmo DTOs to onOffice Enterprise field arrays:

```php
use Innobrain\OpenImmo\Facades\FormatConverterService;
use Innobrain\OpenImmo\Enums\ConverterDriver;

$openImmoXml = file_get_contents('path/to/openimmo.xml');

$data = FormatConverterService::driver(ConverterDriver::Enterprise)
    ->convert($openImmoXml);
```

The output is an associative array keyed by German onOffice field names (e.g. `kaufpreis`, `wohnflaeche`, `anzahl_zimmer`). Null values are filtered out, booleans are converted to `'J'`/`'N'` strings, and floats use `.` as the decimal separator.

The converter covers prices, areas, property types, marketing types, geo coordinates, equipment, condition, free texts, provisions, and user-defined fields.

## Using Original (German) DTOs

The converter accepts both English and Original (German) DTOs:

```php
use Innobrain\OpenImmo\Dtos\Original\Openimmo;
use Innobrain\OpenImmo\Facades\FormatConverterService;
use Innobrain\OpenImmo\Enums\ConverterDriver;

$openImmo = new Openimmo;

$data = FormatConverterService::driver(ConverterDriver::Enterprise)
    ->convert($openImmo);
```
