<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 *
 * @description Geographic and address-based information of the property
 */
#[XmlRoot(name: 'geo')]
class Geo
{
    public function __construct(
        /** @description Postal code of the property */
        #[Type('string')]
        #[SerializedName('plz')]
        protected ?string $postalCode = null,
        /** @description City or town of the property */
        #[Type('string')]
        #[SerializedName('ort')]
        protected ?string $city = null,
        /** @description GPS coordinates of the property */
        #[Type(GeoCoordinates::class)]
        #[SerializedName('geokoordinaten')]
        protected ?GeoCoordinates $geoCoordinates = null,
        /** @description Street of the property */
        #[Type('string')]
        #[SerializedName('strasse')]
        protected ?string $street = null,
        /** @description House number of the property */
        #[Type('string')]
        #[SerializedName('hausnummer')]
        protected ?string $houseNumber = null,
        /** @description Federal state of the property */
        #[Type('string')]
        #[SerializedName('bundesland')]
        protected ?string $state = null,
        /** @description Country of the property */
        #[Type(Country::class)]
        #[SerializedName('land')]
        protected ?Country $country = null,
        /** @description Official municipality code (AGS) */
        #[Type('string')]
        #[SerializedName('gemeindecode')]
        protected ?string $municipalityCode = null,
        /** @description Land parcel corridor of the plot */
        #[Type('string')]
        #[SerializedName('flur')]
        protected ?string $corridor = null,
        /** @description Parcel number of the plot */
        #[Type('string')]
        #[SerializedName('flurstueck')]
        protected ?string $parcel = null,
        /** @description Cadastral district of the plot */
        #[Type('string')]
        #[SerializedName('gemarkung')]
        protected ?string $cadastralDistrict = null,
        /**
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         *
         * @description Floor level of the unit within the building
         */
        #[Type('int')]
        #[SerializedName('etage')]
        protected ?int $floor = null,
        /**
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         *
         * @description Total number of floors of the building
         */
        #[Type('int')]
        #[SerializedName('anzahl_etagen')]
        protected ?int $numberOfFloors = null,
        /** @description Location of the unit within the building */
        #[Type(LocationInBuilding::class)]
        #[SerializedName('lage_im_bau')]
        protected ?LocationInBuilding $locationInBuilding = null,
        /** @description Apartment number within the building */
        #[Type('string')]
        #[SerializedName('wohnungsnr')]
        protected ?string $apartmentNumber = null,
        /** @description Location area of the property */
        #[Type(LocationArea::class)]
        #[SerializedName('lage_gebiet')]
        protected ?LocationArea $areaLocation = null,
        /** @description Regional addition to the location (e.g. district) */
        #[Type('string')]
        #[SerializedName('regionaler_zusatz')]
        protected ?string $regionalAddition = null,
        /** @description Macro map (overview map) available */
        #[Type('bool')]
        #[SerializedName('karten_makro')]
        protected ?bool $macroMap = null,
        /** @description Micro map (detail map) available */
        #[Type('bool')]
        #[SerializedName('karten_mikro')]
        protected ?bool $microMap = null,
        /** @description Virtual tour of the property available */
        #[Type('bool')]
        #[SerializedName('virtuelletour')]
        protected ?bool $virtualTour = null,
        /** @description Aerial photos of the property available */
        #[Type('bool')]
        #[SerializedName('luftbildern')]
        protected ?bool $aerialPhotos = null,
        /** @description User-defined simple free field */
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        /** @description User-defined free field with arbitrary content */
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        /** @description User-defined extension */
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
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
