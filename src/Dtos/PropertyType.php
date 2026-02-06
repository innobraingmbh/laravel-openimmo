<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PropertyType
 * Objektarten
 */
#[XmlRoot(name: 'objektart')]
class PropertyType
{
    public function __construct(
        #[XmlList(entry: 'zimmer', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Rooms>")]
        #[SkipWhenEmpty]
        #[SerializedName('zimmer')]
        protected array $rooms = [],
        #[XmlList(entry: 'wohnung', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Apartment>")]
        #[SkipWhenEmpty]
        #[SerializedName('wohnung')]
        protected array $apartment = [],
        #[XmlList(entry: 'haus', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\House>")]
        #[SkipWhenEmpty]
        #[SerializedName('haus')]
        protected array $house = [],
        #[XmlList(entry: 'grundstueck', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Plot>")]
        #[SkipWhenEmpty]
        #[SerializedName('grundstueck')]
        protected array $plot = [],
        #[XmlList(entry: 'buero_praxen', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\OfficePractices>")]
        #[SkipWhenEmpty]
        #[SerializedName('buero_praxen')]
        protected array $officePractices = [],
        #[XmlList(entry: 'einzelhandel', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Retail>")]
        #[SkipWhenEmpty]
        #[SerializedName('einzelhandel')]
        protected array $retail = [],
        #[XmlList(entry: 'gastgewerbe', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Hospitality>")]
        #[SkipWhenEmpty]
        #[SerializedName('gastgewerbe')]
        protected array $hospitality = [],
        #[XmlList(entry: 'hallen_lager_prod', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\HallsStorageProduction>")]
        #[SkipWhenEmpty]
        #[SerializedName('hallen_lager_prod')]
        protected array $hallsStorageProduction = [],
        #[XmlList(entry: 'land_und_forstwirtschaft', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\AgricultureAndForestry>")]
        #[SkipWhenEmpty]
        #[SerializedName('land_und_forstwirtschaft')]
        protected array $agricultureAndForestry = [],
        #[XmlList(entry: 'parken', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Parking>")]
        #[SkipWhenEmpty]
        #[SerializedName('parken')]
        protected array $parking = [],
        #[XmlList(entry: 'sonstige', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\Other>")]
        #[SkipWhenEmpty]
        #[SerializedName('sonstige')]
        protected array $other = [],
        #[XmlList(entry: 'freizeitimmobilie_gewerblich', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\CommercialLeisureProperty>")]
        #[SkipWhenEmpty]
        #[SerializedName('freizeitimmobilie_gewerblich')]
        protected array $commercialLeisureProperty = [],
        #[XmlList(entry: 'zinshaus_renditeobjekt', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\ApartmentBuildingInvestmentProperty>")]
        #[SkipWhenEmpty]
        #[SerializedName('zinshaus_renditeobjekt')]
        protected array $apartmentBuildingInvestmentProperty = [],
        #[XmlList(entry: 'objektart_zusatz', inline: true)]
        #[Type('array<string>')]
        #[SkipWhenEmpty]
        #[SerializedName('objektart_zusatz')]
        protected array $propertyTypeAdditional = []
    ) {}

    /**
     * Returns array of array
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    public function setRooms(array $rooms): PropertyType
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getApartment(): array
    {
        return $this->apartment;
    }

    public function setApartment(array $apartment): PropertyType
    {
        $this->apartment = $apartment;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHouse(): array
    {
        return $this->house;
    }

    public function setHouse(array $house): PropertyType
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getPlot(): array
    {
        return $this->plot;
    }

    public function setPlot(array $plot): PropertyType
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getOfficePractices(): array
    {
        return $this->officePractices;
    }

    public function setOfficePractices(array $officePractices): PropertyType
    {
        $this->officePractices = $officePractices;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getRetail(): array
    {
        return $this->retail;
    }

    public function setRetail(array $retail): PropertyType
    {
        $this->retail = $retail;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHospitality(): array
    {
        return $this->hospitality;
    }

    public function setHospitality(array $hospitality): PropertyType
    {
        $this->hospitality = $hospitality;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHallsStorageProduction(): array
    {
        return $this->hallsStorageProduction;
    }

    public function setHallsStorageProduction(array $hallsStorageProduction): PropertyType
    {
        $this->hallsStorageProduction = $hallsStorageProduction;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getAgricultureAndForestry(): array
    {
        return $this->agricultureAndForestry;
    }

    public function setAgricultureAndForestry(array $agricultureAndForestry): PropertyType
    {
        $this->agricultureAndForestry = $agricultureAndForestry;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getParking(): array
    {
        return $this->parking;
    }

    public function setParking(array $parking): PropertyType
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getOther(): array
    {
        return $this->other;
    }

    public function setOther(array $other): PropertyType
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getCommercialLeisureProperty(): array
    {
        return $this->commercialLeisureProperty;
    }

    public function setCommercialLeisureProperty(array $commercialLeisureProperty): PropertyType
    {
        $this->commercialLeisureProperty = $commercialLeisureProperty;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getApartmentBuildingInvestmentProperty(): array
    {
        return $this->apartmentBuildingInvestmentProperty;
    }

    public function setApartmentBuildingInvestmentProperty(array $apartmentBuildingInvestmentProperty): PropertyType
    {
        $this->apartmentBuildingInvestmentProperty = $apartmentBuildingInvestmentProperty;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getPropertyTypeAdditional(): array
    {
        return $this->propertyTypeAdditional;
    }

    public function setPropertyTypeAdditional(array $propertyTypeAdditional): PropertyType
    {
        $this->propertyTypeAdditional = $propertyTypeAdditional;

        return $this;
    }
}
