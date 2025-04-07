<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Services\DtoGenerator;
use Innobrain\OpenImmo\Tests\TestCase;

test('generate type with restrictions', function () {
    TranslationService::addFakeClass('TypeWithRestrictions');
    TranslationService::addFakeProperty('mwstSatz');
    TranslationService::addFakeProperty('anzahlEtagen');
    TranslationService::addFakeProperty('telDurchw');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('type_with_restrictions');

    $this->assertClassHasProperties($generatedClass, [
        ['mwstSatz', 'float', true, []],
        ['anzahlEtagen', 'int', true, []],
        ['telDurchw', 'string', true, []],
    ]);

    $property = $generatedClass->getProperty('mwstSatz');
    expect($property->getComment())
        ->toContain('Maximum precision: 2')
        ->toContain('Minimum value (inclusive): 0')
        ->toContain('Maximum value (inclusive): 10');

    $property = $generatedClass->getProperty('telDurchw');
    expect($property->getComment())
        ->toContain('Minimum length: 1');

    require_once storage_path("app/Dtos/{$generatedClass->getName()}.php");

    $className = DtoGenerator::NAMESPACE.'\\'.$generatedClass->getName();

    $subject = new $className;
    expect($subject->getMwstSatz())->toBe(0.0);
});
