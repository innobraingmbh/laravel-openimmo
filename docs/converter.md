# Converter

This package comes with a converter facade to convert multiple formats into each other.
The converter supports the following formats:
- OpenImmo XML to onOffice API

You can use the converter as follows:
```php
use Innobrain\OpenImmo\Enums\ConverterDriver;
use Innobrain\OpenImmo\Facades\FormatConverterService;

$openImmoXml = file_get_contents('path/to/openimmo.xml');

$data = FormatConverterService::driver(ConverterDriver::Enterprise)
    ->convert($openImmoXml);
```