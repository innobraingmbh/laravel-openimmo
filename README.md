# This is my package laravel-openimmo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/katalam/laravel-openimmo.svg?style=flat-square)](https://packagist.org/packages/katalam/laravel-openimmo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/katalam/laravel-openimmo/tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/katalam/laravel-openimmo/actions?query=workflow%3Atests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/katalam/laravel-openimmo/code-style.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/katalam/laravel-openimmo/actions?query=workflow%3A"Code+Style"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/katalam/laravel-openimmo.svg?style=flat-square)](https://packagist.org/packages/katalam/laravel-openimmo)

This package is a fork from the initial work [ujamii/openimmo](https://github.com/ujamii/openimmo)
The package aims to provide a better integration in Laravel and to provide a more modern codebase.
Also the package aimed to translate all german to english translations and to provide a better documentation, starting with a dictionary of the german to english translations.

## Installation

You can install the package via composer:

```bash
composer require katalam/laravel-openimmo
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-openimmo-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravelOpenimmo = new Katalam\LaravelOpenimmo();
echo $laravelOpenimmo->echoPhrase('Hello, Katalam!');
```

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
- [Bruno Görß](https://github.com/Katalam)
- [All Contributors](../../contributors)

## License

The GPLv3 License. Please see [License File](LICENSE.md) for more information.
