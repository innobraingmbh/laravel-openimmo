<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\Floor;
use Innobrain\OpenImmo\Dtos\HeatingType;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;
use Prism\Prism\Contracts\Schema;
use Prism\Prism\Schema\BooleanSchema;

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
});
