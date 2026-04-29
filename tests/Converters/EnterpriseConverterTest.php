<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Innobrain\OpenImmo\Converters\EnterpriseConverter;
use Innobrain\OpenImmo\Dtos\AttachedGastronomy;
use Innobrain\OpenImmo\Dtos\Elevator;
use Innobrain\OpenImmo\Dtos\EnergyPerformanceCertificate;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Original\Openimmo as OriginalOpenimmo;
use Innobrain\OpenImmo\Enums\ConverterDriver;
use Innobrain\OpenImmo\Facades\FormatConverterService;
use Innobrain\OpenImmo\Facades\OpenImmoService;

use function Innobrain\OpenImmo\Helpers\getAreas;
use function Innobrain\OpenImmo\Helpers\getConditionInformation;
use function Innobrain\OpenImmo\Helpers\getEquipment;
use function Innobrain\OpenImmo\Helpers\Original\getFlaechen;

test('can start convert', function () {
    $openImmo = new OpenImmo;

    $result = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->convert($openImmo);

    expect($result)->toBeArray();
});

test('can convert a open immo xml', function () {
    $xml = File::get(__DIR__.'/../fixtures/example.xml');
    $openImmo = OpenImmoService::deserializeObjectFromXml($xml);

    $result = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->convert($openImmo);

    expect($result)->toBeArray()
        ->toBe([
            'nutzungsart' => 'gewerbe',
            'vermarktungsart' => 'pacht',
            'plz' => '97084',
            'ort' => 'Heidingsfeld, Heidingsfeld',
            'kaltmiete' => '940.00',
            'nebenkosten' => '322.00',
            'heizkosten_in_nebenkosten' => 'J',
            'objekttitel' => 'Reinkommen, wohlfühlen, losleben!',
            'lage' => 'Heidingsfeld war von 1367 bis 1929 eine eigenständige Stadt und wurde am 1. Januar 1930 auf Wunsch der Bürger nach Würzburg eingemeindet. Daher leitet sich die heutige umgangssprachliche Bezeichnung "Städtle" (für den Heidingsfelder Altort) ab, da Heidingsfeld quasi eine kleine Stadt in der großen Stadt Würzburg darstellt.<br>Heidingsfeld, besitzt heute eine attraktive Lage , sowohl für Familien, Studenten und Senioren, wie auch für Gewerbetreibende.<br>Bus- und Straßenbahnanschluss, Nahversorger, Ärzte, Restaurants und ein vielfältiges Sportangebot befinden sich in der direkten Nachbarschaft. Gleichzeitig finden Sie eine sehr grüne und naturbelassene Umgebung vor, welche zu ausgedehnten Spaziergängen und anderen Freizeitaktivitäten in der Natur einlädt. Das macht die Katzenberg Terrassen so charmant und attraktiv.',
            'sonstige_angaben' => "Sonstiges\nDa der Versand des Exposés automatisch erfolgt, werden Nachrichten im Bemerkungsfeld nicht gelesen.<br><br>Bitte fordern Sie zunächst über das Feld \"Anbieter kontaktieren\" das Exposé bei uns an. Falls Sie danach weitere Fragen zur Immobilie haben, rufen Sie uns gerne unter 0931-304998888 an oder schreiben Sie uns eine E-Mail an info@vr-ism.de\n\nStichworte\nBundesland: Bayern",
            'wohnflaeche' => '72.30',
            'anzahl_zimmer' => '2.00',
            'fahrstuhl' => [
                'personen',
            ],
            'heizungsart' => [
                'fussboden',
            ],
            'befeuerung' => [
                'luftwp',
            ],
            'wasch_trockenraum' => 1,
            'unterkellert' => 'TEIL',
            'erstellt_am' => '2025-04-01 00:00:00',
            'importId' => '8333',
        ]);
});

