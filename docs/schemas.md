# Schema Generation

This package is capable of generating JSON Schemas for [Prism](https://prismphp.com/) models. We provide the generation for all dtos.
You can generate the schemas as following:
```php
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$schema = SchemaGenerator::generateFor(OpenImmo::class);
```
We can do that for any dto:
```php
use Innobrain\OpenImmo\Dtos\Areas;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

$schema = SchemaGenerator::generateFor(Areas::class);
```
This is useful if you want to get a schema for a LLM to generate data for you.