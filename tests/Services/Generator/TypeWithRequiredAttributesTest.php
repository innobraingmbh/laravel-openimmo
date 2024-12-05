<?php

declare(strict_types=1);

use Katalam\OpenImmo\Facades\TranslationService;
use Katalam\OpenImmo\Tests\TestCase;

test('generate type with required attributes', function () {
    TranslationService::addFakeClass('TypeWithRequiredAttributes');
    TranslationService::addFakeAttribute('wohnen');
    TranslationService::addFakeAttribute('anlage');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('type_with_required_attributes');

    $this->assertClassHasProperties($generatedClass, [
        ['wohnen', 'bool', true, ['XmlAttribute' => '']],
        ['anlage', 'bool', true, ['XmlAttribute' => '']],
    ]);

    $liveProperty = $generatedClass->getProperty('wohnen');
    expect($liveProperty->getComment())->toContain('required');

    $deadProperty = $generatedClass->getProperty('anlage');
    expect($deadProperty->getComment())->toContain('optional');

    $class = $this->getReflectionClassFromGeneratedClass($generatedClass);
    $liveGetter = $class->getMethod('getWohnen');
    expect($liveGetter->getReturnType()->allowsNull())->toBeFalse();

    $deadGetter = $class->getMethod('getAnlage');
    expect($deadGetter->getReturnType()->allowsNull())->toBeTrue();
});
