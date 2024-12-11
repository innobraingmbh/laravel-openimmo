<?php

declare(strict_types=1);

use Katalam\OpenImmo\Facades\TranslationService;
use Katalam\OpenImmo\Services\TypeUtil;
use Katalam\OpenImmo\Tests\TestCase;

test('generate api class complex type', function () {
    TranslationService::addFakeProperty('feld');
    TranslationService::addFakeClass('Feld');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('user_defined_extend');

    $this->assertClassHasProperties($generatedClass, [
        ['feld', 'array', true, ['XmlList' => '(inline = true, entry = "feld")'], 'Feld[]'],
    ]);
});

test('array getter does not return null for new class', function () {
    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('user_defined_extend');

    $className = TypeUtil::OPENIMMO_NAMESPACE.$generatedClass->getName();

    $instance = new $className;
    expect($instance->getField())->toBe([]);
});
