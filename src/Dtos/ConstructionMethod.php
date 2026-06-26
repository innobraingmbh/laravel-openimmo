<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ConstructionMethod
 */
#[Description('Construction method of the property')]
#[XmlRoot(name: 'bauweise')]
class ConstructionMethod
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MASSIV')]
        #[Description('Solid (masonry) construction method')]
        protected ?bool $solid = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERTIGTEILE')]
        #[Description('Prefabricated parts construction method')]
        protected ?bool $prefabricatedParts = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HOLZ')]
        #[Description('Wood as heating energy source')]
        protected ?bool $wood = null
    ) {}

    public function getSolid(): ?bool
    {
        return $this->solid;
    }

    public function setSolid(?bool $solid): ConstructionMethod
    {
        $this->solid = $solid;

        return $this;
    }

    public function getPrefabricatedParts(): ?bool
    {
        return $this->prefabricatedParts;
    }

    public function setPrefabricatedParts(?bool $prefabricatedParts): ConstructionMethod
    {
        $this->prefabricatedParts = $prefabricatedParts;

        return $this;
    }

    public function getWood(): ?bool
    {
        return $this->wood;
    }

    public function setWood(?bool $wood): ConstructionMethod
    {
        $this->wood = $wood;

        return $this;
    }
}
