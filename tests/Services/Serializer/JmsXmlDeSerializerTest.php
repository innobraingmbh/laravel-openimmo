<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use Katalam\OpenImmo\Dtos\Apartment;
use Katalam\OpenImmo\Dtos\Attachment;
use Katalam\OpenImmo\Dtos\Evaluation;
use Katalam\OpenImmo\Dtos\ExternalCommission;
use Katalam\OpenImmo\Dtos\Geo;
use Katalam\OpenImmo\Dtos\OpenImmo;
use Katalam\OpenImmo\Dtos\OtherEmail;
use Katalam\OpenImmo\Dtos\Photo;
use Katalam\OpenImmo\Dtos\PropertyCategory;
use Katalam\OpenImmo\Dtos\RealEstate;
use Katalam\OpenImmo\Dtos\Rooms;
use Katalam\OpenImmo\Dtos\Transfer;
use Katalam\OpenImmo\Handler\DateTimeHandler;

function getDeserializer()
{
    return SerializerBuilder::create()
        ->configureHandlers(function (HandlerRegistryInterface $registry): void {
            $registry->registerSubscribingHandler(new DateTimeHandler);
        })
        ->build();
}

function deserializeObject(string $object, string $classFqn = OpenImmo::class)
{
    return getDeserializer()->deserialize($object, $classFqn, 'xml');
}

test('read xml', function () {
    $file = Storage::get('OpenImmo/openimmo-data_127.xml');

    if (empty($file)) {
        $this->fail('File not found, you need to download the file from the OpenImmo website http://www.openimmo.de/go.php/p/24/download.htm');
    }

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

    /** @var OpenImmo $openImmo */
    $openImmo = deserializeObject($file);

    expect($openImmo->getTransfer())->toEqual($transfer)
        ->and($openImmo->getProvider())->toHaveCount(1)
        ->and($openImmo->getProvider()[0]->getLicenseIdentifier())->toBe('ABCD13');

    /** @var RealEstate $realEstate */
    $realEstate = $openImmo->getProvider()[0]->getRealEstate()[0];

    expect($realEstate->getPropertyCategory()->getTypeOfUse()->getLiving())->toBeTrue()
        ->and($realEstate->getPropertyCategory()->getTypeOfUse()->getCommercial())->toBeFalse()
        ->and($realEstate->getPropertyCategory()->getTypeOfUse()->getFacility())->toBeFalse()
        ->and($realEstate->getPropertyCategory()->getTypeOfUse()->getWaz())->toBeFalse()

        ->and($realEstate->getPropertyCategory()->getMarketingType()->getPurchase())->toBeTrue()
        ->and($realEstate->getPropertyCategory()->getMarketingType()->getRentLease())->toBeFalse()
        ->and($realEstate->getPropertyCategory()->getMarketingType()->getLeasehold())->toBeFalse()
        ->and($realEstate->getPropertyCategory()->getMarketingType()->getLeasing())->toBeFalse()

        ->and($realEstate->getPropertyCategory()->getPropertyType()->getRooms())->toHaveCount(1)
        ->and($realEstate->getPropertyCategory()->getPropertyType()->getRooms()[0]->getRoomType())->toBe(Rooms::ROOM_TYPE_ROOM)
        ->and($realEstate->getPropertyCategory()->getPropertyType()->getPropertyTypeAdditional())->toHaveCount(1)
        ->and($realEstate->getPropertyCategory()->getPropertyType()->getPropertyTypeAdditional()[0])->toBe('Moebeliert')

        ->and($realEstate->getContactPerson()->getOtherEmail())->toHaveCount(1)
        ->and($realEstate->getContactPerson()->getOtherEmail()[0]->getEmailType())->toBe(OtherEmail::EMAIL_TYPE_DIRECT_MARKETING)
        ->and($realEstate->getContactPerson()->getOtherEmail()[0]->getRemark())->toBe('1')
        ->and($realEstate->getContactPerson()->getOtherEmail()[0]->getValue())->toBe('foo@bar.de')
        ->and($realEstate->getContactPerson()->getFeedbackEmail())->toBe('yx@y.de')

        ->and($realEstate->getContactPerson()->getPhoto()->getLocation())->toBe(Photo::LOCATION_EXTERNAL)
        ->and($realEstate->getContactPerson()->getPhoto()->getData()->getPath())->toBe('abc.jpg')
        ->and($realEstate->getContactPerson()->getPhoto()->getFormat())->toBe('JPEG')

        ->and($realEstate->getFreeTexts()->getPropertyTitle())->toBe('Schönes Appartment im Stadtzentrum')
        ->and($realEstate->getFreeTexts()->getOtherInformation())->toBe('Hier können Hinweise auf die Regelung im Fernabsatzgesetz stehen.')
        ->and($realEstate->getFreeTexts()->getPropertyText())->not->toBeNull()
        ->and($realEstate->getFreeTexts()->getPropertyText()->getValue())->toBe('Nice appartment in the inner city')
        ->and($realEstate->getFreeTexts()->getPropertyText()->getLanguage())->toBe('en');
})->skipOnLinux();

