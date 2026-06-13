<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class RealEstate
 * Angaben einer einzelnen Immobile
 *
 * @description Single real estate property with all its data
 */
#[XmlRoot(name: 'immobilie')]
class RealEstate
{
    public function __construct(
        /** @description Property category with marketing type and property type */
        #[Type(PropertyCategory::class)]
        #[SerializedName('objektkategorie')]
        protected ?PropertyCategory $propertyCategory = null,
        /** @description Geographic information of the property */
        #[Type(Geo::class)]
        #[SerializedName('geo')]
        protected ?Geo $geo = null,
        /** @description Contact person for the property */
        #[Type(ContactPerson::class)]
        #[SerializedName('kontaktperson')]
        protected ?ContactPerson $contactPerson = null,
        /** @description Additional address */
        #[XmlList(entry: 'weitere_adresse', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\AdditionalAddress>')]
        #[SkipWhenEmpty]
        #[SerializedName('weitere_adresse')]
        protected array $additionalAddress = [],
        /** @description Price information of the property */
        #[Type(Prices::class)]
        #[SerializedName('preise')]
        protected ?Prices $prices = null,
        /** @description Bidding process for the property */
        #[Type(BiddingProcess::class)]
        #[SerializedName('bieterverfahren')]
        protected ?BiddingProcess $biddingProcess = null,
        /** @description Foreclosure auction information */
        #[Type(Auction::class)]
        #[SerializedName('versteigerung')]
        protected ?Auction $auction = null,
        /** @description Area measurements of the property */
        #[Type(Areas::class)]
        #[SerializedName('flaechen')]
        protected ?Areas $areas = null,
        /** @description Equipment and features of the property */
        #[Type(Equipment::class)]
        #[SerializedName('ausstattung')]
        protected ?Equipment $equipment = null,
        /** @description Condition information of the property */
        #[Type(ConditionInformation::class)]
        #[SerializedName('zustand_angaben')]
        protected ?ConditionInformation $conditionInformation = null,
        /** @description Evaluation information of the property */
        #[Type(Evaluation::class)]
        #[SerializedName('bewertung')]
        protected ?Evaluation $evaluation = null,
        /** @description Infrastructure connections of the property */
        #[Type(Infrastructure::class)]
        #[SerializedName('infrastruktur')]
        protected ?Infrastructure $infrastructure = null,
        /** @description Free-text descriptions of the property */
        #[Type(FreeTexts::class)]
        #[SerializedName('freitexte')]
        protected ?FreeTexts $freeTexts = null,
        /** @description List of attachments of the property */
        #[Type(Attachments::class)]
        #[SerializedName('anhaenge')]
        protected ?Attachments $attachments = null,
        /** @description Property management information */
        #[Type(PropertyManagement::class)]
        #[SerializedName('verwaltung_objekt')]
        protected ?PropertyManagement $propertyManagement = null,
        /** @description Technical management data of the data transfer */
        #[Type(TechnicalManagement::class)]
        #[SerializedName('verwaltung_techn')]
        protected ?TechnicalManagement $technicalManagement = null,
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

    public function getPropertyCategory(): ?PropertyCategory
    {
        return $this->propertyCategory;
    }

    public function setPropertyCategory(?PropertyCategory $propertyCategory): RealEstate
    {
        $this->propertyCategory = $propertyCategory;

        return $this;
    }

    public function getGeo(): ?Geo
    {
        return $this->geo;
    }

    public function setGeo(?Geo $geo): RealEstate
    {
        $this->geo = $geo;

        return $this;
    }

    public function getContactPerson(): ?ContactPerson
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?ContactPerson $contactPerson): RealEstate
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getAdditionalAddress(): array
    {
        return $this->additionalAddress;
    }

    public function setAdditionalAddress(array $additionalAddress): RealEstate
    {
        $this->additionalAddress = $additionalAddress;

        return $this;
    }

    public function getPrices(): ?Prices
    {
        return $this->prices;
    }

    public function setPrices(?Prices $prices): RealEstate
    {
        $this->prices = $prices;

        return $this;
    }

    public function getBiddingProcess(): ?BiddingProcess
    {
        return $this->biddingProcess;
    }

    public function setBiddingProcess(?BiddingProcess $biddingProcess): RealEstate
    {
        $this->biddingProcess = $biddingProcess;

        return $this;
    }

    public function getAuction(): ?Auction
    {
        return $this->auction;
    }

    public function setAuction(?Auction $auction): RealEstate
    {
        $this->auction = $auction;

        return $this;
    }

    public function getAreas(): ?Areas
    {
        return $this->areas;
    }

    public function setAreas(?Areas $areas): RealEstate
    {
        $this->areas = $areas;

        return $this;
    }

    public function getEquipment(): ?Equipment
    {
        return $this->equipment;
    }

    public function setEquipment(?Equipment $equipment): RealEstate
    {
        $this->equipment = $equipment;

        return $this;
    }

    public function getConditionInformation(): ?ConditionInformation
    {
        return $this->conditionInformation;
    }

    public function setConditionInformation(?ConditionInformation $conditionInformation): RealEstate
    {
        $this->conditionInformation = $conditionInformation;

        return $this;
    }

    public function getEvaluation(): ?Evaluation
    {
        return $this->evaluation;
    }

    public function setEvaluation(?Evaluation $evaluation): RealEstate
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getInfrastructure(): ?Infrastructure
    {
        return $this->infrastructure;
    }

    public function setInfrastructure(?Infrastructure $infrastructure): RealEstate
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    public function getFreeTexts(): ?FreeTexts
    {
        return $this->freeTexts;
    }

    public function setFreeTexts(?FreeTexts $freeTexts): RealEstate
    {
        $this->freeTexts = $freeTexts;

        return $this;
    }

    public function getAttachments(): ?Attachments
    {
        return $this->attachments;
    }

    public function setAttachments(?Attachments $attachments): RealEstate
    {
        $this->attachments = $attachments;

        return $this;
    }

    public function getPropertyManagement(): ?PropertyManagement
    {
        return $this->propertyManagement;
    }

    public function setPropertyManagement(?PropertyManagement $propertyManagement): RealEstate
    {
        $this->propertyManagement = $propertyManagement;

        return $this;
    }

    public function getTechnicalManagement(): ?TechnicalManagement
    {
        return $this->technicalManagement;
    }

    public function setTechnicalManagement(?TechnicalManagement $technicalManagement): RealEstate
    {
        $this->technicalManagement = $technicalManagement;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): RealEstate
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): RealEstate
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

    public function setUserDefinedExtend(array $userDefinedExtend): RealEstate
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
