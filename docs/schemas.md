# Schema Generation

The `SchemaGenerator` generates structured-output schemas from the DTOs. It uses Laravel's `Manager` pattern, so you can switch between schema drivers.

## Prism Driver (default)

The package ships with a [Prism](https://prismphp.com/) driver, useful for LLM structured output — you can pass a schema to a language model and receive data that maps directly to the OpenImmo DTO structure. It is the default driver, so it doesn't need to be selected explicitly:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$schema = SchemaGenerator::generateFor(OpenImmo::class);
```

You can generate schemas for any DTO in the tree, not just the root:

```php
use Innobrain\OpenImmo\Dtos\Areas;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$schema = SchemaGenerator::generateFor(Areas::class);
```

Nested objects and arrays are handled recursively, and nullable types are marked as nullable in the schema.

## JSON Schema Driver

The package also ships with a driver built on Laravel's own `illuminate/json-schema` component, producing standard JSON Schema `Type` objects instead of Prism schemas. Select it via `driver()`:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Enums\SchemaDriver;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$type = SchemaGenerator::driver(SchemaDriver::JsonSchema)->generateFor(OpenImmo::class);

$jsonSchema = $type->toArray();
```

## Skipping User-Defined Fields

OpenImmo DTOs include user-defined fields (`userDefinedAnyfield`, `userDefinedSimplefield`, `userDefinedExtend`) that can add noise to schemas. You can skip them, regardless of driver:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$schema = SchemaGenerator::skipUserDefinedFields()
    ->generateFor(OpenImmo::class);
```
