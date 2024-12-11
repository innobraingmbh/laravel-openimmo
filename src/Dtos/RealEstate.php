<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class RealEstate
 * Angaben einer einzelnen Immobile
 *
 * @XmlRoot("immobilie")
 */
class RealEstate
{
    public function __construct(
        /**
         * @Type("Katalam\OpenImmo\Dtos\PropertyCategory")
         *
         * @SerializedName("objektkategorie")
         */
        protected ?PropertyCategory $propertyCategory = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Geo")
         *
         * @SerializedName("geo")
         */
        protected ?Geo $geo = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\ContactPerson")
         *
         * @SerializedName("kontaktperson")
         */
        protected ?ContactPerson $contactPerson = null,
        /**
         * @XmlList(inline = true, entry = "weitere_adresse")
         *
         * @Type("array<Katalam\OpenImmo\Dtos\AdditionalAddress>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("weitere_adresse")
         */
        protected array $additionalAddress = [],
        /**
         * @Type("Katalam\OpenImmo\Dtos\Prices")
         *
         * @SerializedName("preise")
         */
        protected ?Prices $prices = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\BiddingProcess")
         *
         * @SerializedName("bieterverfahren")
         */
        protected ?BiddingProcess $biddingProcess = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Auction")
         *
         * @SerializedName("versteigerung")
         */
        protected ?Auction $auction = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Areas")
         *
         * @SerializedName("flaechen")
         */
        protected ?Areas $areas = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Equipment")
         *
         * @SerializedName("ausstattung")
         */
        protected ?Equipment $equipment = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\ConditionInformation")
         *
         * @SerializedName("zustand_angaben")
         */
        protected ?ConditionInformation $conditionInformation = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Evaluation")
         *
         * @SerializedName("bewertung")
         */
        protected ?Evaluation $evaluation = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Infrastructure")
         *
         * @SerializedName("infrastruktur")
         */
        protected ?Infrastructure $infrastructure = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\FreeTexts")
         *
         * @SerializedName("freitexte")
         */
        protected ?FreeTexts $freeTexts = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\Attachments")
         *
         * @SerializedName("anhaenge")
         */
        protected ?Attachments $attachments = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\PropertyManagement")
         *
         * @SerializedName("verwaltung_objekt")
         */
        protected ?PropertyManagement $propertyManagement = null,
        /**
         * @Type("Katalam\OpenImmo\Dtos\TechnicalManagement")
         *
         * @SerializedName("verwaltung_techn")
         */
        protected ?TechnicalManagement $technicalManagement = null,
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
        return $this->additionalAddress ?? [];
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
        return $this->userDefinedSimplefield ?? [];
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
        return $this->userDefinedAnyfield ?? [];
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
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): RealEstate
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
