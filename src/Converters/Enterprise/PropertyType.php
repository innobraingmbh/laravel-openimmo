<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\AgricultureAndForestry;
use Innobrain\OpenImmo\Dtos\Apartment;
use Innobrain\OpenImmo\Dtos\ApartmentBuildingInvestmentProperty;
use Innobrain\OpenImmo\Dtos\CommercialLeisureProperty;
use Innobrain\OpenImmo\Dtos\HallsStorageProduction;
use Innobrain\OpenImmo\Dtos\Hospitality;
use Innobrain\OpenImmo\Dtos\House;
use Innobrain\OpenImmo\Dtos\OfficePractices;
use Innobrain\OpenImmo\Dtos\Parking;
use Innobrain\OpenImmo\Dtos\Plot;
use Innobrain\OpenImmo\Dtos\Retail;

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
            /** @var Apartment|null $apartment */
            $apartment = data_get($apartments, 0);
            $category = $apartment?->getApartmentType();
        } elseif ($houses = $propertyType->getHouse()) {
            $type = 'haus';
            /** @var House|null $house */
            $house = data_get($houses, 0);
            $category = $house?->getHouseType();
        } elseif ($plots = $propertyType->getPlot()) {
            $type = 'grundstueck';
            /** @var Plot|null $plot */
            $plot = data_get($plots, 0);
            $category = $plot?->getPlotType();
        } elseif ($officePractices = $propertyType->getOfficePractices()) {
            $type = 'buero_praxen';
            /** @var OfficePractices|null $officePractice */
            $officePractice = data_get($officePractices, 0);
            $category = $officePractice?->getOfficeType();
        } elseif ($retails = $propertyType->getRetail()) {
            $type = 'einzelhandel';
            /** @var Retail|null $retail */
            $retail = data_get($retails, 0);
            $category = $retail?->getTradeType();
        } elseif ($hospitalities = $propertyType->getHospitality()) {
            $type = 'gastgewerbe';
            /** @var Hospitality|null $hospitality */
            $hospitality = data_get($hospitalities, 0);
            $category = $hospitality?->getHospitalityType();
        } elseif ($hallsStorageProduction = $propertyType->getHallsStorageProduction()) {
            $type = 'hallen_lager_prod';
            /** @var HallsStorageProduction|null $hallStorageProduction */
            $hallStorageProduction = data_get($hallsStorageProduction, 0);
            $category = $hallStorageProduction?->getHallType();
        } elseif ($agricultureAndForestrys = $propertyType->getAgricultureAndForestry()) {
            $type = 'land_und_forstwirtschaft';
            /** @var AgricultureAndForestry|null $agricultureAndForestry */
            $agricultureAndForestry = data_get($agricultureAndForestrys, 0);
            $category = $agricultureAndForestry?->getCountryType();
        } elseif ($parkings = $propertyType->getParking()) {
            $type = 'parken';
            /** @var Parking|null $parking */
            $parking = data_get($parkings, 0);
            $category = $parking?->getParkingType();
        } elseif ($commercialLeisurePropertys = $propertyType->getCommercialLeisureProperty()) {
            $type = 'freizeitimmobilie_gewerblich';
            /** @var CommercialLeisureProperty|null $commercialLeisureProperty */
            $commercialLeisureProperty = data_get($commercialLeisurePropertys, 0);
            $category = $commercialLeisureProperty?->getLeisureType();
        } elseif ($apartmentBuildingInvestmentPropertys = $propertyType->getApartmentBuildingInvestmentProperty()) {
            $type = 'zinshaus_renditeobjekt';
            /** @var ApartmentBuildingInvestmentProperty|null $apartmentBuildingInvestmentProperty */
            $apartmentBuildingInvestmentProperty = data_get($apartmentBuildingInvestmentPropertys, 0);
            $category = $apartmentBuildingInvestmentProperty?->getInterestType();
        }

        return [$type, strtolower((string) $category)];
    }
}
