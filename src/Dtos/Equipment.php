<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Equipment
 *
 * @XmlRoot("ausstattung")
 */
class Equipment
{
    public const EQUIPMENT_CATEGORY_STANDARD = 'STANDARD';

    public const EQUIPMENT_CATEGORY_UPSCALE = 'GEHOBEN';

    public const EQUIPMENT_CATEGORY_LUXURY = 'LUXUS';

    public function __construct(
        /**
         * @Type("string")
         *
         * @see EQUIPMENT_CATEGORY_* constants
         *
         * @SerializedName("ausstatt_kategorie")
         */
        protected string $equipmentCategory = '',
        /**
         * @Type("bool")
         *
         * @SerializedName("wg_geeignet")
         */
        protected ?bool $suitableForSharedFlat = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("raeume_veraenderbar")
         */
        protected ?bool $roomsModifiable = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Bathroom")
         *
         * @SerializedName("bad")
         */
        protected ?Bathroom $bathroom = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Kitchen")
         *
         * @SerializedName("kueche")
         */
        protected ?Kitchen $kitchen = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Floor")
         *
         * @SerializedName("boden")
         */
        protected ?Floor $floor = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("kamin")
         */
        protected ?bool $fireplace = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\HeatingType")
         *
         * @SerializedName("heizungsart")
         */
        protected ?HeatingType $heatingType = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\HeatingSystem")
         *
         * @SerializedName("befeuerung")
         */
        protected ?HeatingSystem $heating = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("klimatisiert")
         */
        protected ?bool $airConditioned = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Elevator")
         *
         * @SerializedName("fahrstuhl")
         */
        protected ?Elevator $elevator = null,
        /**
         * @XmlList(inline = true, entry = "stellplatzart")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\ParkingSpaceType>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("stellplatzart")
         */
        protected array $parkingSpaceType = [],
        /**
         * @Type("bool")
         *
         * @SerializedName("gartennutzung")
         */
        protected ?bool $gardenUse = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\BalconyTerraceOrientation")
         *
         * @SerializedName("ausricht_balkon_terrasse")
         */
        protected ?BalconyTerraceOrientation $balconyTerraceOrientation = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Furnished")
         *
         * @SerializedName("moebliert")
         */
        protected ?Furnished $furnished = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("rollstuhlgerecht")
         */
        protected ?bool $wheelchairAccessible = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("kabel_sat_tv")
         */
        protected ?bool $cableSatelliteTV = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("dvbt")
         */
        protected ?bool $digitalTerrestrialTV = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("barrierefrei")
         */
        protected ?bool $barrierFree = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("sauna")
         */
        protected ?bool $sauna = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("swimmingpool")
         */
        protected ?bool $swimmingPool = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("wasch_trockenraum")
         */
        protected ?bool $laundryDryingRoom = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("wintergarten")
         */
        protected ?bool $winterGarden = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("dv_verkabelung")
         */
        protected ?bool $dataProcessingCabling = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("rampe")
         */
        protected ?bool $ramp = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("hebebuehne")
         */
        protected ?bool $liftPlatform = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("kran")
         */
        protected ?bool $crane = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("gastterrasse")
         */
        protected ?bool $guestTerrace = null,
        /**
         * @Type("string")
         *
         * @SerializedName("stromanschlusswert")
         */
        protected ?string $electricityConnectionValue = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("kantine_cafeteria")
         */
        protected ?bool $canteenCafeteria = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("teekueche")
         */
        protected ?bool $kitchenette = null,
        /**
         * @Type("float")
         *
         * @SerializedName("hallenhoehe")
         */
        protected ?float $hallHeight = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\AttachedGastronomy")
         *
         * @SerializedName("angeschl_gastronomie")
         */
        protected ?AttachedGastronomy $attachedGastronomy = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("brauereibindung")
         */
        protected ?bool $breweryTie = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("sporteinrichtungen")
         */
        protected ?bool $sportsFacilities = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("wellnessbereich")
         */
        protected ?bool $wellnessArea = null,
        /**
         * @XmlList(inline = true, entry = "serviceleistungen")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\Services>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("serviceleistungen")
         */
        protected array $services = [],
        /**
         * @Type("bool")
         *
         * @SerializedName("telefon_ferienimmobilie")
         */
        protected ?bool $holidayPropertyPhone = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\BroadbandAccess")
         *
         * @SerializedName("breitband_zugang")
         */
        protected ?BroadbandAccess $broadbandAccess = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("umts_empfang")
         */
        protected ?bool $umtsReception = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\SecurityTechnology")
         *
         * @SerializedName("sicherheitstechnik")
         */
        protected ?SecurityTechnology $securityTechnology = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Basement")
         *
         * @SerializedName("unterkellert")
         */
        protected ?Basement $basement = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("abstellraum")
         */
        protected ?bool $storageRoom = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("fahrradraum")
         */
        protected ?bool $bicycleRoom = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("rolladen")
         */
        protected ?bool $shutters = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\RoofShape")
         *
         * @SerializedName("dachform")
         */
        protected ?RoofShape $roofShape = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ConstructionMethod")
         *
         * @SerializedName("bauweise")
         */
        protected ?ConstructionMethod $constructionMethod = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\DevelopmentStage")
         *
         * @SerializedName("ausbaustufe")
         */
        protected ?DevelopmentStage $developmentStage = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\EnergyType")
         *
         * @SerializedName("energietyp")
         */
        protected ?EnergyType $energyType = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("bibliothek")
         */
        protected ?bool $library = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("dachboden")
         */
        protected ?bool $attic = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("gaestewc")
         */
        protected ?bool $guestToilet = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("kabelkanaele")
         */
        protected ?bool $cableChannels = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("seniorengerecht")
         */
        protected ?bool $seniorFriendly = null,
        /**
         * @XmlList(inline = true, entry = "user_defined_simplefield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_simplefield")
         */
        protected array $userDefinedSimplefield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_anyfield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_anyfield")
         */
        protected array $userDefinedAnyfield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_extend")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_extend")
         */
        protected array $userDefinedExtend = []
    ) {}

    public function getEquipmentCategory(): ?string
    {
        return $this->equipmentCategory;
    }

    public function setEquipmentCategory(?string $equipmentCategory): Equipment
    {
        $this->equipmentCategory = $equipmentCategory;

        return $this;
    }

    public function getSuitableForSharedFlat(): ?bool
    {
        return $this->suitableForSharedFlat;
    }

    public function setSuitableForSharedFlat(?bool $suitableForSharedFlat): Equipment
    {
        $this->suitableForSharedFlat = $suitableForSharedFlat;

        return $this;
    }

    public function getRoomsModifiable(): ?bool
    {
        return $this->roomsModifiable;
    }

    public function setRoomsModifiable(?bool $roomsModifiable): Equipment
    {
        $this->roomsModifiable = $roomsModifiable;

        return $this;
    }

    public function getBathroom(): ?Bathroom
    {
        return $this->bathroom;
    }

    public function setBathroom(?Bathroom $bathroom): Equipment
    {
        $this->bathroom = $bathroom;

        return $this;
    }

    public function getKitchen(): ?Kitchen
    {
        return $this->kitchen;
    }

    public function setKitchen(?Kitchen $kitchen): Equipment
    {
        $this->kitchen = $kitchen;

        return $this;
    }

    public function getFloor(): ?Floor
    {
        return $this->floor;
    }

    public function setFloor(?Floor $floor): Equipment
    {
        $this->floor = $floor;

        return $this;
    }

    public function getFireplace(): ?bool
    {
        return $this->fireplace;
    }

    public function setFireplace(?bool $fireplace): Equipment
    {
        $this->fireplace = $fireplace;

        return $this;
    }

    public function getHeatingType(): ?HeatingType
    {
        return $this->heatingType;
    }

    public function setHeatingType(?HeatingType $heatingType): Equipment
    {
        $this->heatingType = $heatingType;

        return $this;
    }

    public function getHeating(): ?HeatingSystem
    {
        return $this->heating;
    }

    public function setHeating(?HeatingSystem $heating): Equipment
    {
        $this->heating = $heating;

        return $this;
    }

    public function getAirConditioned(): ?bool
    {
        return $this->airConditioned;
    }

    public function setAirConditioned(?bool $airConditioned): Equipment
    {
        $this->airConditioned = $airConditioned;

        return $this;
    }

    public function getElevator(): ?Elevator
    {
        return $this->elevator;
    }

    public function setElevator(?Elevator $elevator): Equipment
    {
        $this->elevator = $elevator;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getParkingSpaceType(): array
    {
        return $this->parkingSpaceType ?? [];
    }

    public function setParkingSpaceType(array $parkingSpaceType): Equipment
    {
        $this->parkingSpaceType = $parkingSpaceType;

        return $this;
    }

    public function getGardenUse(): ?bool
    {
        return $this->gardenUse;
    }

    public function setGardenUse(?bool $gardenUse): Equipment
    {
        $this->gardenUse = $gardenUse;

        return $this;
    }

    public function getBalconyTerraceOrientation(): ?BalconyTerraceOrientation
    {
        return $this->balconyTerraceOrientation;
    }

    public function setBalconyTerraceOrientation(?BalconyTerraceOrientation $balconyTerraceOrientation): Equipment
    {
        $this->balconyTerraceOrientation = $balconyTerraceOrientation;

        return $this;
    }

    public function getFurnished(): ?Furnished
    {
        return $this->furnished;
    }

    public function setFurnished(?Furnished $furnished): Equipment
    {
        $this->furnished = $furnished;

        return $this;
    }

    public function getWheelchairAccessible(): ?bool
    {
        return $this->wheelchairAccessible;
    }

    public function setWheelchairAccessible(?bool $wheelchairAccessible): Equipment
    {
        $this->wheelchairAccessible = $wheelchairAccessible;

        return $this;
    }

    public function getCableSatelliteTV(): ?bool
    {
        return $this->cableSatelliteTV;
    }

    public function setCableSatelliteTV(?bool $cableSatelliteTV): Equipment
    {
        $this->cableSatelliteTV = $cableSatelliteTV;

        return $this;
    }

    public function getDigitalTerrestrialTV(): ?bool
    {
        return $this->digitalTerrestrialTV;
    }

    public function setDigitalTerrestrialTV(?bool $digitalTerrestrialTV): Equipment
    {
        $this->digitalTerrestrialTV = $digitalTerrestrialTV;

        return $this;
    }

    public function getBarrierFree(): ?bool
    {
        return $this->barrierFree;
    }

    public function setBarrierFree(?bool $barrierFree): Equipment
    {
        $this->barrierFree = $barrierFree;

        return $this;
    }

    public function getSauna(): ?bool
    {
        return $this->sauna;
    }

    public function setSauna(?bool $sauna): Equipment
    {
        $this->sauna = $sauna;

        return $this;
    }

    public function getSwimmingPool(): ?bool
    {
        return $this->swimmingPool;
    }

    public function setSwimmingPool(?bool $swimmingPool): Equipment
    {
        $this->swimmingPool = $swimmingPool;

        return $this;
    }

    public function getLaundryDryingRoom(): ?bool
    {
        return $this->laundryDryingRoom;
    }

    public function setLaundryDryingRoom(?bool $laundryDryingRoom): Equipment
    {
        $this->laundryDryingRoom = $laundryDryingRoom;

        return $this;
    }

    public function getWinterGarden(): ?bool
    {
        return $this->winterGarden;
    }

    public function setWinterGarden(?bool $winterGarden): Equipment
    {
        $this->winterGarden = $winterGarden;

        return $this;
    }

    public function getDataProcessingCabling(): ?bool
    {
        return $this->dataProcessingCabling;
    }

    public function setDataProcessingCabling(?bool $dataProcessingCabling): Equipment
    {
        $this->dataProcessingCabling = $dataProcessingCabling;

        return $this;
    }

    public function getRamp(): ?bool
    {
        return $this->ramp;
    }

    public function setRamp(?bool $ramp): Equipment
    {
        $this->ramp = $ramp;

        return $this;
    }

    public function getLiftPlatform(): ?bool
    {
        return $this->liftPlatform;
    }

    public function setLiftPlatform(?bool $liftPlatform): Equipment
    {
        $this->liftPlatform = $liftPlatform;

        return $this;
    }

    public function getCrane(): ?bool
    {
        return $this->crane;
    }

    public function setCrane(?bool $crane): Equipment
    {
        $this->crane = $crane;

        return $this;
    }

    public function getGuestTerrace(): ?bool
    {
        return $this->guestTerrace;
    }

    public function setGuestTerrace(?bool $guestTerrace): Equipment
    {
        $this->guestTerrace = $guestTerrace;

        return $this;
    }

    public function getElectricityConnectionValue(): ?string
    {
        return $this->electricityConnectionValue;
    }

    public function setElectricityConnectionValue(?string $electricityConnectionValue): Equipment
    {
        $this->electricityConnectionValue = $electricityConnectionValue;

        return $this;
    }

    public function getCanteenCafeteria(): ?bool
    {
        return $this->canteenCafeteria;
    }

    public function setCanteenCafeteria(?bool $canteenCafeteria): Equipment
    {
        $this->canteenCafeteria = $canteenCafeteria;

        return $this;
    }

    public function getKitchenette(): ?bool
    {
        return $this->kitchenette;
    }

    public function setKitchenette(?bool $kitchenette): Equipment
    {
        $this->kitchenette = $kitchenette;

        return $this;
    }

    public function getHallHeight(): ?float
    {
        return $this->hallHeight;
    }

    public function setHallHeight(?float $hallHeight): Equipment
    {
        $this->hallHeight = $hallHeight;

        return $this;
    }

    public function getAttachedGastronomy(): ?AttachedGastronomy
    {
        return $this->attachedGastronomy;
    }

    public function setAttachedGastronomy(?AttachedGastronomy $attachedGastronomy): Equipment
    {
        $this->attachedGastronomy = $attachedGastronomy;

        return $this;
    }

    public function getBreweryTie(): ?bool
    {
        return $this->breweryTie;
    }

    public function setBreweryTie(?bool $breweryTie): Equipment
    {
        $this->breweryTie = $breweryTie;

        return $this;
    }

    public function getSportsFacilities(): ?bool
    {
        return $this->sportsFacilities;
    }

    public function setSportsFacilities(?bool $sportsFacilities): Equipment
    {
        $this->sportsFacilities = $sportsFacilities;

        return $this;
    }

    public function getWellnessArea(): ?bool
    {
        return $this->wellnessArea;
    }

    public function setWellnessArea(?bool $wellnessArea): Equipment
    {
        $this->wellnessArea = $wellnessArea;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getServices(): array
    {
        return $this->services ?? [];
    }

    public function setServices(array $services): Equipment
    {
        $this->services = $services;

        return $this;
    }

    public function getHolidayPropertyPhone(): ?bool
    {
        return $this->holidayPropertyPhone;
    }

    public function setHolidayPropertyPhone(?bool $holidayPropertyPhone): Equipment
    {
        $this->holidayPropertyPhone = $holidayPropertyPhone;

        return $this;
    }

    public function getBroadbandAccess(): ?BroadbandAccess
    {
        return $this->broadbandAccess;
    }

    public function setBroadbandAccess(?BroadbandAccess $broadbandAccess): Equipment
    {
        $this->broadbandAccess = $broadbandAccess;

        return $this;
    }

    public function getUmtsReception(): ?bool
    {
        return $this->umtsReception;
    }

    public function setUmtsReception(?bool $umtsReception): Equipment
    {
        $this->umtsReception = $umtsReception;

        return $this;
    }

    public function getSecurityTechnology(): ?SecurityTechnology
    {
        return $this->securityTechnology;
    }

    public function setSecurityTechnology(?SecurityTechnology $securityTechnology): Equipment
    {
        $this->securityTechnology = $securityTechnology;

        return $this;
    }

    public function getBasement(): ?Basement
    {
        return $this->basement;
    }

    public function setBasement(?Basement $basement): Equipment
    {
        $this->basement = $basement;

        return $this;
    }

    public function getStorageRoom(): ?bool
    {
        return $this->storageRoom;
    }

    public function setStorageRoom(?bool $storageRoom): Equipment
    {
        $this->storageRoom = $storageRoom;

        return $this;
    }

    public function getBicycleRoom(): ?bool
    {
        return $this->bicycleRoom;
    }

    public function setBicycleRoom(?bool $bicycleRoom): Equipment
    {
        $this->bicycleRoom = $bicycleRoom;

        return $this;
    }

    public function getShutters(): ?bool
    {
        return $this->shutters;
    }

    public function setShutters(?bool $shutters): Equipment
    {
        $this->shutters = $shutters;

        return $this;
    }

    public function getRoofShape(): ?RoofShape
    {
        return $this->roofShape;
    }

    public function setRoofShape(?RoofShape $roofShape): Equipment
    {
        $this->roofShape = $roofShape;

        return $this;
    }

    public function getConstructionMethod(): ?ConstructionMethod
    {
        return $this->constructionMethod;
    }

    public function setConstructionMethod(?ConstructionMethod $constructionMethod): Equipment
    {
        $this->constructionMethod = $constructionMethod;

        return $this;
    }

    public function getDevelopmentStage(): ?DevelopmentStage
    {
        return $this->developmentStage;
    }

    public function setDevelopmentStage(?DevelopmentStage $developmentStage): Equipment
    {
        $this->developmentStage = $developmentStage;

        return $this;
    }

    public function getEnergyType(): ?EnergyType
    {
        return $this->energyType;
    }

    public function setEnergyType(?EnergyType $energyType): Equipment
    {
        $this->energyType = $energyType;

        return $this;
    }

    public function getLibrary(): ?bool
    {
        return $this->library;
    }

    public function setLibrary(?bool $library): Equipment
    {
        $this->library = $library;

        return $this;
    }

    public function getAttic(): ?bool
    {
        return $this->attic;
    }

    public function setAttic(?bool $attic): Equipment
    {
        $this->attic = $attic;

        return $this;
    }

    public function getGuestToilet(): ?bool
    {
        return $this->guestToilet;
    }

    public function setGuestToilet(?bool $guestToilet): Equipment
    {
        $this->guestToilet = $guestToilet;

        return $this;
    }

    public function getCableChannels(): ?bool
    {
        return $this->cableChannels;
    }

    public function setCableChannels(?bool $cableChannels): Equipment
    {
        $this->cableChannels = $cableChannels;

        return $this;
    }

    public function getSeniorFriendly(): ?bool
    {
        return $this->seniorFriendly;
    }

    public function setSeniorFriendly(?bool $seniorFriendly): Equipment
    {
        $this->seniorFriendly = $seniorFriendly;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Equipment
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Equipment
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

    public function setUserDefinedExtend(array $userDefinedExtend): Equipment
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
