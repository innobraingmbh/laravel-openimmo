<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Innobrain\OpenImmo\Dtos\Action;
use Innobrain\OpenImmo\Dtos\ContactPerson;
use Innobrain\OpenImmo\Dtos\Geo;
use Innobrain\OpenImmo\Dtos\MarketingType;
use Innobrain\OpenImmo\Dtos\PropertyCategory;
use Innobrain\OpenImmo\Dtos\PropertyType;
use Innobrain\OpenImmo\Dtos\RealEstate;
use Innobrain\OpenImmo\Dtos\SportDistances;
use Innobrain\OpenImmo\Dtos\TechnicalManagement;
use Innobrain\OpenImmo\Dtos\Transfer;
use Innobrain\OpenImmo\Dtos\TypeOfUse;
use Innobrain\OpenImmo\Facades\OpenImmoService;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

use function PHPUnit\Framework\assertJsonStringEqualsJsonString;

function getJsonSerializer(): Serializer
{
    return new Serializer([
        new DateTimeNormalizer,
        new GetSetMethodNormalizer,
    ], [
        new JsonEncoder,
    ]);
}

function serializeObjectIntoJson(mixed $object): string
{
    return getJsonSerializer()->serialize($object, JsonEncoder::FORMAT, [
        AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS => false,
        'json_encode_options' => JSON_PRESERVE_ZERO_FRACTION,
    ]);
}

test('write real estate json', function () {
    $json = File::get(base_path('../tests/fixtures/RealEstate.json'));

    $realEstate = new RealEstate;
    $contactPerson = (new ContactPerson)
        ->setSalutation('Herr')
        ->setName('John Doe');
    $realEstate->setContactPerson($contactPerson);
    $realEstate->setGeo(new Geo);

    $typeOfUse = (new TypeOfUse)
        ->setCommercial(false)
        ->setLiving(false);

    $marketingType = (new MarketingType)
        ->setPurchase(true)
        ->setRentLease(false);

    $projectCategory = (new PropertyCategory)
        ->setTypeOfUse($typeOfUse)
        ->setPropertyType(new PropertyType)
        ->setMarketingType($marketingType);

    $realEstate->setPropertyCategory($projectCategory);

    $technicalManagement = (new TechnicalManagement)
        ->setAction(new Action(Action::ACTION_TYPE_CHANGE))
        ->setExternalPropertyNumber('456')
        ->setOpenImmoObjectId('123')
        ->setStatusFrom(new DateTime('@1625046873'));

    $realEstate->setTechnicalManagement($technicalManagement);

    $generatedJson = OpenImmoService::serializeObjectIntoJson($realEstate);

    assertJsonStringEqualsJsonString($json, $generatedJson);
});

test('write transfer json', function () {
    $json = File::get(base_path('../tests/fixtures/Transfer.json'));

    $transfer = (new Transfer)
        ->setType(Transfer::TYPE_ONLINE)
        ->setScope(Transfer::SCOPE_FULL)
        ->setMode(Transfer::MODE_NEW)
        ->setVersion('1.2.7')
        ->setSenderSoftware('OIGEN')
        ->setSenderVersion('0.9')
        ->setTechnicalEmail('')
        ->setTimestamp(new DateTime('2014-06-01T10:00:00'))
        ->setRegionId('ABCD143');

    $generatedJson = OpenImmoService::serializeObjectIntoJson($transfer);

    assertJsonStringEqualsJsonString($json, $generatedJson);
});

test('write distance json', function () {
    $json = '{"distanceToSport": "SEE", "value": 15}';

    $distances = (new SportDistances(SportDistances::DISTANCE_TO_SPORT_LAKE, 15));

    $generatedJson = OpenImmoService::serializeObjectIntoJson($distances);

    assertJsonStringEqualsJsonString($json, $generatedJson);
});
