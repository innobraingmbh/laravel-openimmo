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

To use a more fluent approach, we provide some helper
```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Provider;

$openImmo = new OpenImmo;
getProvider($openImmo)
    ->setProviderNumber('myProvider');
```
The helper functions are available for all dtos inside the OpenImmo Tree.
It will use the argument as a reference.
In this case, it creates a Provider, links it to the OpenImmo Dto because none exists and then returns the Provider.

For each dto, there is a helper function available.
You can find them in the `src/helpers.php` file. The function name is always `get{DtoName}`.
All functions are alphabetically sorted.
