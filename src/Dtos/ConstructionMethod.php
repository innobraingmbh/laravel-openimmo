<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ConstructionMethod
 *
 * @XmlRoot("bauweise")
 */
class ConstructionMethod
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("MASSIV")
         * optional
         */
        protected ?bool $solid = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("FERTIGTEILE")
         * optional
         */
        protected ?bool $prefabricatedParts = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("HOLZ")
         * optional
         */
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
