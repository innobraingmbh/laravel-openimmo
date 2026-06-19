<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 */
#[Description('Geographic and address-based information of the property')]
#[XmlRoot(name: 'geo')]
class Geo
{
    public function __construct(
        #[Type('string')]
        #[Description('Postal code of the property')]
        #[SerializedName('plz')]
        protected ?string $postalCode = null,
        #[Type('string')]
        #[Description('City or town of the property')]
        #[SerializedName('ort')]
        protected ?string $city = null,
        #[Type(GeoCoordinates::class)]
        #[Description('GPS coordinates of the property')]
        #[SerializedName('geokoordinaten')]
        protected ?GeoCoordinates $geoCoordinates = null,
        #[Type('string')]
        #[Description('Street of the property')]
        #[SerializedName('strasse')]
        protected ?string $street = null,
        #[Type('string')]
        #[Description('House number of the property')]
        #[SerializedName('hausnummer')]
        protected ?string $houseNumber = null,
        #[Type('string')]
        #[Description('Federal state of the property')]
        #[SerializedName('bundesland')]
        protected ?string $state = null,
        #[Type(Country::class)]
        #[Description('Country of the property')]
        #[SerializedName('land')]
        protected ?Country $country = null,
        #[Type('string')]
        #[Description('Official municipality code (AGS)')]
        #[SerializedName('gemeindecode')]
        protected ?string $municipalityCode = null,
        #[Type('string')]
        #[Description('Land parcel corridor of the plot')]
        #[SerializedName('flur')]
        protected ?string $corridor = null,
        #[Type('string')]
        #[Description('Parcel number of the plot')]
        #[SerializedName('flurstueck')]
        protected ?string $parcel = null,
        #[Type('string')]
        #[Description('Cadastral district of the plot')]
        #[SerializedName('gemarkung')]
        protected ?string $cadastralDistrict = null,
        /**
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[Description('Floor level of the unit within the building')]
        #[SerializedName('etage')]
        protected ?int $floor = null,
        /**
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[Description('Total number of floors of the building')]
        #[SerializedName('anzahl_etagen')]
        protected ?int $numberOfFloors = null,
        #[Type(LocationInBuilding::class)]
        #[Description('Location of the unit within the building')]
        #[SerializedName('lage_im_bau')]
        protected ?LocationInBuilding $locationInBuilding = null,
        #[Type('string')]
        #[Description('Apartment number within the building')]
        #[SerializedName('wohnungsnr')]
        protected ?string $apartmentNumber = null,
        #[Type(LocationArea::class)]
        #[Description('Location area of the property')]
        #[SerializedName('lage_gebiet')]
        protected ?LocationArea $areaLocation = null,
        #[Type('string')]
        #[Description('Regional addition to the location (e.g. district)')]
        #[SerializedName('regionaler_zusatz')]
        protected ?string $regionalAddition = null,
        #[Type('bool')]
        #[Description('Macro map (overview map) available')]
        #[SerializedName('karten_makro')]
        protected ?bool $macroMap = null,
        #[Type('bool')]
        #[Description('Micro map (detail map) available')]
        #[SerializedName('karten_mikro')]
        protected ?bool $microMap = null,
        #[Type('bool')]
        #[Description('Virtual tour of the property available')]
        #[SerializedName('virtuelletour')]
        protected ?bool $virtualTour = null,
        #[Type('bool')]
        #[Description('Aerial photos of the property available')]
        #[SerializedName('luftbildern')]
        protected ?bool $aerialPhotos = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[Description('User-defined simple free field')]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[Description('User-defined free field with arbitrary content')]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[Description('User-defined extension')]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): Geo
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Geo
    {
        $this->city = $city;

        return $this;
    }

    public function getGeoCoordinates(): ?GeoCoordinates
    {
        return $this->geoCoordinates;
    }

    public function setGeoCoordinates(?GeoCoordinates $geoCoordinates): Geo
    {
        $this->geoCoordinates = $geoCoordinates;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): Geo
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): Geo
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): Geo
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): Geo
    {
        $this->country = $country;

        return $this;
    }

    public function getMunicipalityCode(): ?string
    {
        return $this->municipalityCode;
    }

    public function setMunicipalityCode(?string $municipalityCode): Geo
    {
        $this->municipalityCode = $municipalityCode;

        return $this;
    }

    public function getCorridor(): ?string
    {
        return $this->corridor;
    }

    public function setCorridor(?string $corridor): Geo
    {
        $this->corridor = $corridor;

        return $this;
    }

    public function getParcel(): ?string
    {
        return $this->parcel;
    }

    public function setParcel(?string $parcel): Geo
    {
        $this->parcel = $parcel;

        return $this;
    }

    public function getCadastralDistrict(): ?string
    {
        return $this->cadastralDistrict;
    }

    public function setCadastralDistrict(?string $cadastralDistrict): Geo
    {
        $this->cadastralDistrict = $cadastralDistrict;

        return $this;
    }

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(?int $floor): Geo
    {
        $this->floor = $floor;

        return $this;
    }

    public function getNumberOfFloors(): ?int
    {
        return $this->numberOfFloors;
    }

    public function setNumberOfFloors(?int $numberOfFloors): Geo
    {
        $this->numberOfFloors = $numberOfFloors;

        return $this;
    }

    public function getLocationInBuilding(): ?LocationInBuilding
    {
        return $this->locationInBuilding;
    }

    public function setLocationInBuilding(?LocationInBuilding $locationInBuilding): Geo
    {
        $this->locationInBuilding = $locationInBuilding;

        return $this;
    }

    public function getApartmentNumber(): ?string
    {
        return $this->apartmentNumber;
    }

    public function setApartmentNumber(?string $apartmentNumber): Geo
    {
        $this->apartmentNumber = $apartmentNumber;

        return $this;
    }

    public function getAreaLocation(): ?LocationArea
    {
        return $this->areaLocation;
    }

    public function setAreaLocation(?LocationArea $areaLocation): Geo
    {
        $this->areaLocation = $areaLocation;

        return $this;
    }

    public function getRegionalAddition(): ?string
    {
        return $this->regionalAddition;
    }

    public function setRegionalAddition(?string $regionalAddition): Geo
    {
        $this->regionalAddition = $regionalAddition;

        return $this;
    }

    public function getMacroMap(): ?bool
    {
        return $this->macroMap;
    }

    public function setMacroMap(?bool $macroMap): Geo
    {
        $this->macroMap = $macroMap;

        return $this;
    }

    public function getMicroMap(): ?bool
    {
        return $this->microMap;
    }

    public function setMicroMap(?bool $microMap): Geo
    {
        $this->microMap = $microMap;

        return $this;
    }

    public function getVirtualTour(): ?bool
    {
        return $this->virtualTour;
    }

    public function setVirtualTour(?bool $virtualTour): Geo
    {
        $this->virtualTour = $virtualTour;

        return $this;
    }

    public function getAerialPhotos(): ?bool
    {
        return $this->aerialPhotos;
    }

    public function setAerialPhotos(?bool $aerialPhotos): Geo
    {
        $this->aerialPhotos = $aerialPhotos;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Geo
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Geo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Geo
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