test('read property category', function () {
    $xml = File::get(base_path('../tests/fixtures/PropertyCategory.xml'));

    /** @var PropertyCategory $object */
    $object = deserializeObject($xml, PropertyCategory::class);

    expect($object->getTypeOfUse()->getLiving())->toBeTrue()
        ->and($object->getTypeOfUse()->getCommercial())->toBeFalse()
        ->and($object->getMarketingType()->getRentLease())->toBeTrue()
        ->and($object->getMarketingType()->getPurchase())->toBeFalse()
        ->and($object->getPropertyType()->getApartment()[0]->getApartmentType())->toBe(Apartment::APARTMENT_TYPE_MAISONETTE)
        ->and($object->getPropertyType()->getPropertyTypeAdditional()[0])->toBe('Dachgeschoss');
});

test('read attachment xml', function () {
    $xml = File::get(base_path('../tests/fixtures/Attachment.xml'));

    /** @var Attachment $object */
    $object = deserializeObject($xml, Attachment::class);

    expect($object->getLocation())->toBe(Attachment::LOCATION_EXTERNAL)
        ->and($object->getGroup())->toBe(Attachment::GROUP_IMAGE)
        ->and($object->getData()->getPath())->toBe('/dev/null');
});

test('datetime with microseconds', function () {
    $xml = File::get(base_path('../tests/fixtures/TransferWithMicroseconds.xml'));

    /** @var Transfer $object */
    $object = deserializeObject($xml, Transfer::class);

    expect($object->getType())->toBe(Transfer::TYPE_ONLINE)
        ->and($object->getScope())->toBe(Transfer::SCOPE_FULL)
        ->and($object->getVersion())->toBe('1.2.7')
        ->and($object->getSenderSoftware())->toBe('IMEX')
        ->and($object->getSenderVersion())->toBe('1.56')
        ->and($object->getTimestamp()->format('Y-m-d\TH:i:s.uP'))->toBe('2020-08-07T11:56:39.124297+02:00');
});

test('read external commission', function () {
    $xml = File::get(base_path('../tests/fixtures/ExternalCommission.xml'));

    /** @var ExternalCommission $object */
    $object = deserializeObject($xml, ExternalCommission::class);

    expect($object->getWithVAT())->toBeTrue()
        ->and($object->getValue())->toBe('12354,12 €');
});

test('read complex type', function () {
    $xml = File::get(base_path('../tests/fixtures/ComplexType.xml'));

    /** @var Evaluation $object */
    $object = deserializeObject($xml, Evaluation::class);

    expect($object->getField())->toHaveCount(1)
        ->and($object->getField()[0]->getMode())->toBe(['kauf'])
        ->and($object->getField()[0]->getName())->toBe('abc')
        ->and($object->getField()[0]->getType())->toBe(['int'])
        ->and($object->getField()[0]->getValue())->toBe('100');
});

test('read complex type arrays', function () {
    $xml = File::get(base_path('../tests/fixtures/ComplexTypeArray.xml'));

    /** @var Evaluation $object */
    $object = deserializeObject($xml, Evaluation::class);

    expect($object->getField())->toHaveCount(1)
        ->and($object->getField()[0]->getMode())->toBe(['kauf', 'miete', 'pacht'])
        ->and($object->getField()[0]->getName())->toBe('abc')
        ->and($object->getField()[0]->getType())->toBe(['int', 'float', 'string'])
        ->and($object->getField()[0]->getValue())->toBe('100');
});

test('read user defined simple fields', function () {
    $xml = File::get(base_path('../tests/fixtures/UserDefinedSimpleFields.xml'));

    /** @var Geo $object */
    $object = deserializeObject($xml, Geo::class);

    expect($object->getPostalCode())->toBe('01809')
        ->and($object->getCity())->toBe('Heidenau')
        ->and($object->getStreet())->toBe('Dr.-Otto-Nuschke-Straße')
        ->and($object->getHouseNumber())->toBe('2')
        ->and($object->getCountry()->getIsoCountry())->toBe('DEU')
        ->and($object->getFloor())->toBe(0)
        ->and($object->getApartmentNumber())->toBe('8.1.1')
        ->and($object->getRegionalAddition())->toBe('Mügeln')
        ->and($object->getUserDefinedSimpleField())->toHaveCount(2)
        ->and($object->getUserDefinedSimpleField()[0]->getValue())->toBe('Mügeln')
        ->and($object->getUserDefinedSimpleField()[0]->getFieldName())->toBe('ZONE')
        ->and($object->getUserDefinedSimpleField()[1]->getFieldName())->toBe('regionaler_zusatz_gruppe');
});
