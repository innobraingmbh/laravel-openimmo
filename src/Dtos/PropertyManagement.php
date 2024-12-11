<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PropertyManagement
 *
 * @XmlRoot("verwaltung_objekt")
 */
class PropertyManagement
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @SerializedName("objektadresse_freigeben")
         */
        protected ?bool $releasePropertyAddress = null,
        /**
         * @Type("string")
         *
         * @SerializedName("verfuegbar_ab")
         */
        protected ?string $availableFrom = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("abdatum")
         */
        protected ?DateTime $fromDate = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("bisdatum")
         */
        protected ?DateTime $toDate = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\MinRentalPeriod")
         *
         * @SerializedName("min_mietdauer")
         */
        protected ?MinRentalPeriod $minRentalPeriod = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\MaxRentalPeriod")
         *
         * @SerializedName("max_mietdauer")
         */
        protected ?MaxRentalPeriod $maxRentalPeriod = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("versteigerungstermin")
         */
        protected ?DateTime $auctionDate = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("wbs_sozialwohnung")
         */
        protected ?bool $socialHousing = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("vermietet")
         */
        protected ?bool $rented = null,
        /**
         * @Type("string")
         *
         * @SerializedName("gruppennummer")
         */
        protected ?string $groupNumber = null,
        /**
         * @Type("string")
         *
         * @SerializedName("zugang")
         */
        protected ?string $access = null,
        /**
         * @Type("float")
         *
         * @SerializedName("laufzeit")
         */
        protected ?float $duration = null,
        /**
         * @Type("int")
         * Minimum value (inclusive): 1
         *
         * @SerializedName("max_personen")
         */
        protected ?int $maxPersons = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("nichtraucher")
         */
        protected ?bool $nonSmoker = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("haustiere")
         */
        protected ?bool $pets = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Gender")
         *
         * @SerializedName("geschlecht")
         */
        protected ?Gender $gender = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("denkmalgeschuetzt")
         */
        protected ?bool $listedBuilding = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("als_ferien")
         */
        protected ?bool $asHoliday = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("gewerbliche_nutzung")
         */
        protected ?bool $commercialUse = null,
        /**
         * @Type("string")
         *
         * @SerializedName("branchen")
         */
        protected ?string $industries = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("hochhaus")
         */
        protected ?bool $highRise = null,
        /**
         * @XmlList(inline = true, entry = "user_defined_simplefield")
         *
         * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedSimplefield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_simplefield")
         */
        protected array $userDefinedSimplefield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_anyfield")
         *
         * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedAnyfield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_anyfield")
         */
        protected array $userDefinedAnyfield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_extend")
         *
         * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedExtend>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_extend")
         */
        protected array $userDefinedExtend = []
    ) {}

    public function getReleasePropertyAddress(): ?bool
    {
        return $this->releasePropertyAddress;
    }

    public function setReleasePropertyAddress(?bool $releasePropertyAddress): PropertyManagement
    {
        $this->releasePropertyAddress = $releasePropertyAddress;

        return $this;
    }

    public function getAvailableFrom(): ?string
    {
        return $this->availableFrom;
    }

    public function setAvailableFrom(?string $availableFrom): PropertyManagement
    {
        $this->availableFrom = $availableFrom;

        return $this;
    }

    public function getFromDate(): ?DateTime
    {
        return $this->fromDate;
    }

    public function setFromDate(?DateTime $fromDate): PropertyManagement
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    public function getToDate(): ?DateTime
    {
        return $this->toDate;
    }

    public function setToDate(?DateTime $toDate): PropertyManagement
    {
        $this->toDate = $toDate;

        return $this;
    }

    public function getMinRentalPeriod(): ?MinRentalPeriod
    {
        return $this->minRentalPeriod;
    }

    public function setMinRentalPeriod(?MinRentalPeriod $minRentalPeriod): PropertyManagement
    {
        $this->minRentalPeriod = $minRentalPeriod;

        return $this;
    }

    public function getMaxRentalPeriod(): ?MaxRentalPeriod
    {
        return $this->maxRentalPeriod;
    }

    public function setMaxRentalPeriod(?MaxRentalPeriod $maxRentalPeriod): PropertyManagement
    {
        $this->maxRentalPeriod = $maxRentalPeriod;

        return $this;
    }

    public function getAuctionDate(): ?DateTime
    {
        return $this->auctionDate;
    }

    public function setAuctionDate(?DateTime $auctionDate): PropertyManagement
    {
        $this->auctionDate = $auctionDate;

        return $this;
    }

    public function getSocialHousing(): ?bool
    {
        return $this->socialHousing;
    }

    public function setSocialHousing(?bool $socialHousing): PropertyManagement
    {
        $this->socialHousing = $socialHousing;

        return $this;
    }

    public function getRented(): ?bool
    {
        return $this->rented;
    }

    public function setRented(?bool $rented): PropertyManagement
    {
        $this->rented = $rented;

        return $this;
    }

    public function getGroupNumber(): ?string
    {
        return $this->groupNumber;
    }

    public function setGroupNumber(?string $groupNumber): PropertyManagement
    {
        $this->groupNumber = $groupNumber;

        return $this;
    }

    public function getAccess(): ?string
    {
        return $this->access;
    }

    public function setAccess(?string $access): PropertyManagement
    {
        $this->access = $access;

        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): PropertyManagement
    {
        $this->duration = $duration;

        return $this;
    }

    public function getMaxPersons(): ?int
    {
        return $this->maxPersons;
    }

    public function setMaxPersons(?int $maxPersons): PropertyManagement
    {
        $this->maxPersons = $maxPersons;

        return $this;
    }

    public function getNonSmoker(): ?bool
    {
        return $this->nonSmoker;
    }

    public function setNonSmoker(?bool $nonSmoker): PropertyManagement
    {
        $this->nonSmoker = $nonSmoker;

        return $this;
    }

    public function getPets(): ?bool
    {
        return $this->pets;
    }

    public function setPets(?bool $pets): PropertyManagement
    {
        $this->pets = $pets;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): PropertyManagement
    {
        $this->gender = $gender;

        return $this;
    }

    public function getListedBuilding(): ?bool
    {
        return $this->listedBuilding;
    }

    public function setListedBuilding(?bool $listedBuilding): PropertyManagement
    {
        $this->listedBuilding = $listedBuilding;

        return $this;
    }

    public function getAsHoliday(): ?bool
    {
        return $this->asHoliday;
    }

    public function setAsHoliday(?bool $asHoliday): PropertyManagement
    {
        $this->asHoliday = $asHoliday;

        return $this;
    }

    public function getCommercialUse(): ?bool
    {
        return $this->commercialUse;
    }

    public function setCommercialUse(?bool $commercialUse): PropertyManagement
    {
        $this->commercialUse = $commercialUse;

        return $this;
    }

    public function getIndustries(): ?string
    {
        return $this->industries;
    }

    public function setIndustries(?string $industries): PropertyManagement
    {
        $this->industries = $industries;

        return $this;
    }

    public function getHighRise(): ?bool
    {
        return $this->highRise;
    }

    public function setHighRise(?bool $highRise): PropertyManagement
    {
        $this->highRise = $highRise;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): PropertyManagement
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): PropertyManagement
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

    public function setUserDefinedExtend(array $userDefinedExtend): PropertyManagement
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
