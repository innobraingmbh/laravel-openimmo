<?php

declare(strict_types=1);

use Katalam\OpenImmo\Facades\TranslationService;
use Katalam\OpenImmo\Tests\TestCase;

test('duplicate properties inside choice', function () {
    TranslationService::addFakeClass('DuplicatePropertiesInsideChoice');
    TranslationService::addFakeProperty('ort');
    TranslationService::addFakeProperty('plz');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('duplicate_properties_inside_choice');

    $this->assertClassHasProperties($generatedClass, [
        ['ort', 'string', true, []],
        ['plz', 'string', true, []],
    ]);
});
