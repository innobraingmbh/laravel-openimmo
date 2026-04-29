<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\Apartment;
use Innobrain\OpenImmo\Dtos\ConditionInformation;
use Innobrain\OpenImmo\Dtos\Floor;
use Innobrain\OpenImmo\Dtos\HeatingType;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Prices;
use Innobrain\OpenImmo\Facades\SchemaGenerator;
use Prism\Prism\Contracts\Schema;
use Prism\Prism\Schema\ArraySchema;
use Prism\Prism\Schema\BooleanSchema;
use Prism\Prism\Schema\EnumSchema;
use Prism\Prism\Schema\NumberSchema;
use Prism\Prism\Schema\ObjectSchema;
use Prism\Prism\Schema\StringSchema;

describe('generation', function () {
    test('can generate', function () {
        $schema = SchemaGenerator::generateFor(OpenImmo::class);

        expect($schema)->toBeInstanceOf(Schema::class);
    });

    test('can skip user defined generate', function () {
        $schema = SchemaGenerator::skipUserDefinedFields()->generateFor(OpenImmo::class);

        expect($schema)->toBeInstanceOf(Schema::class);
    });

    test('get class description', function () {
        $schemaGenerator = resolve(Innobrain\OpenImmo\Services\SchemaGenerator::class);
        $method = new ReflectionMethod($schemaGenerator, 'getClassDescription');
        $class = new ReflectionClass(HeatingType::class);
        $description = $method->invoke($schemaGenerator, $class);

        expect($description)->toBe('Welche Heizungsarten sind vorhanden, Optionen kombinierbar');
    });

    test('nullable field types', function () {
        $schema = SchemaGenerator::generateFor(Floor::class);

        expect($schema)->toBeInstanceOf(Schema::class)
            ->and($schema->properties[0])->toBeInstanceOf(BooleanSchema::class);
    });

    test('enum constants become EnumSchema', function () {
        $schema = SchemaGenerator::generateFor(Apartment::class);

        expect($schema->properties[0])->toBeInstanceOf(EnumSchema::class)
            ->and($schema->properties[0]->options)->toContain('DACHGESCHOSS', 'MAISONETTE');
    });

    test('DateTime properties become StringSchema', function () {
        $schema = SchemaGenerator::generateFor(Prices::class);

        $propertyNames = collect($schema->properties)
            ->filter(fn ($prop) => $prop instanceof StringSchema)
            ->map(fn ($prop) => $prop->name)
            ->values()
            ->toArray();

        expect($propertyNames)->toContain('priceTimeRangeFrom', 'priceTimeRangeTo');
    });

    test('array DTO properties become ArraySchema', function () {
        $schema = SchemaGenerator::generateFor(ConditionInformation::class);

        $propertyNames = collect($schema->properties)
            ->filter(fn ($prop) => $prop instanceof ArraySchema)
            ->map(fn ($prop) => $prop->name)
            ->values()
            ->toArray();

        expect($propertyNames)->toContain('EnergyPerformanceCertificate');
    });

    test('naming mismatches resolve to correct DTO class', function () {
        $schema = SchemaGenerator::generateFor(Prices::class);

        $propertyNames = collect($schema->properties)
            ->filter(fn ($prop) => $prop instanceof ObjectSchema)
            ->map(fn ($prop) => $prop->name)
            ->values()
            ->toArray();

        expect($propertyNames)->toContain(
            'NetPurchasePrice',
            'NetEVB',
            'NetTotalRent',
            'NetTotalCost',
            'NetMonthlyCosts',
            'NetReserves',
            'NetOtherCosts',
            'NetOtherRent',
            'NetCommission',
        );
    });

    test('nullable properties are marked as nullable', function () {
        $schema = SchemaGenerator::generateFor(Prices::class);

        $nullableProperty = collect($schema->properties)
            ->first(fn ($prop) => $prop->name === 'purchasePriceGross');

        expect($nullableProperty)
            ->toBeInstanceOf(NumberSchema::class)
            ->and($nullableProperty->nullable)->toBeTrue();
    });

    test('non-nullable DTO properties are not marked as nullable', function () {
        $schema = SchemaGenerator::generateFor(Prices::class);

        $nonNullableProperty = collect($schema->properties)
            ->first(fn ($prop) => $prop->name === 'PurchasePrice');

        expect($nonNullableProperty)
            ->toBeInstanceOf(ObjectSchema::class)
            ->and($nonNullableProperty->nullable)->toBeFalse();
    });
});
