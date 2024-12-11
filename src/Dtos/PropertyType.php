<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PropertyType
 * Objektarten
 *
 * @XmlRoot("objektart")
 */
class PropertyType
{
    /**
     * @XmlList(inline = true, entry = "zimmer")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Rooms>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("zimmer")
     */
    protected array $rooms = [];

    /**
     * @XmlList(inline = true, entry = "wohnung")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Apartment>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("wohnung")
     */
    protected array $apartment = [];

    /**
     * @XmlList(inline = true, entry = "haus")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\House>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("haus")
     */
    protected array $house = [];

    /**
     * @XmlList(inline = true, entry = "grundstueck")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Plot>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("grundstueck")
     */
    protected array $plot = [];

    /**
     * @XmlList(inline = true, entry = "buero_praxen")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\OfficePractices>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("buero_praxen")
     */
    protected array $officesPractices = [];

    /**
     * @XmlList(inline = true, entry = "einzelhandel")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Retail>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("einzelhandel")
     */
    protected array $retail = [];

    /**
     * @XmlList(inline = true, entry = "gastgewerbe")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Hospitality>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("gastgewerbe")
     */
    protected array $hospitality = [];

    /**
     * @XmlList(inline = true, entry = "hallen_lager_prod")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\HallsStorageProduction>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("hallen_lager_prod")
     */
    protected array $hallsStorageProduction = [];

    /**
     * @XmlList(inline = true, entry = "land_und_forstwirtschaft")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\AgricultureAndForestry>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("land_und_forstwirtschaft")
     */
    protected array $agricultureAndForestry = [];

    /**
     * @XmlList(inline = true, entry = "parken")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Parking>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("parken")
     */
    protected array $parking = [];

    /**
     * @XmlList(inline = true, entry = "sonstige")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Other>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("sonstige")
     */
    protected array $other = [];

    /**
     * @XmlList(inline = true, entry = "freizeitimmobilie_gewerblich")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\CommercialLeisureProperty>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("freizeitimmobilie_gewerblich")
     */
    protected array $commercialLeisureProperty = [];

    /**
     * @XmlList(inline = true, entry = "zinshaus_renditeobjekt")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\ApartmentBuildingInvestmentProperty>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("zinshaus_renditeobjekt")
     */
    protected array $apartmentBuildingInvestmentProperty = [];

    /**
     * @XmlList(inline = true, entry = "objektart_zusatz")
     *
     * @Type("array<string>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("objektart_zusatz")
     */
    protected array $propertyTypeAdditional = [];

    public function __construct(
        array $rooms = [],
        array $apartment = [],
        array $house = [],
        array $plot = [],
        array $officesPractices = [],
        array $retail = [],
        array $hospitality = [],
        array $hallsStorageProduction = [],
        array $agricultureAndForestry = [],
        array $parking = [],
        array $other = [],
        array $commercialLeisureProperty = [],
        array $apartmentBuildingInvestmentProperty = [],
        array $propertyTypeAdditional = [],
    ) {
        $this->rooms = $rooms;
        $this->apartment = $apartment;
        $this->house = $house;
        $this->plot = $plot;
        $this->officesPractices = $officesPractices;
        $this->retail = $retail;
        $this->hospitality = $hospitality;
        $this->hallsStorageProduction = $hallsStorageProduction;
        $this->agricultureAndForestry = $agricultureAndForestry;
        $this->parking = $parking;
        $this->other = $other;
        $this->commercialLeisureProperty = $commercialLeisureProperty;
        $this->apartmentBuildingInvestmentProperty = $apartmentBuildingInvestmentProperty;
        $this->propertyTypeAdditional = $propertyTypeAdditional;
    }

    /**
     * Returns array of array
     */
    public function getRooms(): array
    {
        return $this->rooms ?? [];
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
        return $this->apartment ?? [];
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
        return $this->house ?? [];
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
        return $this->plot ?? [];
    }

    public function setPlot(array $plot): PropertyType
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getOfficesPractices(): array
    {
        return $this->officesPractices ?? [];
    }

    public function setOfficesPractices(array $officesPractices): PropertyType
    {
        $this->officesPractices = $officesPractices;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getRetail(): array
    {
        return $this->retail ?? [];
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
        return $this->hospitality ?? [];
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
        return $this->hallsStorageProduction ?? [];
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
        return $this->agricultureAndForestry ?? [];
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
        return $this->parking ?? [];
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
        return $this->other ?? [];
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
        return $this->commercialLeisureProperty ?? [];
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
        return $this->apartmentBuildingInvestmentProperty ?? [];
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
        return $this->propertyTypeAdditional ?? [];
    }

    public function setPropertyTypeAdditional(array $propertyTypeAdditional): PropertyType
    {
        $this->propertyTypeAdditional = $propertyTypeAdditional;

        return $this;
    }
}
