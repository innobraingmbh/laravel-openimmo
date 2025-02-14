<?php

declare(strict_types=1);

use Katalam\OpenImmo\Facades\TypeUtil;
use Nette\PhpGenerator\Property;

test('camelize', function (string $input, string $expected) {
    $generatedValue = TypeUtil::camelize($input);

    expect($generatedValue)->toBe($expected);
})->with([
    ['bebaubar_nach', 'bebaubarNach'],
    ['umsst-id', 'umsstId'],
    ['bebaubar_nach', 'bebaubarNach'],
    ['umsst-id', 'umsstId'],
    [strtolower('WASSER-ELEKTRO'), 'wasserElektro'],
    [strtolower('ERDWAERME'), 'erdwaerme'],
]);

test('studly', function (string $input, string $expected) {
    $generatedValue = TypeUtil::studly($input);

    expect($generatedValue)->toBe($expected);
})->with([
    ['bebaubar_nach', 'BebaubarNach'],
    ['umsst-id', 'UmsstId'],
    ['bebaubar_nach', 'BebaubarNach'],
    ['umsst-id', 'UmsstId'],
    [strtolower('WASSER-ELEKTRO'), 'WasserElektro'],
    [strtolower('ERDWAERME'), 'Erdwaerme'],
]);

test('type for serializer', function (string $xsdType, string $serializerType) {
    $generatedType = TypeUtil::getTypeForSerializer($xsdType);

    expect($generatedType)->toBe($serializerType);
})->with([
    ['string', 'string'],
    ['dateTime', "DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>"],
    ['date', "DateTime<'Y-m-d'>"],
    ['float', 'float'],
    ['int', 'int'],
    ['array', 'array'],
    ['boolean', 'bool'],
    [DateTime::class, "DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>"],
    ['decimal', 'float'],

    ['string[]', 'array<string>'],
    ['float[]', 'array<float>'],
    ['int[]', 'array<int>'],
    ['boolean[]', 'array<bool>'],
    ['decimal[]', 'array<float>'],

    ['FooBarClassName', 'Katalam\\OpenImmo\\Dtos\\FooBarClassName'],
    ['FooBarClassName[]', 'array<Katalam\\OpenImmo\\Dtos\\FooBarClassName>'],
]);

test('valid php type', function (string $xsdType, string $phpType) {
    $generatedType = TypeUtil::getValidPhpType($xsdType);

    expect($generatedType)->toBe($phpType);
})->with([
    ['decimal', 'float'],
    ['float', 'float'],

    ['boolean', 'bool'],
    ['bool', 'bool'],

    ['int', 'int'],
    ['positiveInteger', 'int'],
    ['PositiveIntegerType', 'int'],

    ['date', '\\'.DateTime::class],
    ['dateTime', '\\'.DateTime::class],

    ['string', 'string'],
    ['kontakt', 'string'],
    ['base64Binary', 'string'],

    ['array', 'array'],

    ['FooBarClassName', '\\Katalam\\OpenImmo\\Dtos\\FooBarClassName'],
]);

test('default value', function (string $propertyType, bool $nullable, mixed $defaultValue) {
    $generatedValue = TypeUtil::getDefaultValueForType($propertyType, $nullable);

    expect($generatedValue)->toBe($defaultValue);
})->with([
    ['float', false, 0.0],
    ['float', true, null],

    ['bool', false, false],
    ['bool', true, null],

    ['int', false, 0],
    ['int', true, null],

    ['string', false, ''],
    ['string', true, null],

    ['array', false, []],
    ['array', true, null],

    ['Foobar', false, null],
    ['Foobar', true, null],

    ['Feld[]', false, []],
    ['Feld[]', true, null],
]);

test('constant based property', function (Property $property, bool $isConstantBased) {
    $generatedValue = TypeUtil::isConstantsBasedProperty($property);

    expect($generatedValue)->toBe($isConstantBased);
})->with([
    function () {
        $property = new Property('foobar');
        $property->setComment('Hallo Welt!');

        return [$property, false];
    },
    function () {
        $property = new Property('foobar');
        $property->setComment('@see foobar_* constants');

        return [$property, false];
    },
    function () {
        $property = new Property('foobar');
        $property->setComment('@see FOOBAR_* constants');

        return [$property, true];
    },
]);
