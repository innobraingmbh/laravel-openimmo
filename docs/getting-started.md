# Getting Started

Welcome to the **onOffice Adapter for Laravel**, a package that offers an Eloquent-like API for querying onOffice.

## Installation
```bash
composer require innobrain/laravel-openimmo
```

Then publish the config file:
```bash
php artisan vendor:publish --tag="laravel-openimmo-config"
```

This creates `config/openimmo.php`.
```php
return [
];
```

## Basic Usage

You can start an OpenImmo Structure like this
```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Provider;

$openImmo = new OpenImmo;
$openImmo->setProvider([
    new Provider(providerNumber: 'myProvider')
]);
```

To use a more fluent approach, we provide helper functions that you can import:
```php
use Innobrain\OpenImmo\Dtos\OpenImmo;

use function Innobrain\OpenImmo\Helpers\getProvider;

$openImmo = new OpenImmo;
getProvider($openImmo)
    ->setProviderNumber('myProvider');
```
The helper functions are available for all DTOs inside the OpenImmo tree.
It will use the argument as a reference.
In this case, it creates a Provider, links it to the OpenImmo DTO because none exists and then returns the Provider.

For each DTO, there is a helper function available.
You can find them in the `src/helpers.php` file. The function name is always `get{DtoName}`.
All functions are alphabetically sorted.

### Original (German) DTOs and Helpers

If you prefer working with the original German XSD names, use the classes and helpers from the `Original` namespaces:
```php
use Innobrain\OpenImmo\Dtos\Original\Openimmo;

use function Innobrain\OpenImmo\Helpers\Original\getAnbieter;

$openImmo = new Openimmo;
getAnbieter($openImmo)
    ->setAnbieternr('myProvider');
```
The original helpers are in `src/helpers_original.php`.
