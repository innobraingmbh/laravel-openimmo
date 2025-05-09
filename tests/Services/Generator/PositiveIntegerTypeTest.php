<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Tests\TestCase;

test('positive integer type', function () {
    TranslationService::addFakeClass('PositiveIntegerType');
    TranslationService::addFakeProperty('positiveInteger');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('positive_integer_type');

    $this->assertClassHasProperties($generatedClass, [
        ['positiveInteger', 'int', true, []],
    ]);
});
