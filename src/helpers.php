<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\Action;
use Innobrain\OpenImmo\Dtos\ActualRentalIncome;
use Innobrain\OpenImmo\Dtos\AdditionalAddress;
use Innobrain\OpenImmo\Dtos\AdditionalCostsPerSqmFrom;
use Innobrain\OpenImmo\Dtos\Age;
use Innobrain\OpenImmo\Dtos\AgricultureAndForestry;
use Innobrain\OpenImmo\Dtos\Apartment;
use Innobrain\OpenImmo\Dtos\ApartmentBuildingInvestmentProperty;
use Innobrain\OpenImmo\Dtos\Areas;
use Innobrain\OpenImmo\Dtos\AttachedGastronomy;
use Innobrain\OpenImmo\Dtos\Attachment;
use Innobrain\OpenImmo\Dtos\Attachments;
use Innobrain\OpenImmo\Dtos\Auction;
use Innobrain\OpenImmo\Dtos\BalconyTerraceOrientation;
use Innobrain\OpenImmo\Dtos\Basement;
use Innobrain\OpenImmo\Dtos\Bathroom;
use Innobrain\OpenImmo\Dtos\BiddingProcess;
use Innobrain\OpenImmo\Dtos\BroadbandAccess;
use Innobrain\OpenImmo\Dtos\Check;
use Innobrain\OpenImmo\Dtos\CommercialLeisureProperty;
use Innobrain\OpenImmo\Dtos\CommissionSplit;
use Innobrain\OpenImmo\Dtos\Condition;
use Innobrain\OpenImmo\Dtos\ConditionInformation;
use Innobrain\OpenImmo\Dtos\ConstructionMethod;
use Innobrain\OpenImmo\Dtos\ContactPerson;
use Innobrain\OpenImmo\Dtos\Country;
use Innobrain\OpenImmo\Dtos\Currency;
use Innobrain\OpenImmo\Dtos\Data;
use Innobrain\OpenImmo\Dtos\DevelopableAccordingTo;
use Innobrain\OpenImmo\Dtos\Development;
use Innobrain\OpenImmo\Dtos\DevelopmentScope;
use Innobrain\OpenImmo\Dtos\DevelopmentStage;
use Innobrain\OpenImmo\Dtos\Distances;
use Innobrain\OpenImmo\Dtos\Elevator;
use Innobrain\OpenImmo\Dtos\EnergyType;
use Innobrain\OpenImmo\Dtos\Equipment;
use Innobrain\OpenImmo\Dtos\Evaluation;
use Innobrain\OpenImmo\Dtos\ExternalCommission;
use Innobrain\OpenImmo\Dtos\Floor;
use Innobrain\OpenImmo\Dtos\FreeTexts;
use Innobrain\OpenImmo\Dtos\Furnished;
use Innobrain\OpenImmo\Dtos\Gender;
use Innobrain\OpenImmo\Dtos\Geo;
use Innobrain\OpenImmo\Dtos\GeoCoordinates;
use Innobrain\OpenImmo\Dtos\HallsStorageProduction;
use Innobrain\OpenImmo\Dtos\HeatingType;
use Innobrain\OpenImmo\Dtos\Hospitality;
use Innobrain\OpenImmo\Dtos\House;
use Innobrain\OpenImmo\Dtos\ImprintStructure;
use Innobrain\OpenImmo\Dtos\Infrastructure;
use Innobrain\OpenImmo\Dtos\InternalCommission;
use Innobrain\OpenImmo\Dtos\Kitchen;
use Innobrain\OpenImmo\Dtos\LocationInBuilding;
use Innobrain\OpenImmo\Dtos\MarketingType;
use Innobrain\OpenImmo\Dtos\Master;
use Innobrain\OpenImmo\Dtos\MaxRentalPeriod;
use Innobrain\OpenImmo\Dtos\MinRentalPeriod;
use Innobrain\OpenImmo\Dtos\NetHeatingCosts;
use Innobrain\OpenImmo\Dtos\NetMainRent;
use Innobrain\OpenImmo\Dtos\NetOperatingCosts;
use Innobrain\OpenImmo\Dtos\NetRentPerSqmFrom;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Other;
use Innobrain\OpenImmo\Dtos\OtherEmail;
use Innobrain\OpenImmo\Dtos\Parking;
use Innobrain\OpenImmo\Dtos\ParkingCarport;
use Innobrain\OpenImmo\Dtos\ParkingDuplex;
use Innobrain\OpenImmo\Dtos\ParkingGarage;
use Innobrain\OpenImmo\Dtos\ParkingMultiStorey;
use Innobrain\OpenImmo\Dtos\ParkingOther;
use Innobrain\OpenImmo\Dtos\ParkingOutdoor;
use Innobrain\OpenImmo\Dtos\ParkingSpaceType;
use Innobrain\OpenImmo\Dtos\ParkingUnderground;
use Innobrain\OpenImmo\Dtos\Photo;
use Innobrain\OpenImmo\Dtos\Plot;
use Innobrain\OpenImmo\Dtos\Prices;
use Innobrain\OpenImmo\Dtos\PriceTimeUnit;
use Innobrain\OpenImmo\Dtos\PropertyCategory;
use Innobrain\OpenImmo\Dtos\PropertyManagement;
use Innobrain\OpenImmo\Dtos\PropertyText;
use Innobrain\OpenImmo\Dtos\PropertyType;
use Innobrain\OpenImmo\Dtos\Provider;
use Innobrain\OpenImmo\Dtos\PurchasePrice;
use Innobrain\OpenImmo\Dtos\RealEstate;
use Innobrain\OpenImmo\Dtos\Retail;
use Innobrain\OpenImmo\Dtos\RoofShape;
use Innobrain\OpenImmo\Dtos\Rooms;
use Innobrain\OpenImmo\Dtos\SalesStatus;
use Innobrain\OpenImmo\Dtos\SecurityTechnology;
use Innobrain\OpenImmo\Dtos\Services;
use Innobrain\OpenImmo\Dtos\SportDistances;
use Innobrain\OpenImmo\Dtos\TargetRentalIncome;
use Innobrain\OpenImmo\Dtos\TechnicalManagement;
use Innobrain\OpenImmo\Dtos\TotalCostsPerSqmFrom;
use Innobrain\OpenImmo\Dtos\Transfer;
use Innobrain\OpenImmo\Dtos\TypeOfUse;
use Innobrain\OpenImmo\Dtos\View;

