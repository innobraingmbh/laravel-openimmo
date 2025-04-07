<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Facades\TranslationService;
use Innobrain\OpenImmo\Tests\TestCase;
use JMS\Serializer\Annotation\Type;

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
