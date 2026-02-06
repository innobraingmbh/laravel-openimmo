<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class FreeTexts
 *
 */
#[XmlRoot(name: "freitexte")]
class FreeTexts
{
    public function __construct(
        #[Type("string")]
        #[SerializedName("objekttitel")]
        protected ?string $propertyTitle = null,
        #[Type("string")]
        #[SerializedName("dreizeiler")]
        protected ?string $threeLines = null,
        #[Type("string")]
        #[SerializedName("lage")]
        protected ?string $location = null,
        #[Type("string")]
        #[SerializedName("ausstatt_beschr")]
        protected ?string $equipmentDescription = null,
        #[Type("string")]
        #[SerializedName("objektbeschreibung")]
        protected ?string $propertyDescription = null,
        #[Type("string")]
        #[SerializedName("sonstige_angaben")]
        protected ?string $otherInformation = null,
        #[Type("Innobrain\OpenImmo\Dtos\PropertyText")]
        #[SerializedName("objekt_text")]
        protected ?PropertyText $propertyText = null,
        #[XmlList(inline: true, entry: "user_defined_simplefield")]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")]
        #[SkipWhenEmpty]
        #[SerializedName("user_defined_simplefield")]
        protected array $userDefinedSimplefield = [],
        #[XmlList(inline: true, entry: "user_defined_anyfield")]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")]
        #[SkipWhenEmpty]
        #[SerializedName("user_defined_anyfield")]
        protected array $userDefinedAnyfield = [],
        #[XmlList(inline: true, entry: "user_defined_extend")]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")]
        #[SkipWhenEmpty]
        #[SerializedName("user_defined_extend")]
        protected array $userDefinedExtend = []
    ) {}

    public function getPropertyTitle(): ?string
    {
        return $this->propertyTitle;
    }

    public function setPropertyTitle(?string $propertyTitle): FreeTexts
    {
        $this->propertyTitle = $propertyTitle;

        return $this;
    }

    public function getThreeLines(): ?string
    {
        return $this->threeLines;
    }

    public function setThreeLines(?string $threeLines): FreeTexts
    {
        $this->threeLines = $threeLines;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): FreeTexts
    {
        $this->location = $location;

        return $this;
    }

    public function getEquipmentDescription(): ?string
    {
        return $this->equipmentDescription;
    }

    public function setEquipmentDescription(?string $equipmentDescription): FreeTexts
    {
        $this->equipmentDescription = $equipmentDescription;

        return $this;
    }

    public function getPropertyDescription(): ?string
    {
        return $this->propertyDescription;
    }

    public function setPropertyDescription(?string $propertyDescription): FreeTexts
    {
        $this->propertyDescription = $propertyDescription;

        return $this;
    }

    public function getOtherInformation(): ?string
    {
        return $this->otherInformation;
    }

    public function setOtherInformation(?string $otherInformation): FreeTexts
    {
        $this->otherInformation = $otherInformation;

        return $this;
    }

    public function getPropertyText(): ?PropertyText
    {
        return $this->propertyText;
    }

    public function setPropertyText(?PropertyText $propertyText): FreeTexts
    {
        $this->propertyText = $propertyText;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): FreeTexts
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): FreeTexts
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

    public function setUserDefinedExtend(array $userDefinedExtend): FreeTexts
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
