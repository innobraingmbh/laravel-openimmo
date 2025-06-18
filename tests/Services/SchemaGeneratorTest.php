<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Facades\SchemaGenerator;

describe('generation', function () {
    test('can generate', function () {
        $schema = SchemaGenerator::generateFor(OpenImmo::class);

        expect($schema)->toBeArray()
            ->and($schema)->toHaveKey('OpenImmo')
            ->and($schema['OpenImmo'])->toHaveKey('Transfer')
            ->and($schema['OpenImmo']['Transfer'])->toHaveKey('type')
            ->and($schema['OpenImmo'])->toHaveKey('UserDefinedAnyfield');
    });

    test('can skip user defined generate', function () {
        $schema = SchemaGenerator::skipUserDefinedFields()->generateFor(OpenImmo::class);

        expect($schema)->toBeArray()
            ->and($schema)->toHaveKey('OpenImmo')
            ->and($schema['OpenImmo'])->toHaveKey('Transfer')
            ->and($schema['OpenImmo']['Transfer'])->toHaveKey('type')
            ->and($schema['OpenImmo'])->not->toHaveKey('UserDefinedAnyfield');
    });
});
