<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Storage;
use Katalam\OpenImmo\Services\TranslationService;

function prepareStorage(): void
{
    Storage::fake('local');

    $folder = 'TranslationMapping';

    collect([
        'attributes',
        'classes',
        'constants',
        'properties',
    ])->each(function ($file) use ($folder) {
        Storage::put("$folder/$file.csv", '');
    });
}

describe('works', function () {
    test('classes', function () {
        prepareStorage();

        Storage::put('TranslationMapping/classes.csv', 'ZustandAngaben,ConditionInformation'.PHP_EOL);

        $translationService = new TranslationService;

        $result = $translationService->translateClass('ZustandAngaben');

        expect($result)->toBe('ConditionInformation');
    });

    test('attributes', function () {
        prepareStorage();

        Storage::put('TranslationMapping/attributes.csv', 'zustandArt,conditionType'.PHP_EOL);

        $translationService = new TranslationService;

        $result = $translationService->translateAttribute('zustandArt');

        expect($result)->toBe('conditionType');
    });

    test('constants', function () {
        prepareStorage();

        Storage::put('TranslationMapping/constants.csv', 'ZUSTAND_ART,CONDITION_TYPE'.PHP_EOL);

        $translationService = new TranslationService;

        $result = $translationService->translateConstant('ZUSTAND_ART');

        expect($result)->toBe('CONDITION_TYPE');
    });

    test('properties', function () {
        prepareStorage();

        Storage::put('TranslationMapping/properties.csv', 'zzgMehrwertsteuer,plusVAT'.PHP_EOL);

        $translationService = new TranslationService;

        $result = $translationService->translateProperty('zzgMehrwertsteuer');

        expect($result)->toBe('plusVAT');
    });
});
