# OpenImmo for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/innobrain/laravel-openimmo.svg?style=flat-square)](https://packagist.org/packages/innobrain/laravel-openimmo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/innobraingmbh/laravel-openimmo/tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/innobraingmbh/laravel-openimmo/actions/workflows/tests.yml?query=branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/innobraingmbh/laravel-openimmo/code-style.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/innobraingmbh/laravel-openimmo/actions/workflows/code-style.yml?query=branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/innobrain/laravel-openimmo.svg?style=flat-square)](https://packagist.org/packages/innobrain/laravel-openimmo)

A Laravel package for working with the [OpenImmo](https://www.openimmo.de/) XML standard. Provides typed PHP DTOs, XML/JSON serialization, format converters, and Prism schema generation.

Forked from [ujamii/openimmo](https://github.com/ujamii/openimmo) with all German names translated to English and full Laravel integration.

## Installation

```bash
composer require innobrain/laravel-openimmo
```

## Quick Start

**Deserialize OpenImmo XML into DTOs:**

```php
use Innobrain\OpenImmo\Facades\OpenImmoService;

$xml = File::get('path/to/openimmo.xml');
$openImmo = OpenImmoService::deserializeObjectFromXml($xml);
```

**Serialize DTOs back to XML or JSON:**

```php
$xml = OpenImmoService::serializeObjectIntoXml($openImmo);
$json = OpenImmoService::serializeObjectIntoJson($openImmo);
```

**Use helper functions for fluent DTO building:**

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;

use function Innobrain\OpenImmo\Helpers\getProvider;
use function Innobrain\OpenImmo\Helpers\getContactPerson;

$openImmo = new OpenImmo;
getProvider($openImmo)->setProviderNumber('myProvider');
getContactPerson($openImmo)->setName('John Doe');
```

Helper functions (`get{DtoName}`) are available for all DTOs in the OpenImmo tree. They create the DTO if it doesn't exist, link it to the parent, and return it.

## Features

- **Serialization** — Deserialize/serialize OpenImmo XML and JSON via `OpenImmoService`
- **115+ typed DTOs** — Auto-generated from the OpenImmo XSD schema with English property names
- **Format converters** — Convert OpenImmo DTOs to other formats (ships with onOffice Enterprise converter)
- **Schema generation** — Generate [Prism](https://prismphp.com/) schemas from DTOs for LLM structured output
- **Helper functions** — Fluent getter helpers for navigating and building the DTO tree

## Documentation

For full documentation on serialization, converters, and schema generation, visit the [documentation site](https://innobraingmbh.github.io/laravel-openimmo/).

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael Grundkötter](https://github.com/mgrundkoetter)
- [Bruno Görß](https://github.com/Innobrain)
- [All Contributors](../../contributors)

## License

The GPLv3 License. Please see [License File](LICENSE.md) for more information.
