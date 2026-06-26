<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PropertyManagement
 */
#[Description('Property management information of the real estate')]
#[XmlRoot(name: 'verwaltung_objekt')]
class PropertyManagement
{
    public function __construct(
        #[Type('bool')]
        #[Description('Full address of the property released for publication')]
        #[SerializedName('objektadresse_freigeben')]
        protected ?bool $releasePropertyAddress = null,
        #[Type('string')]
        #[Description('Availability date of the property')]
        #[SerializedName('verfuegbar_ab')]
        protected ?string $availableFrom = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Start date')]
        #[SerializedName('abdatum')]
        protected ?DateTime $fromDate = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('End date')]
        #[SerializedName('bisdatum')]
        protected ?DateTime $toDate = null,
        #[Type(MinRentalPeriod::class)]
        #[Description('Minimum rental period')]
        #[SerializedName('min_mietdauer')]
        protected ?MinRentalPeriod $minRentalPeriod = null,
        #[Type(MaxRentalPeriod::class)]
        #[Description('Maximum rental period')]
        #[SerializedName('max_mietdauer')]
        protected ?MaxRentalPeriod $maxRentalPeriod = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Date of the foreclosure auction')]
        #[SerializedName('versteigerungstermin')]
        protected ?DateTime $auctionDate = null,
        #[Type('bool')]
        #[Description('Social housing (publicly subsidized)')]
        #[SerializedName('wbs_sozialwohnung')]
        protected ?bool $socialHousing = null,
        #[Type('bool')]
        #[Description('Property is currently rented')]
        #[SerializedName('vermietet')]
        protected ?bool $rented = null,
        #[Type('string')]
        #[Description('Number of the group')]
        #[SerializedName('gruppennummer')]
        protected ?string $groupNumber = null,
        #[Type('string')]
        #[Description('Access type or access rights of the property')]
        #[SerializedName('zugang')]
        protected ?string $access = null,
        #[Type('float')]
        #[Description('Duration or term')]
        #[SerializedName('laufzeit')]
        protected ?float $duration = null,
        /** Minimum value (inclusive): 1 */
        #[Type('int')]
        #[Description('Maximum number of persons')]
        #[SerializedName('max_personen')]
        protected ?int $maxPersons = null,
        #[Type('bool')]
        #[Description('Non-smokers only')]
        #[SerializedName('nichtraucher')]
        protected ?bool $nonSmoker = null,
        #[Type('bool')]
        #[Description('Pets allowed')]
        #[SerializedName('haustiere')]
        protected ?bool $pets = null,
        #[Type(Gender::class)]
        #[Description('Gender of the person')]
        #[SerializedName('geschlecht')]
        protected ?Gender $gender = null,
        #[Type('bool')]
        #[Description('Listed (heritage-protected) building')]
        #[SerializedName('denkmalgeschuetzt')]
        protected ?bool $listedBuilding = null,
        #[Type('bool')]
        #[Description('Suitable for use as a holiday property')]
        #[SerializedName('als_ferien')]
        protected ?bool $asHoliday = null,
        #[Type('bool')]
        #[Description('Commercial use of the property')]
        #[SerializedName('gewerbliche_nutzung')]
        protected ?bool $commercialUse = null,
        #[Type('string')]
        #[Description('Industries or use types of the commercial property')]
        #[SerializedName('branchen')]
        protected ?string $industries = null,
        #[Type('bool')]
        #[Description('High-rise building property')]
        #[SerializedName('hochhaus')]
        protected ?bool $highRise = null,
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
        return $this->userDefinedSimplefield;
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
        return $this->userDefinedAnyfield;
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
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): PropertyManagement
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
