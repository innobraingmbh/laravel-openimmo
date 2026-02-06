<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ConditionInformation
 */
#[XmlRoot(name: 'zustand_angaben')]
class ConditionInformation
{
    public function __construct(
        #[Type('string')]
        #[SerializedName('baujahr')]
        protected ?string $yearOfConstruction = null,
        #[Type('string')]
        #[SerializedName('letztemodernisierung')]
        protected ?string $lastModernization = null,
        #[Type(Condition::class)]
        #[SerializedName('zustand')]
        protected ?Condition $condition = null,
        #[Type(Age::class)]
        #[SerializedName('alter')]
        protected ?Age $age = null,
        #[Type(DevelopableAccordingTo::class)]
        #[SerializedName('bebaubar_nach')]
        protected ?DevelopableAccordingTo $developableAccordingTo = null,
        #[Type(Development::class)]
        #[SerializedName('erschliessung')]
        protected ?Development $development = null,
        #[Type(DevelopmentScope::class)]
        #[SerializedName('erschliessung_umfang')]
        protected ?DevelopmentScope $developmentScope = null,
        #[Type('string')]
        #[SerializedName('bauzone')]
        protected ?string $constructionZone = null,
        #[Type('string')]
        #[SerializedName('altlasten')]
        protected ?string $contamination = null,
        #[XmlList(entry: 'energiepass', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\EnergyPerformanceCertificate>")]
        #[SkipWhenEmpty]
        #[SerializedName('energiepass')]
        protected array $energyCertificate = [],
        #[Type(SalesStatus::class)]
        #[SerializedName('verkaufstatus')]
        protected ?SalesStatus $salesStatus = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getYearOfConstruction(): ?string
    {
        return $this->yearOfConstruction;
    }

    public function setYearOfConstruction(?string $yearOfConstruction): ConditionInformation
    {
        $this->yearOfConstruction = $yearOfConstruction;

        return $this;
    }

    public function getLastModernization(): ?string
    {
        return $this->lastModernization;
    }

    public function setLastModernization(?string $lastModernization): ConditionInformation
    {
        $this->lastModernization = $lastModernization;

        return $this;
    }

    public function getCondition(): ?Condition
    {
        return $this->condition;
    }

    public function setCondition(?Condition $condition): ConditionInformation
    {
        $this->condition = $condition;

        return $this;
    }

    public function getAge(): ?Age
    {
        return $this->age;
    }

    public function setAge(?Age $age): ConditionInformation
    {
        $this->age = $age;

        return $this;
    }

    public function getDevelopableAccordingTo(): ?DevelopableAccordingTo
    {
        return $this->developableAccordingTo;
    }

    public function setDevelopableAccordingTo(?DevelopableAccordingTo $developableAccordingTo): ConditionInformation
    {
        $this->developableAccordingTo = $developableAccordingTo;

        return $this;
    }

    public function getDevelopment(): ?Development
    {
        return $this->development;
    }

    public function setDevelopment(?Development $development): ConditionInformation
    {
        $this->development = $development;

        return $this;
    }

    public function getDevelopmentScope(): ?DevelopmentScope
    {
        return $this->developmentScope;
    }

    public function setDevelopmentScope(?DevelopmentScope $developmentScope): ConditionInformation
    {
        $this->developmentScope = $developmentScope;

        return $this;
    }

    public function getConstructionZone(): ?string
    {
        return $this->constructionZone;
    }

    public function setConstructionZone(?string $constructionZone): ConditionInformation
    {
        $this->constructionZone = $constructionZone;

        return $this;
    }

    public function getContamination(): ?string
    {
        return $this->contamination;
    }

    public function setContamination(?string $contamination): ConditionInformation
    {
        $this->contamination = $contamination;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEnergyCertificate(): array
    {
        return $this->energyCertificate;
    }

    public function setEnergyCertificate(array $energyCertificate): ConditionInformation
    {
        $this->energyCertificate = $energyCertificate;

        return $this;
    }

    public function getSalesStatus(): ?SalesStatus
    {
        return $this->salesStatus;
    }

    public function setSalesStatus(?SalesStatus $salesStatus): ConditionInformation
    {
        $this->salesStatus = $salesStatus;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): ConditionInformation
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): ConditionInformation
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

    public function setUserDefinedExtend(array $userDefinedExtend): ConditionInformation
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
