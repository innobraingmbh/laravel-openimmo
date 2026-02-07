# Serialization

The `OpenImmoService` facade handles all serialization and deserialization between OpenImmo XML, JSON, and PHP DTOs.

## Deserializing XML

Parse an OpenImmo XML string into a DTO object tree:

```php
use Innobrain\OpenImmo\Facades\OpenImmoService;

$xml = file_get_contents('path/to/openimmo.xml');

$openImmo = OpenImmoService::deserializeObjectFromXml($xml);
```

You can also deserialize into a specific DTO class by passing the fully qualified class name as the second argument. This is useful when working with XML fragments that don't start at the root:

```php
use Innobrain\OpenImmo\Dtos\RealEstate;
use Innobrain\OpenImmo\Facades\OpenImmoService;

$realEstate = OpenImmoService::deserializeObjectFromXml($xml, RealEstate::class);
```

## Deserializing JSON

Parse a JSON string into DTOs:

```php
use Innobrain\OpenImmo\Facades\OpenImmoService;

$json = file_get_contents('path/to/openimmo.json');

$openImmo = OpenImmoService::deserializeObjectFromJson($json);
```

The optional second `$classFqn` parameter works the same as with XML deserialization.

## Serializing to XML

Convert a DTO back to OpenImmo-compliant XML:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\OpenImmoService;

$openImmo = new OpenImmo;

$xml = OpenImmoService::serializeObjectIntoXml($openImmo);
```

The original German XML element names are preserved via `#[SerializedName]` attributes on each DTO property, ensuring full round-trip fidelity.

## Serializing to JSON

Convert a DTO to JSON:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\OpenImmoService;

$openImmo = new OpenImmo;

$json = OpenImmoService::serializeObjectIntoJson($openImmo);
```

Null values and empty objects are omitted from the JSON output.
