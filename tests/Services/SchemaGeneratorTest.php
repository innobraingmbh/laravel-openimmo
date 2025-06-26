<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\HeatingType;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;
use Prism\Prism\Contracts\Schema;

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
        $schemaGenerator = app(Innobrain\OpenImmo\Services\SchemaGenerator::class);
        $method = new ReflectionMethod($schemaGenerator, 'getClassDescription');
        $class = new ReflectionClass(HeatingType::class);
        $description = $method->invoke($schemaGenerator, $class);

        expect($description)->toBe('Welche Heizungsarten sind vorhanden, Optionen kombinierbar');
    });
});
