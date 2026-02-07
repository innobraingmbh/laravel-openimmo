<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Areas
 */
#[XmlRoot(name: 'flaechen')]
class Areas
{
    public function __construct(
        #[Type('float')]
        #[SerializedName('wohnflaeche')]
        protected ?float $livingArea = null,
        #[Type('float')]
        #[SerializedName('nutzflaeche')]
        protected ?float $usableArea = null,
        #[Type('float')]
        #[SerializedName('gesamtflaeche')]
        protected ?float $totalArea = null,
        #[Type('float')]
        #[SerializedName('ladenflaeche')]
        protected ?float $shopArea = null,
        #[Type('float')]
        #[SerializedName('lagerflaeche')]
        protected ?float $storageArea = null,
        #[Type('float')]
        #[SerializedName('verkaufsflaeche')]
        protected ?float $salesArea = null,
        #[Type('float')]
        #[SerializedName('freiflaeche')]
        protected ?float $openSpace = null,
        #[Type('float')]
        #[SerializedName('bueroflaeche')]
        protected ?float $officeArea = null,
        #[Type('float')]
        #[SerializedName('bueroteilflaeche')]
        protected ?float $partialOfficeArea = null,
        #[Type('float')]
        #[SerializedName('fensterfront')]
        protected ?float $windowFront = null,
        #[Type('float')]
        #[SerializedName('verwaltungsflaeche')]
        protected ?float $administrativeArea = null,
        #[Type('float')]
        #[SerializedName('gastroflaeche')]
        protected ?float $gastronomyArea = null,
        #[Type('string')]
        #[SerializedName('grz')]
        protected ?string $siteOccupancyIndex = null,
        #[Type('string')]
        #[SerializedName('gfz')]
        protected ?string $floorAreaRatio = null,
        #[Type('string')]
        #[SerializedName('bmz')]
        protected ?string $floorSpaceIndex = null,
        #[Type('string')]
        #[SerializedName('bgf')]
        protected ?string $grossFloorArea = null,
        #[Type('float')]
        #[SerializedName('grundstuecksflaeche')]
        protected ?float $plotArea = null,
        #[Type('float')]
        #[SerializedName('sonstflaeche')]
        protected ?float $otherArea = null,
        #[Type('float')]
        #[SerializedName('anzahl_zimmer')]
        protected ?float $numberOfRooms = null,
        #[Type('float')]
        #[SerializedName('anzahl_schlafzimmer')]
        protected ?float $numberOfBedrooms = null,
        #[Type('float')]
        #[SerializedName('anzahl_badezimmer')]
        protected ?float $numberOfBathrooms = null,
        #[Type('float')]
        #[SerializedName('anzahl_sep_wc')]
        protected ?float $numberOfSeparateToilets = null,
        #[Type('float')]
        #[SerializedName('anzahl_balkone')]
        protected ?float $numberOfBalconies = null,
        #[Type('float')]
        #[SerializedName('anzahl_terrassen')]
        protected ?float $numberOfTerraces = null,
        #[Type('float')]
        #[SerializedName('anzahl_logia')]
        protected ?float $numberOfLoggias = null,
        #[Type('float')]
        #[SerializedName('balkon_terrasse_flaeche')]
        protected ?float $balconyTerraceArea = null,
        #[Type('float')]
        #[SerializedName('anzahl_wohn_schlafzimmer')]
        protected ?float $numberOfLivingBedrooms = null,
        #[Type('float')]
        #[SerializedName('gartenflaeche')]
        protected ?float $gardenArea = null,
        #[Type('float')]
        #[SerializedName('kellerflaeche')]
        protected ?float $basementArea = null,
        #[Type('float')]
        #[SerializedName('fensterfront_qm')]
        protected ?float $windowFrontSqm = null,
        #[Type('float')]
        #[SerializedName('grundstuecksfront')]
        protected ?float $plotFront = null,
        #[Type('float')]
        #[SerializedName('dachbodenflaeche')]
        protected ?float $atticArea = null,
        #[Type('float')]
        #[SerializedName('teilbar_ab')]
        protected ?float $divisibleFrom = null,
        #[Type('float')]
        #[SerializedName('beheizbare_flaeche')]
        protected ?float $heatedArea = null,
        /** Minimum value (inclusive): 1 */
        #[Type('int')]
        #[SerializedName('anzahl_stellplaetze')]
        protected ?int $numberOfParkingSpaces = null,
        #[Type('float')]
        #[SerializedName('plaetze_gastraum')]
        protected ?float $diningRoomSeats = null,
        #[Type('float')]
        #[SerializedName('anzahl_betten')]
        protected ?float $numberOfBeds = null,
        #[Type('float')]
        #[SerializedName('anzahl_tagungsraeume')]
        protected ?float $numberOfMeetingRooms = null,
        #[Type('float')]
        #[SerializedName('vermietbare_flaeche')]
        protected ?float $rentableArea = null,
        #[Type('float')]
        #[SerializedName('anzahl_wohneinheiten')]
        protected ?float $numberOfResidentialUnits = null,
        #[Type('float')]
        #[SerializedName('anzahl_gewerbeeinheiten')]
        protected ?float $numberOfCommercialUnits = null,
        #[Type('bool')]
        #[SerializedName('einliegerwohnung')]
        protected ?bool $grannyFlat = null,
        #[Type('float')]
        #[SerializedName('kubatur')]
        protected ?float $cubature = null,
        #[Type('float')]
        #[SerializedName('flaechevon')]
        protected ?float $areaFrom = null,
        #[Type('float')]
        #[SerializedName('flaechebis')]
        protected ?float $areaTo = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getLivingArea(): ?float
    {
        return $this->livingArea;
    }

    public function setLivingArea(?float $livingArea): Areas
    {
        $this->livingArea = $livingArea;

        return $this;
    }

    public function getUsableArea(): ?float
    {
        return $this->usableArea;
    }

    public function setUsableArea(?float $usableArea): Areas
    {
        $this->usableArea = $usableArea;

        return $this;
    }

    public function getTotalArea(): ?float
    {
        return $this->totalArea;
    }

    public function setTotalArea(?float $totalArea): Areas
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    public function getShopArea(): ?float
    {
        return $this->shopArea;
    }

    public function setShopArea(?float $shopArea): Areas
    {
        $this->shopArea = $shopArea;

        return $this;
    }

    public function getStorageArea(): ?float
    {
        return $this->storageArea;
    }

    public function setStorageArea(?float $storageArea): Areas
    {
        $this->storageArea = $storageArea;

        return $this;
    }

    public function getSalesArea(): ?float
    {
        return $this->salesArea;
    }

    public function setSalesArea(?float $salesArea): Areas
    {
        $this->salesArea = $salesArea;

        return $this;
    }

    public function getOpenSpace(): ?float
    {
        return $this->openSpace;
    }

    public function setOpenSpace(?float $openSpace): Areas
    {
        $this->openSpace = $openSpace;

        return $this;
    }

    public function getOfficeArea(): ?float
    {
        return $this->officeArea;
    }

    public function setOfficeArea(?float $officeArea): Areas
    {
        $this->officeArea = $officeArea;

        return $this;
    }

    public function getPartialOfficeArea(): ?float
    {
        return $this->partialOfficeArea;
    }

    public function setPartialOfficeArea(?float $partialOfficeArea): Areas
    {
        $this->partialOfficeArea = $partialOfficeArea;

        return $this;
    }

    public function getWindowFront(): ?float
    {
        return $this->windowFront;
    }

    public function setWindowFront(?float $windowFront): Areas
    {
        $this->windowFront = $windowFront;

        return $this;
    }

    public function getAdministrativeArea(): ?float
    {
        return $this->administrativeArea;
    }

    public function setAdministrativeArea(?float $administrativeArea): Areas
    {
        $this->administrativeArea = $administrativeArea;

        return $this;
    }

    public function getGastronomyArea(): ?float
    {
        return $this->gastronomyArea;
    }

    public function setGastronomyArea(?float $gastronomyArea): Areas
    {
        $this->gastronomyArea = $gastronomyArea;

        return $this;
    }

    public function getSiteOccupancyIndex(): ?string
    {
        return $this->siteOccupancyIndex;
    }

    public function setSiteOccupancyIndex(?string $siteOccupancyIndex): Areas
    {
        $this->siteOccupancyIndex = $siteOccupancyIndex;

        return $this;
    }

    public function getFloorAreaRatio(): ?string
    {
        return $this->floorAreaRatio;
    }

    public function setFloorAreaRatio(?string $floorAreaRatio): Areas
    {
        $this->floorAreaRatio = $floorAreaRatio;

        return $this;
    }

    public function getFloorSpaceIndex(): ?string
    {
        return $this->floorSpaceIndex;
    }

    public function setFloorSpaceIndex(?string $floorSpaceIndex): Areas
    {
        $this->floorSpaceIndex = $floorSpaceIndex;

        return $this;
    }

    public function getGrossFloorArea(): ?string
    {
        return $this->grossFloorArea;
    }

    public function setGrossFloorArea(?string $grossFloorArea): Areas
    {
        $this->grossFloorArea = $grossFloorArea;

        return $this;
    }

    public function getPlotArea(): ?float
    {
        return $this->plotArea;
    }

    public function setPlotArea(?float $plotArea): Areas
    {
        $this->plotArea = $plotArea;

        return $this;
    }

    public function getOtherArea(): ?float
    {
        return $this->otherArea;
    }

    public function setOtherArea(?float $otherArea): Areas
    {
        $this->otherArea = $otherArea;

        return $this;
    }

    public function getNumberOfRooms(): ?float
    {
        return $this->numberOfRooms;
    }

    public function setNumberOfRooms(?float $numberOfRooms): Areas
    {
        $this->numberOfRooms = $numberOfRooms;

        return $this;
    }

    public function getNumberOfBedrooms(): ?float
    {
        return $this->numberOfBedrooms;
    }

    public function setNumberOfBedrooms(?float $numberOfBedrooms): Areas
    {
        $this->numberOfBedrooms = $numberOfBedrooms;

        return $this;
    }

    public function getNumberOfBathrooms(): ?float
    {
        return $this->numberOfBathrooms;
    }

    public function setNumberOfBathrooms(?float $numberOfBathrooms): Areas
    {
        $this->numberOfBathrooms = $numberOfBathrooms;

        return $this;
    }

    public function getNumberOfSeparateToilets(): ?float
    {
        return $this->numberOfSeparateToilets;
    }

    public function setNumberOfSeparateToilets(?float $numberOfSeparateToilets): Areas
    {
        $this->numberOfSeparateToilets = $numberOfSeparateToilets;

        return $this;
    }

    public function getNumberOfBalconies(): ?float
    {
        return $this->numberOfBalconies;
    }

    public function setNumberOfBalconies(?float $numberOfBalconies): Areas
    {
        $this->numberOfBalconies = $numberOfBalconies;

        return $this;
    }

    public function getNumberOfTerraces(): ?float
    {
        return $this->numberOfTerraces;
    }

    public function setNumberOfTerraces(?float $numberOfTerraces): Areas
    {
        $this->numberOfTerraces = $numberOfTerraces;

        return $this;
    }

    public function getNumberOfLoggias(): ?float
    {
        return $this->numberOfLoggias;
    }

    public function setNumberOfLoggias(?float $numberOfLoggias): Areas
    {
        $this->numberOfLoggias = $numberOfLoggias;

        return $this;
    }

    public function getBalconyTerraceArea(): ?float
    {
        return $this->balconyTerraceArea;
    }

    public function setBalconyTerraceArea(?float $balconyTerraceArea): Areas
    {
        $this->balconyTerraceArea = $balconyTerraceArea;

        return $this;
    }

    public function getNumberOfLivingBedrooms(): ?float
    {
        return $this->numberOfLivingBedrooms;
    }

    public function setNumberOfLivingBedrooms(?float $numberOfLivingBedrooms): Areas
    {
        $this->numberOfLivingBedrooms = $numberOfLivingBedrooms;

        return $this;
    }

    public function getGardenArea(): ?float
    {
        return $this->gardenArea;
    }

    public function setGardenArea(?float $gardenArea): Areas
    {
        $this->gardenArea = $gardenArea;

        return $this;
    }

    public function getBasementArea(): ?float
    {
        return $this->basementArea;
    }

    public function setBasementArea(?float $basementArea): Areas
    {
        $this->basementArea = $basementArea;

        return $this;
    }

    public function getWindowFrontSqm(): ?float
    {
        return $this->windowFrontSqm;
    }

    public function setWindowFrontSqm(?float $windowFrontSqm): Areas
    {
        $this->windowFrontSqm = $windowFrontSqm;

        return $this;
    }

    public function getPlotFront(): ?float
    {
        return $this->plotFront;
    }

    public function setPlotFront(?float $plotFront): Areas
    {
        $this->plotFront = $plotFront;

        return $this;
    }

    public function getAtticArea(): ?float
    {
        return $this->atticArea;
    }

    public function setAtticArea(?float $atticArea): Areas
    {
        $this->atticArea = $atticArea;

        return $this;
    }

    public function getDivisibleFrom(): ?float
    {
        return $this->divisibleFrom;
    }

    public function setDivisibleFrom(?float $divisibleFrom): Areas
    {
        $this->divisibleFrom = $divisibleFrom;

        return $this;
    }

    public function getHeatedArea(): ?float
    {
        return $this->heatedArea;
    }

    public function setHeatedArea(?float $heatedArea): Areas
    {
        $this->heatedArea = $heatedArea;

        return $this;
    }

    public function getNumberOfParkingSpaces(): ?int
    {
        return $this->numberOfParkingSpaces;
    }

    public function setNumberOfParkingSpaces(?int $numberOfParkingSpaces): Areas
    {
        $this->numberOfParkingSpaces = $numberOfParkingSpaces;

        return $this;
    }

    public function getDiningRoomSeats(): ?float
    {
        return $this->diningRoomSeats;
    }

    public function setDiningRoomSeats(?float $diningRoomSeats): Areas
    {
        $this->diningRoomSeats = $diningRoomSeats;

        return $this;
    }

    public function getNumberOfBeds(): ?float
    {
        return $this->numberOfBeds;
    }

    public function setNumberOfBeds(?float $numberOfBeds): Areas
    {
        $this->numberOfBeds = $numberOfBeds;

        return $this;
    }

    public function getNumberOfMeetingRooms(): ?float
    {
        return $this->numberOfMeetingRooms;
    }

    public function setNumberOfMeetingRooms(?float $numberOfMeetingRooms): Areas
    {
        $this->numberOfMeetingRooms = $numberOfMeetingRooms;

        return $this;
    }

    public function getRentableArea(): ?float
    {
        return $this->rentableArea;
    }

    public function setRentableArea(?float $rentableArea): Areas
    {
        $this->rentableArea = $rentableArea;

        return $this;
    }

    public function getNumberOfResidentialUnits(): ?float
    {
        return $this->numberOfResidentialUnits;
    }

    public function setNumberOfResidentialUnits(?float $numberOfResidentialUnits): Areas
    {
        $this->numberOfResidentialUnits = $numberOfResidentialUnits;

        return $this;
    }

    public function getNumberOfCommercialUnits(): ?float
    {
        return $this->numberOfCommercialUnits;
    }

    public function setNumberOfCommercialUnits(?float $numberOfCommercialUnits): Areas
    {
        $this->numberOfCommercialUnits = $numberOfCommercialUnits;

        return $this;
    }

    public function getGrannyFlat(): ?bool
    {
        return $this->grannyFlat;
    }

    public function setGrannyFlat(?bool $grannyFlat): Areas
    {
        $this->grannyFlat = $grannyFlat;

        return $this;
    }

    public function getCubature(): ?float
    {
        return $this->cubature;
    }

    public function setCubature(?float $cubature): Areas
    {
        $this->cubature = $cubature;

        return $this;
    }

    public function getAreaFrom(): ?float
    {
        return $this->areaFrom;
    }

    public function setAreaFrom(?float $areaFrom): Areas
    {
        $this->areaFrom = $areaFrom;

        return $this;
    }

    public function getAreaTo(): ?float
    {
        return $this->areaTo;
    }

    public function setAreaTo(?float $areaTo): Areas
    {
        $this->areaTo = $areaTo;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Areas
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Areas
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

    public function setUserDefinedExtend(array $userDefinedExtend): Areas
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
