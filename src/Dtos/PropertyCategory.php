<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PropertyCategory
 */
#[XmlRoot(name: 'objektkategorie')]
class PropertyCategory
{
    public function __construct(
        #[Type("Innobrain\OpenImmo\Dtos\TypeOfUse")]
        #[SerializedName('nutzungsart')]
        protected ?TypeOfUse $typeOfUse = null,
        #[Type("Innobrain\OpenImmo\Dtos\MarketingType")]
        #[SerializedName('vermarktungsart')]
        protected ?MarketingType $marketingType = null,
        #[Type("Innobrain\OpenImmo\Dtos\PropertyType")]
        #[SerializedName('objektart')]
        protected ?PropertyType $propertyType = null,
        #[XmlList(inline: true, entry: 'user_defined_simplefield')]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(inline: true, entry: 'user_defined_anyfield')]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(inline: true, entry: 'user_defined_extend')]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getTypeOfUse(): ?TypeOfUse
    {
        return $this->typeOfUse;
    }

    public function setTypeOfUse(?TypeOfUse $typeOfUse): PropertyCategory
    {
        $this->typeOfUse = $typeOfUse;

        return $this;
    }

    public function getMarketingType(): ?MarketingType
    {
        return $this->marketingType;
    }

    public function setMarketingType(?MarketingType $marketingType): PropertyCategory
    {
        $this->marketingType = $marketingType;

        return $this;
    }

    public function getPropertyType(): ?PropertyType
    {
        return $this->propertyType;
    }

    public function setPropertyType(?PropertyType $propertyType): PropertyCategory
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): PropertyCategory
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): PropertyCategory
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

    public function setUserDefinedExtend(array $userDefinedExtend): PropertyCategory
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