/**
 * Will return the Transfer object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getTransfer(OpenImmo $openImmo): Transfer
{
    $child = $openImmo->getTransfer();

    if (! $child instanceof Transfer) {
        $child = new Transfer;
        $openImmo->setTransfer($child);
    }

    return $child;
}

/**
 * Will return the Check object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCheck(OpenImmo $openImmo): Check
{
    $parent = getAttachment($openImmo);
    $child = $parent->getCheck();

    if (! $child instanceof Check) {
        $child = new Check;
        $parent->setCheck($child);
    }

    return $child;
}

/**
 * Will return the Data object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getData(OpenImmo $openImmo): Data
{
    $parent = getAttachment($openImmo);
    $child = $parent->getData();

    if (! $child instanceof Data) {
        $child = new Data;
        $parent->setData($child);
    }

    return $child;
}

/**
 * Will return the Attachment object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAttachment(OpenImmo $openImmo): Attachment
{
    $parent = getProvider($openImmo);
    $child = $parent->getAttachment();

    if (! $child instanceof Attachment) {
        $child = new Attachment;
        $parent->setAttachment($child);
    }

    return $child;
}

/**
 * Will return the TypeOfUse object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getTypeOfUse(OpenImmo $openImmo): TypeOfUse
{
    $parent = getPropertyCategory($openImmo);
    $child = $parent->getTypeOfUse();

    if (! $child instanceof TypeOfUse) {
        $child = new TypeOfUse;
        $parent->setTypeOfUse($child);
    }

    return $child;
}

/**
 * Will return the MarketingType object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMarketingType(OpenImmo $openImmo): MarketingType
{
    $parent = getPropertyCategory($openImmo);
    $child = $parent->getMarketingType();

    if (! $child instanceof MarketingType) {
        $child = new MarketingType;
        $parent->setMarketingType($child);
    }

    return $child;
}

/**
 * Will return the Rooms object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getRooms(OpenImmo $openImmo): Rooms
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getRooms();
    $child = data_get($children, '0');

    if (! $child instanceof Rooms) {
        $child = new Rooms;
        $children[] = $child;
        $parent->setRooms($children);
    }

    return $child;
}

/**
 * Will return the Apartment object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getApartment(OpenImmo $openImmo): Apartment
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getApartment();
    $child = data_get($children, '0');

    if (! $child instanceof Apartment) {
        $child = new Apartment;
        $children[] = $child;
        $parent->setApartment($children);
    }

    return $child;
}

/**
 * Will return the House object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHouse(OpenImmo $openImmo): House
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getHouse();
    $child = data_get($children, '0');

    if (! $child instanceof House) {
        $child = new House;
        $children[] = $child;
        $parent->setHouse($children);
    }

    return $child;
}

/**
 * Will return the Plot object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPlot(OpenImmo $openImmo): Plot
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getPlot();
    $child = data_get($children, '0');

    if (! $child instanceof Plot) {
        $child = new Plot;
        $children[] = $child;
        $parent->setPlot($children);
    }

    return $child;
}

/**
 * Will return the Retail object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getRetail(OpenImmo $openImmo): Retail
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getRetail();
    $child = data_get($children, '0');

    if (! $child instanceof Retail) {
        $child = new Retail;
        $children[] = $child;
        $parent->setRetail($children);
    }

    return $child;
}

/**
 * Will return the Hospitality object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHospitality(OpenImmo $openImmo): Hospitality
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getHospitality();
    $child = data_get($children, '0');

    if (! $child instanceof Hospitality) {
        $child = new Hospitality;
        $children[] = $child;
        $parent->setHospitality($children);
    }

    return $child;
}

/**
 * Will return the HallsStorageProduction object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHallsStorageProduction(OpenImmo $openImmo): HallsStorageProduction
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getHallsStorageProduction();
    $child = data_get($children, '0');

    if (! $child instanceof HallsStorageProduction) {
        $child = new HallsStorageProduction;
        $children[] = $child;
        $parent->setHallsStorageProduction($children);
    }

    return $child;
}

/**
 * Will return the AgricultureAndForestry object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAgricultureAndForestry(OpenImmo $openImmo): AgricultureAndForestry
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getAgricultureAndForestry();
    $child = data_get($children, '0');

    if (! $child instanceof AgricultureAndForestry) {
        $child = new AgricultureAndForestry;
        $children[] = $child;
        $parent->setAgricultureAndForestry($children);
    }

    return $child;
}

/**
 * Will return the Parking object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParking(OpenImmo $openImmo): Parking
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getParking();
    $child = data_get($children, '0');

    if (! $child instanceof Parking) {
        $child = new Parking;
        $children[] = $child;
        $parent->setParking($children);
    }

    return $child;
}

/**
 * Will return the Other object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getOther(OpenImmo $openImmo): Other
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getOther();
    $child = data_get($children, '0');

    if (! $child instanceof Other) {
        $child = new Other;
        $children[] = $child;
        $parent->setOther($children);
    }

    return $child;
}

/**
 * Will return the CommercialLeisureProperty object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCommercialLeisureProperty(OpenImmo $openImmo): CommercialLeisureProperty
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getCommercialLeisureProperty();
    $child = data_get($children, '0');

    if (! $child instanceof CommercialLeisureProperty) {
        $child = new CommercialLeisureProperty;
        $children[] = $child;
        $parent->setCommercialLeisureProperty($children);
    }

    return $child;
}

/**
 * Will return the ApartmentBuildingInvestmentProperty object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getApartmentBuildingInvestmentProperty(OpenImmo $openImmo): ApartmentBuildingInvestmentProperty
{
    $parent = getPropertyType($openImmo);
    $children = $parent->getApartmentBuildingInvestmentProperty();
    $child = data_get($children, '0');

    if (! $child instanceof ApartmentBuildingInvestmentProperty) {
        $child = new ApartmentBuildingInvestmentProperty;
        $children[] = $child;
        $parent->setApartmentBuildingInvestmentProperty($children);
    }

    return $child;
}

/**
 * Will return the PropertyType object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPropertyType(OpenImmo $openImmo): PropertyType
{
    $parent = getPropertyCategory($openImmo);
    $child = $parent->getPropertyType();

    if (! $child instanceof PropertyType) {
        $child = new PropertyType;
        $parent->setPropertyType($child);
    }

    return $child;
}

/**
 * Will return the PropertyCategory object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPropertyCategory(OpenImmo $openImmo): PropertyCategory
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getPropertyCategory();

    if (! $child instanceof PropertyCategory) {
        $child = new PropertyCategory;
        $parent->setPropertyCategory($child);
    }

    return $child;
}

/**
 * Will return the GeoCoordinates object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGeoCoordinates(OpenImmo $openImmo): GeoCoordinates
{
    $parent = getGeo($openImmo);
    $child = $parent->getGeoCoordinates();

    if (! $child instanceof GeoCoordinates) {
        $child = new GeoCoordinates;
        $parent->setGeoCoordinates($child);
    }

    return $child;
}

/**
 * Will return the Country object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCountry(OpenImmo $openImmo): Country
{
    $parent = getGeo($openImmo);
    $child = $parent->getCountry();

    if (! $child instanceof Country) {
        $child = new Country;
        $parent->setCountry($child);
    }

    return $child;
}

/**
 * Will return the LocationInBuilding object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getLocationInBuilding(OpenImmo $openImmo): LocationInBuilding
{
    $parent = getGeo($openImmo);
    $child = $parent->getLocationInBuilding();

    if (! $child instanceof LocationInBuilding) {
        $child = new LocationInBuilding;
        $parent->setLocationInBuilding($child);
    }

    return $child;
}

/**
 * Will return the Geo object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGeo(OpenImmo $openImmo): Geo
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getGeo();

    if (! $child instanceof Geo) {
        $child = new Geo;
        $parent->setGeo($child);
    }

    return $child;
}

/**
 * Will return the OtherEmail object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getOtherEmail(OpenImmo $openImmo): OtherEmail
{
    $parent = getContactPerson($openImmo);
    $children = $parent->getOtherEmail();
    $child = data_get($children, '0');

    if (! $child instanceof OtherEmail) {
        $child = new OtherEmail;
        $children[] = $child;
        $parent->setOtherEmail($children);
    }

    return $child;
}

/**
 * Will return the Photo object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPhoto(OpenImmo $openImmo): Photo
{
    $parent = getContactPerson($openImmo);
    $child = $parent->getPhoto();

    if (! $child instanceof Photo) {
        $child = new Photo;
        $parent->setPhoto($child);
    }

    return $child;
}

/**
 * Will return the ContactPerson object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getContactPerson(OpenImmo $openImmo): ContactPerson
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getContactPerson();

    if (! $child instanceof ContactPerson) {
        $child = new ContactPerson;
        $parent->setContactPerson($child);
    }

    return $child;
}

/**
 * Will return the AdditionalAddress object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAdditionalAddress(OpenImmo $openImmo): AdditionalAddress
{
    $parent = getRealEstate($openImmo);
    $children = $parent->getAdditionalAddress();
    $child = data_get($children, '0');

    if (! $child instanceof AdditionalAddress) {
        $child = new AdditionalAddress;
        $children[] = $child;
        $parent->setAdditionalAddress($children);
    }

    return $child;
}

/**
 * Will return the PurchasePrice object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPurchasePrice(OpenImmo $openImmo): PurchasePrice
{
    $parent = getPrices($openImmo);
    $child = $parent->getPurchasePrice();

    if (! $child instanceof PurchasePrice) {
        $child = new PurchasePrice;
        $parent->setPurchasePrice($child);
    }

    return $child;
}

/**
 * Will return the NetMainRent object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNetMainRent(OpenImmo $openImmo): NetMainRent
{
    $parent = getPrices($openImmo);
    $child = $parent->getNetMainRent();

    if (! $child instanceof NetMainRent) {
        $child = new NetMainRent;
        $parent->setNetMainRent($child);
    }

    return $child;
}

/**
 * Will return the NetOperatingCosts object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNetOperatingCosts(OpenImmo $openImmo): NetOperatingCosts
{
    $parent = getPrices($openImmo);
    $child = $parent->getNetOperatingCosts();

    if (! $child instanceof NetOperatingCosts) {
        $child = new NetOperatingCosts;
        $parent->setNetOperatingCosts($child);
    }

    return $child;
}

/**
 * Will return the TotalCostsPerSqmFrom object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getTotalCostsPerSqmFrom(OpenImmo $openImmo): TotalCostsPerSqmFrom
{
    $parent = getPrices($openImmo);
    $child = $parent->getTotalCostsPerSqmFrom();

    if (! $child instanceof TotalCostsPerSqmFrom) {
        $child = new TotalCostsPerSqmFrom;
        $parent->setTotalCostsPerSqmFrom($child);
    }

    return $child;
}

/**
 * Will return the NetHeatingCosts object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNetHeatingCosts(OpenImmo $openImmo): NetHeatingCosts
{
    $parent = getPrices($openImmo);
    $child = $parent->getNetHeatingCosts();

    if (! $child instanceof NetHeatingCosts) {
        $child = new NetHeatingCosts;
        $parent->setNetHeatingCosts($child);
    }

    return $child;
}

/**
 * Will return the AdditionalCostsPerSqmFrom object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAdditionalCostsPerSqmFrom(OpenImmo $openImmo): AdditionalCostsPerSqmFrom
{
    $parent = getPrices($openImmo);
    $child = $parent->getAdditionalCostsPerSqmFrom();

    if (! $child instanceof AdditionalCostsPerSqmFrom) {
        $child = new AdditionalCostsPerSqmFrom;
        $parent->setAdditionalCostsPerSqmFrom($child);
    }

    return $child;
}

/**
 * Will return the NetRentPerSqmFrom object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNetRentPerSqmFrom(OpenImmo $openImmo): NetRentPerSqmFrom
{
    $parent = getPrices($openImmo);
    $child = $parent->getNetRentPerSqmFrom();

    if (! $child instanceof NetRentPerSqmFrom) {
        $child = new NetRentPerSqmFrom;
        $parent->setNetRentPerSqmFrom($child);
    }

    return $child;
}

/**
 * Will return the PriceTimeUnit object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPriceTimeUnit(OpenImmo $openImmo): PriceTimeUnit
{
    $parent = getPrices($openImmo);
    $child = $parent->getPriceTimeUnit();

    if (! $child instanceof PriceTimeUnit) {
        $child = new PriceTimeUnit;
        $parent->setPriceTimeUnit($child);
    }

    return $child;
}

/**
 * Will return the CommissionSplit object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCommissionSplit(OpenImmo $openImmo): CommissionSplit
{
    $parent = getPrices($openImmo);
    $child = $parent->getCommissionSplit();

    if (! $child instanceof CommissionSplit) {
        $child = new CommissionSplit;
        $parent->setCommissionSplit($child);
    }

    return $child;
}

/**
 * Will return the InternalCommission object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getInternalCommission(OpenImmo $openImmo): InternalCommission
{
    $parent = getPrices($openImmo);
    $child = $parent->getInternalCommission();

    if (! $child instanceof InternalCommission) {
        $child = new InternalCommission;
        $parent->setInternalCommission($child);
    }

    return $child;
}

/**
 * Will return the ExternalCommission object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getExternalCommission(OpenImmo $openImmo): ExternalCommission
{
    $parent = getPrices($openImmo);
    $child = $parent->getExternalCommission();

    if (! $child instanceof ExternalCommission) {
        $child = new ExternalCommission;
        $parent->setExternalCommission($child);
    }

    return $child;
}

/**
 * Will return the Currency object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCurrency(OpenImmo $openImmo): Currency
{
    $parent = getPrices($openImmo);
    $child = $parent->getCurrency();

    if (! $child instanceof Currency) {
        $child = new Currency;
        $parent->setCurrency($child);
    }

    return $child;
}

/**
 * Will return the ActualRentalIncome object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getActualRentalIncome(OpenImmo $openImmo): ActualRentalIncome
{
    $parent = getPrices($openImmo);
    $child = $parent->getActualRentalIncome();

    if (! $child instanceof ActualRentalIncome) {
        $child = new ActualRentalIncome;
        $parent->setActualRentalIncome($child);
    }

    return $child;
}

/**
 * Will return the TargetRentalIncome object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getTargetRentalIncome(OpenImmo $openImmo): TargetRentalIncome
{
    $parent = getPrices($openImmo);
    $child = $parent->getTargetRentalIncome();

    if (! $child instanceof TargetRentalIncome) {
        $child = new TargetRentalIncome;
        $parent->setTargetRentalIncome($child);
    }

    return $child;
}

/**
 * Will return the ParkingCarport object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingCarport(OpenImmo $openImmo): ParkingCarport
{
    $parent = getPrices($openImmo);
    $child = $parent->getParkingCarport();

    if (! $child instanceof ParkingCarport) {
        $child = new ParkingCarport;
        $parent->setParkingCarport($child);
    }

    return $child;
}

/**
 * Will return the ParkingDuplex object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingDuplex(OpenImmo $openImmo): ParkingDuplex
{
    $parent = getPrices($openImmo);
    $child = $parent->getParkingDuplex();

    if (! $child instanceof ParkingDuplex) {
        $child = new ParkingDuplex;
        $parent->setParkingDuplex($child);
    }

    return $child;
}

/**
 * Will return the ParkingOutdoor object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingOutdoor(OpenImmo $openImmo): ParkingOutdoor
{
    $parent = getPrices($openImmo);
    $child = $parent->getParkingOutdoor();

    if (! $child instanceof ParkingOutdoor) {
        $child = new ParkingOutdoor;
        $parent->setParkingOutdoor($child);
    }

    return $child;
}

/**
 * Will return the ParkingGarage object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingGarage(OpenImmo $openImmo): ParkingGarage
{
    $parent = getPrices($openImmo);
    $child = $parent->getParkingGarage();

    if (! $child instanceof ParkingGarage) {
        $child = new ParkingGarage;
        $parent->setParkingGarage($child);
    }

    return $child;
}

/**
 * Will return the ParkingMultiStorey object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingMultiStorey(OpenImmo $openImmo): ParkingMultiStorey
{
    $parent = getPrices($openImmo);
    $child = $parent->getParkingMultiStorey();

    if (! $child instanceof ParkingMultiStorey) {
        $child = new ParkingMultiStorey;
        $parent->setParkingMultiStorey($child);
    }

    return $child;
}

/**
 * Will return the ParkingUnderground object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingUnderground(OpenImmo $openImmo): ParkingUnderground
{
    $parent = getPrices($openImmo);
    $child = $parent->getParkingUnderground();

    if (! $child instanceof ParkingUnderground) {
        $child = new ParkingUnderground;
        $parent->setParkingUnderground($child);
    }

    return $child;
}

/**
 * Will return the ParkingOther object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingOther(OpenImmo $openImmo): ParkingOther
{
    $parent = getPrices($openImmo);
    $children = $parent->getParkingOther();
    $child = data_get($children, '0');

    if (! $child instanceof ParkingOther) {
        $child = new ParkingOther;
        $children[] = $child;
        $parent->setParkingOther($children);
    }

    return $child;
}

/**
 * Will return the Prices object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPrices(OpenImmo $openImmo): Prices
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getPrices();

    if (! $child instanceof Prices) {
        $child = new Prices;
        $parent->setPrices($child);
    }

    return $child;
}

/**
 * Will return the BiddingProcess object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBiddingProcess(OpenImmo $openImmo): BiddingProcess
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getBiddingProcess();

    if (! $child instanceof BiddingProcess) {
        $child = new BiddingProcess;
        $parent->setBiddingProcess($child);
    }

    return $child;
}

/**
 * Will return the Auction object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAuction(OpenImmo $openImmo): Auction
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getAuction();

    if (! $child instanceof Auction) {
        $child = new Auction;
        $parent->setAuction($child);
    }

    return $child;
}

/**
 * Will return the Areas object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAreas(OpenImmo $openImmo): Areas
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getAreas();

    if (! $child instanceof Areas) {
        $child = new Areas;
        $parent->setAreas($child);
    }

    return $child;
}

/**
 * Will return the Bathroom object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBathroom(OpenImmo $openImmo): Bathroom
{
    $parent = getEquipment($openImmo);
    $child = $parent->getBathroom();

    if (! $child instanceof Bathroom) {
        $child = new Bathroom;
        $parent->setBathroom($child);
    }

    return $child;
}

/**
 * Will return the Kitchen object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getKitchen(OpenImmo $openImmo): Kitchen
{
    $parent = getEquipment($openImmo);
    $child = $parent->getKitchen();

    if (! $child instanceof Kitchen) {
        $child = new Kitchen;
        $parent->setKitchen($child);
    }

    return $child;
}

/**
 * Will return the Floor object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFloor(OpenImmo $openImmo): Floor
{
    $parent = getEquipment($openImmo);
    $child = $parent->getFloor();

    if (! $child instanceof Floor) {
        $child = new Floor;
        $parent->setFloor($child);
    }

    return $child;
}

/**
 * Will return the HeatingType object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHeatingType(OpenImmo $openImmo): HeatingType
{
    $parent = getEquipment($openImmo);
    $child = $parent->getHeatingType();

    if (! $child instanceof HeatingType) {
        $child = new HeatingType;
        $parent->setHeatingType($child);
    }

    return $child;
}

/**
 * Will return the Elevator object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getElevator(OpenImmo $openImmo): Elevator
{
    $parent = getEquipment($openImmo);
    $child = $parent->getElevator();

    if (! $child instanceof Elevator) {
        $child = new Elevator;
        $parent->setElevator($child);
    }

    return $child;
}

/**
 * Will return the ParkingSpaceType object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParkingSpaceType(OpenImmo $openImmo): ParkingSpaceType
{
    $parent = getEquipment($openImmo);
    $children = $parent->getParkingSpaceType();
    $child = data_get($children, '0');

    if (! $child instanceof ParkingSpaceType) {
        $child = new ParkingSpaceType;
        $children[] = $child;
        $parent->setParkingSpaceType($children);
    }

    return $child;
}

/**
 * Will return the BalconyTerraceOrientation object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBalconyTerraceOrientation(OpenImmo $openImmo): BalconyTerraceOrientation
{
    $parent = getEquipment($openImmo);
    $child = $parent->getBalconyTerraceOrientation();

    if (! $child instanceof BalconyTerraceOrientation) {
        $child = new BalconyTerraceOrientation;
        $parent->setBalconyTerraceOrientation($child);
    }

    return $child;
}

/**
 * Will return the Furnished object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFurnished(OpenImmo $openImmo): Furnished
{
    $parent = getEquipment($openImmo);
    $child = $parent->getFurnished();

    if (! $child instanceof Furnished) {
        $child = new Furnished;
        $parent->setFurnished($child);
    }

    return $child;
}

/**
 * Will return the AttachedGastronomy object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAttachedGastronomy(OpenImmo $openImmo): AttachedGastronomy
{
    $parent = getEquipment($openImmo);
    $child = $parent->getAttachedGastronomy();

    if (! $child instanceof AttachedGastronomy) {
        $child = new AttachedGastronomy;
        $parent->setAttachedGastronomy($child);
    }

    return $child;
}

/**
 * Will return the Services object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getServices(OpenImmo $openImmo): Services
{
    $parent = getEquipment($openImmo);
    $children = $parent->getServices();
    $child = data_get($children, '0');

    if (! $child instanceof Services) {
        $child = new Services;
        $children[] = $child;
        $parent->setServices($children);
    }

    return $child;
}

/**
 * Will return the BroadbandAccess object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBroadbandAccess(OpenImmo $openImmo): BroadbandAccess
{
    $parent = getEquipment($openImmo);
    $child = $parent->getBroadbandAccess();

    if (! $child instanceof BroadbandAccess) {
        $child = new BroadbandAccess;
        $parent->setBroadbandAccess($child);
    }

    return $child;
}

/**
 * Will return the SecurityTechnology object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSecurityTechnology(OpenImmo $openImmo): SecurityTechnology
{
    $parent = getEquipment($openImmo);
    $child = $parent->getSecurityTechnology();

    if (! $child instanceof SecurityTechnology) {
        $child = new SecurityTechnology;
        $parent->setSecurityTechnology($child);
    }

    return $child;
}

/**
 * Will return the Basement object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBasement(OpenImmo $openImmo): Basement
{
    $parent = getEquipment($openImmo);
    $child = $parent->getBasement();

    if (! $child instanceof Basement) {
        $child = new Basement;
        $parent->setBasement($child);
    }

    return $child;
}

/**
 * Will return the RoofShape object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getRoofShape(OpenImmo $openImmo): RoofShape
{
    $parent = getEquipment($openImmo);
    $child = $parent->getRoofShape();

    if (! $child instanceof RoofShape) {
        $child = new RoofShape;
        $parent->setRoofShape($child);
    }

    return $child;
}

/**
 * Will return the ConstructionMethod object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getConstructionMethod(OpenImmo $openImmo): ConstructionMethod
{
    $parent = getEquipment($openImmo);
    $child = $parent->getConstructionMethod();

    if (! $child instanceof ConstructionMethod) {
        $child = new ConstructionMethod;
        $parent->setConstructionMethod($child);
    }

    return $child;
}

/**
 * Will return the DevelopmentStage object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDevelopmentStage(OpenImmo $openImmo): DevelopmentStage
{
    $parent = getEquipment($openImmo);
    $child = $parent->getDevelopmentStage();

    if (! $child instanceof DevelopmentStage) {
        $child = new DevelopmentStage;
        $parent->setDevelopmentStage($child);
    }

    return $child;
}

/**
 * Will return the EnergyType object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEnergyType(OpenImmo $openImmo): EnergyType
{
    $parent = getEquipment($openImmo);
    $child = $parent->getEnergyType();

    if (! $child instanceof EnergyType) {
        $child = new EnergyType;
        $parent->setEnergyType($child);
    }

    return $child;
}

/**
 * Will return the Equipment object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEquipment(OpenImmo $openImmo): Equipment
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getEquipment();

    if (! $child instanceof Equipment) {
        $child = new Equipment;
        $parent->setEquipment($child);
    }

    return $child;
}

/**
 * Will return the Condition object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCondition(OpenImmo $openImmo): Condition
{
    $parent = getConditionInformation($openImmo);
    $child = $parent->getCondition();

    if (! $child instanceof Condition) {
        $child = new Condition;
        $parent->setCondition($child);
    }

    return $child;
}

/**
 * Will return the Age object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAge(OpenImmo $openImmo): Age
{
    $parent = getConditionInformation($openImmo);
    $child = $parent->getAge();

    if (! $child instanceof Age) {
        $child = new Age;
        $parent->setAge($child);
    }

    return $child;
}

/**
 * Will return the DevelopableAccordingTo object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDevelopableAccordingTo(OpenImmo $openImmo): DevelopableAccordingTo
{
    $parent = getConditionInformation($openImmo);
    $child = $parent->getDevelopableAccordingTo();

    if (! $child instanceof DevelopableAccordingTo) {
        $child = new DevelopableAccordingTo;
        $parent->setDevelopableAccordingTo($child);
    }

    return $child;
}

/**
 * Will return the Development object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDevelopment(OpenImmo $openImmo): Development
{
    $parent = getConditionInformation($openImmo);
    $child = $parent->getDevelopment();

    if (! $child instanceof Development) {
        $child = new Development;
        $parent->setDevelopment($child);
    }

    return $child;
}

/**
 * Will return the DevelopmentScope object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDevelopmentScope(OpenImmo $openImmo): DevelopmentScope
{
    $parent = getConditionInformation($openImmo);
    $child = $parent->getDevelopmentScope();

    if (! $child instanceof DevelopmentScope) {
        $child = new DevelopmentScope;
        $parent->setDevelopmentScope($child);
    }

    return $child;
}

/**
 * Will return the SalesStatus object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSalesStatus(OpenImmo $openImmo): SalesStatus
{
    $parent = getConditionInformation($openImmo);
    $child = $parent->getSalesStatus();

    if (! $child instanceof SalesStatus) {
        $child = new SalesStatus;
        $parent->setSalesStatus($child);
    }

    return $child;
}

/**
 * Will return the ConditionInformation object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getConditionInformation(OpenImmo $openImmo): ConditionInformation
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getConditionInformation();

    if (! $child instanceof ConditionInformation) {
        $child = new ConditionInformation;
        $parent->setConditionInformation($child);
    }

    return $child;
}

/**
 * Will return the Evaluation object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEvaluation(OpenImmo $openImmo): Evaluation
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getEvaluation();

    if (! $child instanceof Evaluation) {
        $child = new Evaluation;
        $parent->setEvaluation($child);
    }

    return $child;
}

/**
 * Will return the View object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getView(OpenImmo $openImmo): View
{
    $parent = getInfrastructure($openImmo);
    $child = $parent->getView();

    if (! $child instanceof View) {
        $child = new View;
        $parent->setView($child);
    }

    return $child;
}

/**
 * Will return the Distances object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDistances(OpenImmo $openImmo): Distances
{
    $parent = getInfrastructure($openImmo);
    $children = $parent->getDistances();
    $child = data_get($children, '0');

    if (! $child instanceof Distances) {
        $child = new Distances;
        $children[] = $child;
        $parent->setDistances($children);
    }

    return $child;
}

/**
 * Will return the SportDistances object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSportDistances(OpenImmo $openImmo): SportDistances
{
    $parent = getInfrastructure($openImmo);
    $children = $parent->getSportDistances();
    $child = data_get($children, '0');

    if (! $child instanceof SportDistances) {
        $child = new SportDistances;
        $children[] = $child;
        $parent->setSportDistances($children);
    }

    return $child;
}

/**
 * Will return the Infrastructure object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getInfrastructure(OpenImmo $openImmo): Infrastructure
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getInfrastructure();

    if (! $child instanceof Infrastructure) {
        $child = new Infrastructure;
        $parent->setInfrastructure($child);
    }

    return $child;
}

/**
 * Will return the PropertyText object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPropertyText(OpenImmo $openImmo): PropertyText
{
    $parent = getFreeTexts($openImmo);
    $child = $parent->getPropertyText();

    if (! $child instanceof PropertyText) {
        $child = new PropertyText;
        $parent->setPropertyText($child);
    }

    return $child;
}

/**
 * Will return the FreeTexts object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFreeTexts(OpenImmo $openImmo): FreeTexts
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getFreeTexts();

    if (! $child instanceof FreeTexts) {
        $child = new FreeTexts;
        $parent->setFreeTexts($child);
    }

    return $child;
}

/**
 * Will return the Attachments object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAttachments(OpenImmo $openImmo): Attachments
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getAttachments();

    if (! $child instanceof Attachments) {
        $child = new Attachments;
        $parent->setAttachments($child);
    }

    return $child;
}

/**
 * Will return the MinRentalPeriod object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMinRentalPeriod(OpenImmo $openImmo): MinRentalPeriod
{
    $parent = getPropertyManagement($openImmo);
    $child = $parent->getMinRentalPeriod();

    if (! $child instanceof MinRentalPeriod) {
        $child = new MinRentalPeriod;
        $parent->setMinRentalPeriod($child);
    }

    return $child;
}

/**
 * Will return the MaxRentalPeriod object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMaxRentalPeriod(OpenImmo $openImmo): MaxRentalPeriod
{
    $parent = getPropertyManagement($openImmo);
    $child = $parent->getMaxRentalPeriod();

    if (! $child instanceof MaxRentalPeriod) {
        $child = new MaxRentalPeriod;
        $parent->setMaxRentalPeriod($child);
    }

    return $child;
}

/**
 * Will return the Gender object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGender(OpenImmo $openImmo): Gender
{
    $parent = getPropertyManagement($openImmo);
    $child = $parent->getGender();

    if (! $child instanceof Gender) {
        $child = new Gender;
        $parent->setGender($child);
    }

    return $child;
}

/**
 * Will return the PropertyManagement object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPropertyManagement(OpenImmo $openImmo): PropertyManagement
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getPropertyManagement();

    if (! $child instanceof PropertyManagement) {
        $child = new PropertyManagement;
        $parent->setPropertyManagement($child);
    }

    return $child;
}

/**
 * Will return the Action object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAction(OpenImmo $openImmo): Action
{
    $parent = getTechnicalManagement($openImmo);
    $child = $parent->getAction();

    if (! $child instanceof Action) {
        $child = new Action;
        $parent->setAction($child);
    }

    return $child;
}

/**
 * Will return the Master object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMaster(OpenImmo $openImmo): Master
{
    $parent = getTechnicalManagement($openImmo);
    $child = $parent->getMaster();

    if (! $child instanceof Master) {
        $child = new Master;
        $parent->setMaster($child);
    }

    return $child;
}

/**
 * Will return the TechnicalManagement object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getTechnicalManagement(OpenImmo $openImmo): TechnicalManagement
{
    $parent = getRealEstate($openImmo);
    $child = $parent->getTechnicalManagement();

    if (! $child instanceof TechnicalManagement) {
        $child = new TechnicalManagement;
        $parent->setTechnicalManagement($child);
    }

    return $child;
}

/**
 * Will return the RealEstate object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getRealEstate(OpenImmo $openImmo): RealEstate
{
    $parent = getProvider($openImmo);
    $children = $parent->getRealEstate();
    $child = data_get($children, '0');

    if (! $child instanceof RealEstate) {
        $child = new RealEstate;
        $children[] = $child;
        $parent->setRealEstate($children);
    }

    return $child;
}

/**
 * Will return the ImprintStructure object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getImprintStructure(OpenImmo $openImmo): ImprintStructure
{
    $parent = getProvider($openImmo);
    $child = $parent->getImprintStructure();

    if (! $child instanceof ImprintStructure) {
        $child = new ImprintStructure;
        $parent->setImprintStructure($child);
    }

    return $child;
}

/**
 * Will return the Provider object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getProvider(OpenImmo $openImmo): Provider
{
    $children = $openImmo->getProvider();
    $child = data_get($children, '0');

    if (! $child instanceof Provider) {
        $child = new Provider;
        $children[] = $child;
        $openImmo->setProvider($children);
    }

    return $child;
}
