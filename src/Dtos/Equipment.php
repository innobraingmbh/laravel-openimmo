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
 * Class Equipment
 */
#[Description('Equipment and features of the property')]
#[XmlRoot(name: 'ausstattung')]
class Equipment
{
    public const string EQUIPMENT_CATEGORY_STANDARD = 'STANDARD';

    public const string EQUIPMENT_CATEGORY_UPSCALE = 'GEHOBEN';

    public const string EQUIPMENT_CATEGORY_LUXURY = 'LUXUS';

    public function __construct(
        /** @see EQUIPMENT_CATEGORY_* constants */
        #[Type('string')]
        #[Description('Equipment category (standard, upscale, luxury)')]
        #[SerializedName('ausstatt_kategorie')]
        protected string $equipmentCategory = '',
        #[Type('bool')]
        #[Description('Suitable for shared flat')]
        #[SerializedName('wg_geeignet')]
        protected ?bool $suitableForSharedFlat = null,
        #[Type('bool')]
        #[Description('Room layout is modifiable')]
        #[SerializedName('raeume_veraenderbar')]
        protected ?bool $roomsModifiable = null,
        #[Type(Bathroom::class)]
        #[Description('Bathroom equipment')]
        #[SerializedName('bad')]
        protected ?Bathroom $bathroom = null,
        #[Type(Kitchen::class)]
        #[Description('Kitchen equipment of the property')]
        #[SerializedName('kueche')]
        protected ?Kitchen $kitchen = null,
        #[Type(Floor::class)]
        #[Description('Floor level of the unit within the building')]
        #[SerializedName('boden')]
        protected ?Floor $floor = null,
        #[Type('bool')]
        #[Description('Fireplace available')]
        #[SerializedName('kamin')]
        protected ?bool $fireplace = null,
        #[Type(HeatingType::class)]
        #[Description('Type of heating system')]
        #[SerializedName('heizungsart')]
        protected ?HeatingType $heatingType = null,
        #[Type(HeatingSystem::class)]
        #[Description('Heating fuel type of the heating system')]
        #[SerializedName('befeuerung')]
        protected ?HeatingSystem $heating = null,
        #[Type('bool')]
        #[Description('Air conditioning available')]
        #[SerializedName('klimatisiert')]
        protected ?bool $airConditioned = null,
        #[Type(Elevator::class)]
        #[Description('Elevator available')]
        #[SerializedName('fahrstuhl')]
        protected ?Elevator $elevator = null,
        #[XmlList(entry: 'stellplatzart', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\ParkingSpaceType>')]
        #[SkipWhenEmpty]
        #[Description('Type of parking space')]
        #[SerializedName('stellplatzart')]
        protected array $parkingSpaceType = [],
        #[Type('bool')]
        #[Description('Garden use possible')]
        #[SerializedName('gartennutzung')]
        protected ?bool $gardenUse = null,
        #[Type(BalconyTerraceOrientation::class)]
        #[Description('Orientation of balcony or terrace')]
        #[SerializedName('ausricht_balkon_terrasse')]
        protected ?BalconyTerraceOrientation $balconyTerraceOrientation = null,
        #[Type(Furnished::class)]
        #[Description('Furnishing information of the property')]
        #[SerializedName('moebliert')]
        protected ?Furnished $furnished = null,
        #[Type('bool')]
        #[Description('Wheelchair accessible')]
        #[SerializedName('rollstuhlgerecht')]
        protected ?bool $wheelchairAccessible = null,
        #[Type('bool')]
        #[Description('Cable or satellite TV connection available')]
        #[SerializedName('kabel_sat_tv')]
        protected ?bool $cableSatelliteTV = null,
        #[Type('bool')]
        #[Description('DVB-T digital terrestrial TV reception available')]
        #[SerializedName('dvbt')]
        protected ?bool $digitalTerrestrialTV = null,
        #[Type('bool')]
        #[Description('Barrier-free accessible')]
        #[SerializedName('barrierefrei')]
        protected ?bool $barrierFree = null,
        #[Type('bool')]
        #[Description('Sauna available')]
        #[SerializedName('sauna')]
        protected ?bool $sauna = null,
        #[Type('bool')]
        #[Description('Swimming pool available')]
        #[SerializedName('swimmingpool')]
        protected ?bool $swimmingPool = null,
        #[Type('bool')]
        #[Description('Laundry and drying room available')]
        #[SerializedName('wasch_trockenraum')]
        protected ?bool $laundryDryingRoom = null,
        #[Type('bool')]
        #[Description('Winter garden available')]
        #[SerializedName('wintergarten')]
        protected ?bool $winterGarden = null,
        #[Type('bool')]
        #[Description('Data processing cabling available')]
        #[SerializedName('dv_verkabelung')]
        protected ?bool $dataProcessingCabling = null,
        #[Type('bool')]
        #[Description('Loading ramp available')]
        #[SerializedName('rampe')]
        protected ?bool $ramp = null,
        #[Type('bool')]
        #[Description('Lift platform available')]
        #[SerializedName('hebebuehne')]
        protected ?bool $liftPlatform = null,
        #[Type('bool')]
        #[Description('Crane available')]
        #[SerializedName('kran')]
        protected ?bool $crane = null,
        #[Type('bool')]
        #[Description('Guest terrace available')]
        #[SerializedName('gastterrasse')]
        protected ?bool $guestTerrace = null,
        #[Type('string')]
        #[Description('Electricity connection value in kVA')]
        #[SerializedName('stromanschlusswert')]
        protected ?string $electricityConnectionValue = null,
        #[Type('bool')]
        #[Description('Canteen or cafeteria available')]
        #[SerializedName('kantine_cafeteria')]
        protected ?bool $canteenCafeteria = null,
        #[Type('bool')]
        #[Description('Kitchenette available')]
        #[SerializedName('teekueche')]
        protected ?bool $kitchenette = null,
        #[Type('float')]
        #[Description('Hall height in meters')]
        #[SerializedName('hallenhoehe')]
        protected ?float $hallHeight = null,
        #[Type(AttachedGastronomy::class)]
        #[Description('Attached gastronomy available')]
        #[SerializedName('angeschl_gastronomie')]
        protected ?AttachedGastronomy $attachedGastronomy = null,
        #[Type('bool')]
        #[Description('Brewery tie for the gastronomy property')]
        #[SerializedName('brauereibindung')]
        protected ?bool $breweryTie = null,
        #[Type('bool')]
        #[Description('Sports facilities available')]
        #[SerializedName('sporteinrichtungen')]
        protected ?bool $sportsFacilities = null,
        #[Type('bool')]
        #[Description('Wellness area available')]
        #[SerializedName('wellnessbereich')]
        protected ?bool $wellnessArea = null,
        #[XmlList(entry: 'serviceleistungen', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Services>')]
        #[SkipWhenEmpty]
        #[Description('Services of the property')]
        #[SerializedName('serviceleistungen')]
        protected array $services = [],
        #[Type('bool')]
        #[Description('Phone connection of the holiday property available')]
        #[SerializedName('telefon_ferienimmobilie')]
        protected ?bool $holidayPropertyPhone = null,
        #[Type(BroadbandAccess::class)]
        #[Description('Broadband internet access available')]
        #[SerializedName('breitband_zugang')]
        protected ?BroadbandAccess $broadbandAccess = null,
        #[Type('bool')]
        #[Description('UMTS mobile reception available')]
        #[SerializedName('umts_empfang')]
        protected ?bool $umtsReception = null,
        #[Type(SecurityTechnology::class)]
        #[Description('Security technology of the property')]
        #[SerializedName('sicherheitstechnik')]
        protected ?SecurityTechnology $securityTechnology = null,
        #[Type(Basement::class)]
        #[Description('Basement or cellar information')]
        #[SerializedName('unterkellert')]
        protected ?Basement $basement = null,
        #[Type('bool')]
        #[Description('Storage room available')]
        #[SerializedName('abstellraum')]
        protected ?bool $storageRoom = null,
        #[Type('bool')]
        #[Description('Bicycle storage room available')]
        #[SerializedName('fahrradraum')]
        protected ?bool $bicycleRoom = null,
        #[Type('bool')]
        #[Description('Shutters/blinds available')]
        #[SerializedName('rolladen')]
        protected ?bool $shutters = null,
        #[Type(RoofShape::class)]
        #[Description('Roof shape of the building')]
        #[SerializedName('dachform')]
        protected ?RoofShape $roofShape = null,
        #[Type(ConstructionMethod::class)]
        #[Description('Construction method of the building')]
        #[SerializedName('bauweise')]
        protected ?ConstructionMethod $constructionMethod = null,
        #[Type(DevelopmentStage::class)]
        #[Description('Development stage of the building')]
        #[SerializedName('ausbaustufe')]
        protected ?DevelopmentStage $developmentStage = null,
        #[Type(EnergyType::class)]
        #[Description('Energy efficiency type of the property')]
        #[SerializedName('energietyp')]
        protected ?EnergyType $energyType = null,
        #[Type('bool')]
        #[Description('Library available')]
        #[SerializedName('bibliothek')]
        protected ?bool $library = null,
        #[Type('bool')]
        #[Description('Attic available')]
        #[SerializedName('dachboden')]
        protected ?bool $attic = null,
        #[Type('bool')]
        #[Description('Guest toilet available')]
        #[SerializedName('gaestewc')]
        protected ?bool $guestToilet = null,
        #[Type('bool')]
        #[Description('Cable channels available')]
        #[SerializedName('kabelkanaele')]
        protected ?bool $cableChannels = null,
        #[Type('bool')]
        #[Description('Senior-friendly equipped')]
        #[SerializedName('seniorengerecht')]
        protected ?bool $seniorFriendly = null,
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
        return $this->parkingSpaceType;
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
        return $this->services;
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
        return $this->userDefinedSimplefield;
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
        return $this->userDefinedAnyfield;
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
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Equipment
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
