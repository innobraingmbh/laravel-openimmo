<?php

declare(strict_types=1);

use JMS\Serializer\Annotation\Type;
use Katalam\OpenImmo\Facades\TranslationService;
use Katalam\OpenImmo\Tests\TestCase;

test('simple content class', function () {
    TranslationService::addFakeClass('UserDefinedSimplefield');
    TranslationService::addFakeAttribute('feldname');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile(
        'user_defined_simplefield',
        'Benutzerdefinierte Angaben'
    );

    $this->assertClassHasProperties($generatedClass, [
        ['feldname', 'string', true, ['XmlAttribute' => '']],
        ['value', 'string', true, ['Inline' => '']],
    ]);

    expect($generatedClass->getNamespace()->getUses())->toContain(Type::class);
});