test('can overwrite open immo property', function () {
    $openImmo = new OpenImmo;
    $areas = getAreas($openImmo);
    $areas->setLivingArea(120.5);

    /** @var EnterpriseConverter $enterpriseConverter */
    $enterpriseConverter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $enterpriseConverter->convertAreas();

    expect($result['wohnflaeche'])->toBe('120.50');
});

test('can start convert with original dto', function () {
    $openImmo = new OriginalOpenimmo;

    $result = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->convert($openImmo);

    expect($result)->toBeArray();
});

test('can convert original dto from xml', function () {
    $xml = File::get(__DIR__.'/../fixtures/example.xml');
    $openImmo = OpenImmoService::deserializeObjectFromXml($xml, OriginalOpenimmo::class);

    $result = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->convert($openImmo);

    expect($result)->toBeArray()
        ->toBe([
            'nutzungsart' => 'gewerbe',
            'vermarktungsart' => 'pacht',
            'plz' => '97084',
            'ort' => 'Heidingsfeld, Heidingsfeld',
            'kaltmiete' => '940.00',
            'nebenkosten' => '322.00',
            'heizkosten_in_nebenkosten' => 'J',
            'objekttitel' => 'Reinkommen, wohlfühlen, losleben!',
            'lage' => 'Heidingsfeld war von 1367 bis 1929 eine eigenständige Stadt und wurde am 1. Januar 1930 auf Wunsch der Bürger nach Würzburg eingemeindet. Daher leitet sich die heutige umgangssprachliche Bezeichnung "Städtle" (für den Heidingsfelder Altort) ab, da Heidingsfeld quasi eine kleine Stadt in der großen Stadt Würzburg darstellt.<br>Heidingsfeld, besitzt heute eine attraktive Lage , sowohl für Familien, Studenten und Senioren, wie auch für Gewerbetreibende.<br>Bus- und Straßenbahnanschluss, Nahversorger, Ärzte, Restaurants und ein vielfältiges Sportangebot befinden sich in der direkten Nachbarschaft. Gleichzeitig finden Sie eine sehr grüne und naturbelassene Umgebung vor, welche zu ausgedehnten Spaziergängen und anderen Freizeitaktivitäten in der Natur einlädt. Das macht die Katzenberg Terrassen so charmant und attraktiv.',
            'sonstige_angaben' => "Sonstiges\nDa der Versand des Exposés automatisch erfolgt, werden Nachrichten im Bemerkungsfeld nicht gelesen.<br><br>Bitte fordern Sie zunächst über das Feld \"Anbieter kontaktieren\" das Exposé bei uns an. Falls Sie danach weitere Fragen zur Immobilie haben, rufen Sie uns gerne unter 0931-304998888 an oder schreiben Sie uns eine E-Mail an info@vr-ism.de\n\nStichworte\nBundesland: Bayern",
            'wohnflaeche' => '72.30',
            'anzahl_zimmer' => '2.00',
            'fahrstuhl' => [
                'personen',
            ],
            'heizungsart' => [
                'fussboden',
            ],
            'befeuerung' => [
                'luftwp',
            ],
            'wasch_trockenraum' => 1,
            'unterkellert' => 'TEIL',
            'erstellt_am' => '2025-04-01 00:00:00',
            'importId' => '8333',
        ]);
});

test('can overwrite original dto property', function () {
    $openImmo = new OriginalOpenimmo;
    $flaechen = getFlaechen($openImmo);
    $flaechen->setWohnflaeche(120.5);

    /** @var EnterpriseConverter $enterpriseConverter */
    $enterpriseConverter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $enterpriseConverter->convertAreas();

    expect($result['wohnflaeche'])->toBe('120.50');
});

test('saveOpenImmo converts original dto to translated dto', function () {
    $xml = File::get(__DIR__.'/../fixtures/example.xml');
    $originalOpenImmo = OpenImmoService::deserializeObjectFromXml($xml, OriginalOpenimmo::class);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($originalOpenImmo);

    $reflection = new ReflectionProperty($converter, 'openImmo');
    $storedOpenImmo = $reflection->getValue($converter);

    expect($storedOpenImmo)->toBeInstanceOf(OpenImmo::class)
        ->and($storedOpenImmo->getProvider())->toHaveCount(1)
        ->and($storedOpenImmo->getProvider()[0]->getRealEstate())->toHaveCount(1);
});

