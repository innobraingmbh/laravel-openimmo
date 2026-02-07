# Getting Started

Welcome to **OpenImmo for Laravel**, a package for working with the [OpenImmo](https://www.openimmo.de/) XML standard. It provides 115+ typed PHP DTOs auto-generated from the OpenImmo XSD schema, XML/JSON serialization, format converters, and Prism schema generation.

Forked from [ujamii/openimmo](https://github.com/ujamii/openimmo) with all German names translated to English and full Laravel integration.

## Installation

```bash
composer require innobrain/laravel-openimmo
```

Optionally publish the config file:

```bash
php artisan vendor:publish --tag="laravel-openimmo-config"
```

## Basic Usage

You can build an OpenImmo structure by instantiating DTOs directly:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Provider;

$openImmo = new OpenImmo;
$openImmo->setProvider([
    new Provider(providerNumber: 'myProvider')
]);
```

For a more fluent approach, use the helper functions:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;

use function Innobrain\OpenImmo\Helpers\getProvider;

$openImmo = new OpenImmo;
getProvider($openImmo)
    ->setProviderNumber('myProvider');
```

The helper functions are available for all DTOs inside the OpenImmo tree. Each helper creates the DTO if it doesn't exist, links it to the parent, and returns it for chaining.

The function name is always `get{DtoName}`. You can find them all in `src/helpers.php`, alphabetically sorted.

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

## What's Next

- [Serialization](/serialization) — Deserialize OpenImmo XML/JSON into DTOs and serialize them back
- [Converter](/converter) — Convert OpenImmo DTOs to other formats like onOffice Enterprise
- [Schema Generation](/schemas) — Generate Prism schemas from DTOs for LLM structured output
