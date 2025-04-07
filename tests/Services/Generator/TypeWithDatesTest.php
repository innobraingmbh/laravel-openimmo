<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Tests\TestCase;

test('generate type with dates', function () {
    TranslationService::addFakeClass('TypeWithDates');
    TranslationService::addFakeProperty('dateTime');
    TranslationService::addFakeProperty('date');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('type_with_dates');

    $this->assertClassHasProperties($generatedClass, [
        ['dateTime', '\\'.DateTime::class, true, [], 'dateTime'],
        ['date', '\\'.DateTime::class, true, [], 'date'],
    ]);
});
