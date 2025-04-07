<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Tests\TestCase;

test('generate api class default', function () {
    TranslationService::fake([
        'classes' => [
            'Ausblick' => 'Ausblick',
        ],
        'attributes' => [
            'blick' => 'blick',
        ],
        'constants' => [
            'BLICK' => 'BLICK',
            'BERGE' => 'BERGE',
            'IN_DIE_FERNE' => 'IN_DIE_FERNE',
            'MEER' => 'MEER',
            'SEE' => 'SEE',
        ],
    ]);

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile(
        'ausblick',
        'Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar'
    );

    $this->assertClassHasConstants($generatedClass, [
        'BLICK_BERGE' => 'BERGE',
        'BLICK_IN_DIE_FERNE' => 'IN DIE FERNE',
        'BLICK_MEER' => 'MEER',
        'BLICK_SEE' => 'SEE',
    ]);

    $this->assertClassHasProperties($generatedClass, [
        ['blick', 'string', true, ['XmlAttribute' => '']],
    ]);

    $property = $generatedClass->getProperty('blick');
    expect($property->getComment())->toContain('@see BLICK_* constants');
});
