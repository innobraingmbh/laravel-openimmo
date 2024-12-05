<?php

declare(strict_types=1);

use JMS\Serializer\Annotation\SerializedName;
use Katalam\OpenImmo\Facades\TranslationService;
use Katalam\OpenImmo\Tests\TestCase;

test('generate type with inconsistent naming', function () {
    TranslationService::addFakeClass('TypeWithInconsistentNaming');
    TranslationService::addFakeAttribute('uppercaseftw');

    /** @var TestCase $this */
    $generatedClass = $this->getGeneratedClassFromFile('type_with_inconsistent_naming');

    $this->assertClassHasProperties($generatedClass, [
        ['uppercaseftw', 'bool', true, ['SerializedName' => '("UPPERCASEFTW")']],
    ]);

    expect($generatedClass->getNamespace()->getUses())->toContain(SerializedName::class);
});
