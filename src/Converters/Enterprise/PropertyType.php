<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Converters\Enterprise;

use Katalam\OpenImmo\Dtos\AgricultureAndForestry;
use Katalam\OpenImmo\Dtos\Apartment;
use Katalam\OpenImmo\Dtos\ApartmentBuildingInvestmentProperty;
use Katalam\OpenImmo\Dtos\CommercialLeisureProperty;
use Katalam\OpenImmo\Dtos\HallsStorageProduction;
use Katalam\OpenImmo\Dtos\Hospitality;
use Katalam\OpenImmo\Dtos\House;
use Katalam\OpenImmo\Dtos\OfficePractices;
use Katalam\OpenImmo\Dtos\Parking;
use Katalam\OpenImmo\Dtos\Plot;
use Katalam\OpenImmo\Dtos\Retail;

trait PropertyType
{
    public function convertPropertyType(): array
    {
        $type = null;
        $category = null;

        $propertyType = getPropertyType($this->openImmo);

        if ($propertyType->getRooms()) {
            $type = 'zimmer';
            $category = 'zimmer';
        } elseif ($apartments = $propertyType->getApartment()) {
            $type = 'wohnung';
            /** @var Apartment $apartment */
            $apartment = data_get($apartments, 0);
            $category = $apartment?->getApartmentType();
        } elseif ($houses = $propertyType->getHouse()) {
            $type = 'haus';
            /** @var House $house */
            $house = data_get($houses, 0);
            $category = $house?->getHouseType();
        } elseif ($plots = $propertyType->getPlot()) {
            $type = 'grundstueck';
            /** @var Plot $plot */
            $plot = data_get($plots, 0);
            $category = $plot?->getPlotType();
        } elseif ($officePractices = $propertyType->getOfficesPractices()) {
            $type = 'buero_praxen';
            /** @var OfficePractices $officePractice */
            $officePractice = data_get($officePractices, 0);
            $category = $officePractice?->getOfficeType();
        } elseif ($retails = $propertyType->getRetail()) {
            $type = 'einzelhandel';
            /** @var Retail $retail */
            $retail = data_get($retails, 0);
            $category = $retail?->getTradeType();
        } elseif ($hospitalities = $propertyType->getHospitality()) {
            $type = 'gastgewerbe';
            /** @var Hospitality $hospitality */
            $hospitality = data_get($hospitalities, 0);
            $category = $hospitality?->getHospitalityType();
        } elseif ($hallsStorageProduction = $propertyType->getHallsStorageProduction()) {
            $type = 'hallen_lager_prod';
            /** @var HallsStorageProduction $hallStorageProduction */
            $hallStorageProduction = data_get($hallsStorageProduction, 0);
            $category = $hallStorageProduction?->getHallType();
        } elseif ($agricultureAndForestrys = $propertyType->getAgricultureAndForestry()) {
            $type = 'land_und_forstwirtschaft';
            /** @var AgricultureAndForestry $agricultureAndForestry */
            $agricultureAndForestry = data_get($agricultureAndForestrys, 0);
            $category = $agricultureAndForestry?->getCountryType();
        } elseif ($parkings = $propertyType->getParking()) {
            $type = 'parken';
            /** @var Parking $parking */
            $parking = data_get($parkings, 0);
            $category = $parking?->getParkingType();
        } elseif ($commercialLeisurePropertys = $propertyType->getCommercialLeisureProperty()) {
            $type = 'freizeitimmobilie_gewerblich';
            /** @var CommercialLeisureProperty $commercialLeisureProperty */
            $commercialLeisureProperty = data_get($commercialLeisurePropertys, 0);
            $category = $commercialLeisureProperty?->getLeisureType();
        } elseif ($apartmentBuildingInvestmentPropertys = $propertyType->getApartmentBuildingInvestmentProperty()) {
            $type = 'zinshaus_renditeobjekt';
            /** @var ApartmentBuildingInvestmentProperty $apartmentBuildingInvestmentProperty */
            $apartmentBuildingInvestmentProperty = data_get($apartmentBuildingInvestmentPropertys, 0);
            $category = $apartmentBuildingInvestmentProperty?->getInterestType();
        }

        return [$type, $category];
    }
}
