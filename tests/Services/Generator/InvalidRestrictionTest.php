<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Tests\TestCase;

test('invalid restriction', function () {
    TranslationService::addFakeClass('InvalidRestriction');

    /** @var TestCase $this */
    $this->getGeneratedClassFromFile('invalid_restriction');
})->throws(InvalidArgumentException::class);
