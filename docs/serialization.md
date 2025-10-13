# Serialization

To serialize and deserialize the OpenImmo XML in json or object format, we provide the `OpenImmoService` facade.
Usage:

```php
use InnoBrain\OpenImmo\Facades\OpenImmoService;

$xml = file_get_contents('path/to/openimmo.xml');

$openImmoObject = OpenImmoService::deserializeObjectFromXml($xml);
```

```php
use InnoBrain\OpenImmo\Facades\OpenImmoService;

$json = file_get_contents('path/to/openimmo.json');

$openImmoObject = OpenImmoService::deserializeObjectFromJson($xml);
```

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use InnoBrain\OpenImmo\Facades\OpenImmoService;

$openImmo = new OpenImmo;

$xml = OpenImmoService::serializeObjectIntoXml($openImmo);
```

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use InnoBrain\OpenImmo\Facades\OpenImmoService;

$openImmo = new OpenImmo;

$json = OpenImmoService::serializeObjectIntoJson($openImmo);
```
