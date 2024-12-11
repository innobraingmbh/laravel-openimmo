<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 *
 * @XmlRoot("geo")
 */
class Geo
{
    /**
     * @Type("string")
     *
     * @SerializedName("plz")
     */
    protected ?string $postalCode = null;

    /**
     * @Type("string")
     *
     * @SerializedName("ort")
     */
    protected ?string $city = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\GeoCoordinates")
     *
     * @SerializedName("geokoordinaten")
     */
    protected ?GeoCoordinates $geoCoordinates = null;

    /**
     * @Type("string")
     *
     * @SerializedName("strasse")
     */
    protected ?string $street = null;

    /**
     * @Type("string")
     *
     * @SerializedName("hausnummer")
     */
    protected ?string $houseNumber = null;

    /**
     * @Type("string")
     *
     * @SerializedName("bundesland")
     */
    protected ?string $state = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\Country")
     *
     * @SerializedName("land")
     */
    protected ?Country $country = null;

    /**
     * @Type("string")
     *
     * @SerializedName("gemeindecode")
     */
    protected ?string $municipalityCode = null;

    /**
     * @Type("string")
     *
     * @SerializedName("flur")
     */
    protected ?string $corridor = null;

    /**
     * @Type("string")
     *
     * @SerializedName("flurstueck")
     */
    protected ?string $parcel = null;

    /**
     * @Type("string")
     *
     * @SerializedName("gemarkung")
     */
    protected ?string $cadastralDistrict = null;

    /**
     * @Type("int")
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     *
     * @SerializedName("etage")
     */
    protected ?int $floor = null;

    /**
     * @Type("int")
     * Minimum value (inclusive): -2147483648
     * Maximum value (inclusive): 2147483647
     *
     * @SerializedName("anzahl_etagen")
     */
    protected ?int $numberOfFloors = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\LocationInBuilding")
     *
     * @SerializedName("lage_im_bau")
     */
    protected ?LocationInBuilding $locationInBuilding = null;

    /**
     * @Type("string")
     *
     * @SerializedName("wohnungsnr")
     */
    protected ?string $apartmentNumber = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\LocationArea")
     *
     * @SerializedName("lage_gebiet")
     */
    protected ?LocationArea $areaLocation = null;

    /**
     * @Type("string")
     *
     * @SerializedName("regionaler_zusatz")
     */
    protected ?string $regionalAddition = null;

    /**
     * @Type("bool")
     *
     * @SerializedName("karten_makro")
     */
    protected ?bool $macroMap = null;

    /**
     * @Type("bool")
     *
     * @SerializedName("karten_mikro")
     */
    protected ?bool $microMap = null;

    /**
     * @Type("bool")
     *
     * @SerializedName("virtuelletour")
     */
    protected ?bool $virtualTour = null;

    /**
     * @Type("bool")
     *
     * @SerializedName("luftbildern")
     */
    protected ?bool $aerialPhotos = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedSimplefield>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_simplefield")
     */
    protected array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedAnyfield>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_anyfield")
     */
    protected array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedExtend>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_extend")
     */
    protected array $userDefinedExtend = [];

    public function __construct(
        ?string $postalCode = null,
        ?string $city = null,
        ?GeoCoordinates $geoCoordinates = null,
        ?string $street = null,
        ?string $houseNumber = null,
        ?string $state = null,
        ?Country $country = null,
        ?string $municipalityCode = null,
        ?string $corridor = null,
        ?string $parcel = null,
        ?string $cadastralDistrict = null,
        ?int $floor = null,
        ?int $numberOfFloors = null,
        ?LocationInBuilding $locationInBuilding = null,
        ?string $apartmentNumber = null,
        ?LocationArea $areaLocation = null,
        ?string $regionalAddition = null,
        ?bool $macroMap = null,
        ?bool $microMap = null,
        ?bool $virtualTour = null,
        ?bool $aerialPhotos = null,
        array $userDefinedSimplefield = [],
        array $userDefinedAnyfield = [],
        array $userDefinedExtend = [],
    ) {
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->geoCoordinates = $geoCoordinates;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->state = $state;
        $this->country = $country;
        $this->municipalityCode = $municipalityCode;
        $this->corridor = $corridor;
        $this->parcel = $parcel;
        $this->cadastralDistrict = $cadastralDistrict;
        $this->floor = $floor;
        $this->numberOfFloors = $numberOfFloors;
        $this->locationInBuilding = $locationInBuilding;
        $this->apartmentNumber = $apartmentNumber;
        $this->areaLocation = $areaLocation;
        $this->regionalAddition = $regionalAddition;
        $this->macroMap = $macroMap;
        $this->microMap = $microMap;
        $this->virtualTour = $virtualTour;
        $this->aerialPhotos = $aerialPhotos;
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        $this->userDefinedExtend = $userDefinedExtend;
    }

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
        return $this->userDefinedSimplefield ?? [];
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
        return $this->userDefinedAnyfield ?? [];
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
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Geo
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
