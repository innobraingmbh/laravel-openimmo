<?php

declare(strict_types=1);

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use Katalam\OpenImmo\Facades\TranslationService;
use Katalam\OpenImmo\Tests\TestCase;

test('generate api class complex mixed type', function () {
    TranslationService::addFakeClass('ComplexMixedType');
    TranslationService::addFakeAttribute('mitPommes');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile(
        'complex_mixed_type',
        'Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld'
    );

    $this->assertClassHasProperties($generatedClass, [
        ['mitPommes', 'bool', true, ['XmlAttribute' => '']],
        ['value', 'string', true, ['Inline' => '']],
    ]);

    expect($generatedClass->getNamespace()->getUses())
        ->toContain(Type::class)
        ->toContain(Inline::class)
        ->toContain(XmlAttribute::class);
});
