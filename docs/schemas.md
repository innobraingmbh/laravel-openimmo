# Schema Generation

This package can generate [Prism](https://prismphp.com/) PHP schemas from the DTOs. This is useful for LLM structured output — you can pass a schema to a language model and receive data that maps directly to the OpenImmo DTO structure.

## Generating a Schema

Use the `SchemaGenerator` facade to generate a schema for any DTO class:

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

## Skipping User-Defined Fields

OpenImmo DTOs include user-defined fields (`userDefinedAnyfield`, `userDefinedSimplefield`, `userDefinedExtend`) that can add noise to schemas. You can skip them:

```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$schema = SchemaGenerator::skipUserDefinedFields()
    ->generateFor(OpenImmo::class);
```
