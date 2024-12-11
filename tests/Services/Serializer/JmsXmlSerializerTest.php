<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use Katalam\OpenImmo\Dtos\Apartment;
use Katalam\OpenImmo\Dtos\ContactPerson;
use Katalam\OpenImmo\Dtos\Distances;
use Katalam\OpenImmo\Dtos\Evaluation;
use Katalam\OpenImmo\Dtos\ExternalCommission;
use Katalam\OpenImmo\Dtos\Field;
use Katalam\OpenImmo\Dtos\Infrastructure;
use Katalam\OpenImmo\Dtos\MarketingType;
use Katalam\OpenImmo\Dtos\OpenImmo;
use Katalam\OpenImmo\Dtos\PropertyCategory;
use Katalam\OpenImmo\Dtos\PropertyType;
use Katalam\OpenImmo\Dtos\Provider;
use Katalam\OpenImmo\Dtos\RealEstate;
use Katalam\OpenImmo\Dtos\SportDistances;
use Katalam\OpenImmo\Dtos\Transfer;
use Katalam\OpenImmo\Dtos\TypeOfUse;
use Katalam\OpenImmo\Dtos\View;
use Katalam\OpenImmo\Handler\DateTimeHandler;

use function PHPUnit\Framework\assertXmlStringEqualsXmlString;

function getSerializer()
{
    return SerializerBuilder::create()
        ->configureHandlers(function (HandlerRegistryInterface $registry): void {
            $registry->registerSubscribingHandler(new DateTimeHandler);
        })
        ->build();
}

function serializeObject(mixed $object): string
{
    return getSerializer()->serialize($object, 'xml');
}

test('wrote real estate xml', function () {
    $xml = File::get(base_path('../tests/fixtures/RealEstate.xml'));

    $object = new RealEstate;
    $object->setContactPerson((new ContactPerson)->setSalutation('Herr'));

    $generatedXml = serializeObject($object);

    // as soon as https://github.com/schmittjoh/serializer/pull/883 is merged, the <name/> can be removed
    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write transfer xml', function () {
    $xml = File::get(base_path('../tests/fixtures/Transfer.xml'));

    $object = (new Transfer)
        ->setType(Transfer::TYPE_ONLINE)
        ->setScope(Transfer::SCOPE_FULL)
        ->setMode(Transfer::MODE_NEW)
        ->setVersion('1.2.7')
        ->setSenderSoftware('OIGEN')
        ->setSenderVersion('0.9')
        ->setTechnicalEmail('')
        ->setTimestamp(new DateTime('2014-06-01T10:00:00'))
        ->setRegionId('ABCD143');

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write transfer xml real world', function () {
    $xml = File::get(base_path('../tests/fixtures/TransferRealWorld.xml'));

    $object = (new Transfer)
        ->setType(Transfer::TYPE_OFFLINE)
        ->setScope(Transfer::SCOPE_PARTIAL)
        ->setMode(Transfer::MODE_CHANGE)
        ->setVersion('1.2.7')
        ->setSenderSoftware('OOF')
        ->setSenderVersion('$Rev: 85202 $')
        ->setTechnicalEmail('xxx@xxx.de')
        ->setTimestamp(new DateTime('2019-09-30T12:42:27.000+00:00'));

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write type of use xml', function () {
    $xml = File::get(base_path('../tests/fixtures/TypeOfUse.xml'));

    $object = (new TypeOfUse)
        ->setLiving(true)
        ->setCommercial(false)
        ->setFacility(false)
        ->setWaz(false);

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write distance to sport xml', function () {
    $xml = File::get(base_path('../tests/fixtures/DistanceToSport.xml'));

    $object = (new SportDistances(SportDistances::DISTANCE_TO_SPORT_LAKE, 15));

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write infrastructure xml', function () {
    $xml = File::get(base_path('../tests/fixtures/Infrastructure.xml'));

    $object = (new Infrastructure)
        ->setSupply(false)
        ->setView((new View)->setView(View::VIEW_MOUNTAINS))
        ->setSportDistances([
            new SportDistances(SportDistances::DISTANCE_TO_SPORT_LAKE, 15),
        ])
        ->setDistances([
            new Distances(Distances::DISTANCE_TO_MAIN_SCHOOL, 22.0),
        ]);

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write provider xml', function () {
    $xml = File::get(base_path('../tests/fixtures/Provider.xml'));

    $object = (new OpenImmo)
        ->setProvider([
            (new Provider)
                ->setCompany('MusterMannFrau Immobilien')
                ->setLicenseIdentifier('ABCD13'),
        ]);

    // as soon as https://github.com/schmittjoh/serializer/pull/883 is merged, the <openimmo_anid/> can be removed
    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write object category xml', function () {
    $xml = File::get(base_path('../tests/fixtures/PropertyCategory.xml'));

    $object = (new PropertyCategory)
        ->setTypeOfUse((new TypeOfUse)->setLiving(true)->setCommercial(false))
        ->setMarketingType((new MarketingType)->setPurchase(false)->setRentLease(true))
        ->setPropertyType(
            (new PropertyType)->setApartment([
                (new Apartment)->setApartmentType(Apartment::APARTMENT_TYPE_MAISONETTE),
            ])->setPropertyTypeAdditional(['Dachgeschoss']),
        );

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write complex type mixed xml', function () {
    $xml = File::get(base_path('../tests/fixtures/ComplexTypeMixed.xml'));

    $object = (new ExternalCommission(false, 'k.A.'));

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});

test('write complex type xml', function () {
    $xml = File::get(base_path('../tests/fixtures/ComplexType.xml'));

    $object = (new Evaluation)
        ->setField([
            new Field('abc', '100', ['int'], ['kauf']),
        ]);

    $generatedXml = serializeObject($object);

    assertXmlStringEqualsXmlString($xml, $generatedXml);
});