test('saveOpenImmo keeps translated dto as is', function () {
    $xml = File::get(__DIR__.'/../fixtures/example.xml');
    $translatedOpenImmo = OpenImmoService::deserializeObjectFromXml($xml);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($translatedOpenImmo);

    $reflection = new ReflectionProperty($converter, 'openImmo');
    $storedOpenImmo = $reflection->getValue($converter);

    expect($storedOpenImmo)->toBe($translatedOpenImmo);
});

test('original and translated dto produce identical converter output', function () {
    $xml = File::get(__DIR__.'/../fixtures/example.xml');

    $translatedResult = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->convert(OpenImmoService::deserializeObjectFromXml($xml));

    $originalResult = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->convert(OpenImmoService::deserializeObjectFromXml($xml, OriginalOpenimmo::class));

    expect($originalResult)->toBe($translatedResult);
});

test('can convert elevator multiselect', function () {
    $openImmo = new OpenImmo;
    $equipment = getEquipment($openImmo);
    $elevator = new Elevator;
    $elevator->setPersons(true);
    $elevator->setEncumbrances(true);

    $equipment->setElevator($elevator);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertEquipment();

    expect($result)->toHaveKey('fahrstuhl', ['personen', 'lasten']);
});

test('can convert attached gastronomy multiselect', function () {
    $openImmo = new OpenImmo;
    $equipment = getEquipment($openImmo);
    $gastronomy = new AttachedGastronomy;
    $gastronomy->setHotelRestaurant(true);

    $equipment->setAttachedGastronomy($gastronomy);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertEquipment();

    expect($result)->toHaveKey('angeschl_gastronomie', ['hotelrestaurant']);
});

test('can convert energy certificate type for residential demand', function () {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setEnergyCertificateType('BEDARF');

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energieausweistyp', 'Endenergiebedarf');
});

test('can convert energy certificate type for residential consumption', function () {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setEnergyCertificateType('VERBRAUCH');

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energieausweistyp', 'Energieverbrauchskennwert');
});

test('can convert energy certificate type for commercial demand', function () {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setEnergyCertificateType('BEDARF');
    $energyPass->setBuildingType('nichtwohn');

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energieausweistyp', 'Bedarfsausweis Gewerbe');
});

test('can convert energy certificate type for commercial consumption', function () {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setEnergyCertificateType('VERBRAUCH');
    $energyPass->setBuildingType('nichtwohn');

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energieausweistyp', 'Verbrauchsausweis Gewerbe');
});

test('can convert energy certificate jahrgang overrides', function ($jahrgang, $expected) {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setEnergyCertificateType('VERBRAUCH');
    $energyPass->setYear($jahrgang);

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energieausweistyp', $expected)
        ->and($result)->toHaveKey('energiepassJahrgang', $jahrgang);
})->with([
    ['ohne', 'ohne Energieausweis'],
    ['nicht_noetig', 'es besteht keine Pflicht!'],
    ['bei_besichtigung', 'liegtZurBesichtigungVor'],
]);

test('can convert energy source to lowercase', function () {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setPrimaryEnergySource('ERDWAERME');

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energietraeger', 'erdwaerme');
});

test('can convert energy source fern to fernwaerme', function () {
    $openImmo = new OpenImmo;
    $condition = getConditionInformation($openImmo);

    $energyPass = new EnergyPerformanceCertificate;
    $energyPass->setPrimaryEnergySource('FERN');

    $condition->setEnergyCertificate([$energyPass]);

    /** @var EnterpriseConverter $converter */
    $converter = FormatConverterService::driver(ConverterDriver::Enterprise)
        ->setOpenImmo($openImmo);

    $result = $converter->convertConditionInformation();

    expect($result)->toHaveKey('energietraeger', 'fernwaerme');
});
