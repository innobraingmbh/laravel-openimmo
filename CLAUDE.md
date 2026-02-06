# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Laravel package (`innobrain/laravel-openimmo`) that provides PHP DTOs and serialization for the OpenImmo XML standard (German real estate data exchange format). Forked from `ujamii/openimmo`, translated from German to English, with Laravel integration.

## Commands

```bash
composer test                    # Run tests (Pest)
vendor/bin/pest --filter="test name"  # Run a single test
vendor/bin/pest tests/Services/DtoGeneratorTest.php  # Run a specific test file
composer analyse                 # PHPStan (level 5)
composer format                  # Rector + Pint
composer format:check            # Check formatting only (Pint)
npm run docs:dev                 # Local docs (VitePress)
```

## Architecture

### Code Generation Pipeline

The DTOs in `src/Dtos/` (~115 files) and `src/helpers.php` are **auto-generated** — do not edit them manually. The generation pipeline works as follows:

1. **`DtoGenerator`** reads the OpenImmo XSD schema (`skeleton/storage/app/OpenImmo/openimmo_127c.xsd`) and generates PHP DTO classes into `src/Dtos/`
2. **`HelperGenUtil`** then walks the DTO tree starting from `OpenImmo::class` and generates getter helper functions into `src/helpers.php`
3. **`TranslationService`** maps German XSD names to English class/property/attribute/constant names using CSV files in `skeleton/storage/app/TranslationMapping/`
4. **`TypeUtil`** handles XSD-to-PHP type conversion and JMS Serializer type strings
5. **`CodeGenUtil`** generates getters/setters and manages property annotations via Nette PhpGenerator
6. Run via artisan: `php artisan app:generate`, then `composer format` to clean up

### Serialization

`OpenImmoService` provides XML (JMS Serializer) and JSON (Symfony Serializer) serialization. DTOs use PHP 8 attributes (`#[XmlRoot]`, `#[Type]`, `#[SerializedName]`, `#[XmlList]`, `#[XmlAttribute]`) for JMS Serializer mapping. The `#[SerializedName]` attribute preserves the original German XML element names for round-trip fidelity.

### Converter System

`FormatConverterService` extends Laravel's `Manager` class to convert OpenImmo DTOs to other formats. Currently ships with `EnterpriseConverter` (converts to onOffice Enterprise field arrays). The converter uses traits in `src/Converters/Enterprise/` for each field group. New converter drivers can be added via `ConverterDriver` enum.

### Schema Generator

`SchemaGenerator` generates Prism PHP schemas from DTO reflection, useful for LLM structured output.

### Facades

All service classes (`OpenImmoService`, `TranslationService`, `TypeUtil`, `CodeGenUtil`, `HelperGenUtil`, `FormatConverterService`, `SchemaGenerator`) have corresponding facades in `src/Facades/`.

## Testing

- Uses Pest with Orchestra Testbench (`skeleton/` as the app base path)
- `tests/Pest.php` applies `TestCase` and `GeneratorHelper` trait to all tests
- `GeneratorHelper` trait provides utilities for testing code generation: generates DTOs from fixture XSD files into `storage_path('app/Dtos/')`, then asserts on properties/constants/types
- Test fixtures (XSD and XML files) live in `tests/fixtures/`
- The `ExampleTest.php` (skipped) runs full generation — only used manually

## Code Style

- `declare(strict_types=1)` in all files
- Pint with strict comparison, `protected_to_private`, ordered class elements (traits, cases, constants, properties, construct, destruct, magic, phpunit)
- Rector with PHP 8.4, Laravel sets, dead code removal, early return, code quality
- Properties are `protected` with getter/setter methods (generated code pattern)
