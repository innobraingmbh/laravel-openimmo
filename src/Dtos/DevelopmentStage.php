<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DevelopmentStage
 *
 * @XmlRoot("ausbaustufe")
 */
class DevelopmentStage
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("BAUSATZHAUS")
         * optional
         */
        protected ?bool $prefabricatedHouse = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("AUSBAUHAUS")
         * optional
         */
        protected ?bool $expandableHouse = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("SCHLUESSELFERTIGMITKELLER")
         * optional
         */
        protected ?bool $turnkeyWithBasement = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("SCHLUESSELFERTIGOHNEBODENPLATTE")
         * optional
         */
        protected ?bool $turnkeyWithoutFoundation = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("SCHLUESSELFERTIGMITBODENPLATTE")
         * optional
         */
        protected ?bool $turnkeyWithFoundation = null
    ) {}

    public function getPrefabricatedHouse(): ?bool
    {
        return $this->prefabricatedHouse;
    }

    public function setPrefabricatedHouse(?bool $prefabricatedHouse): DevelopmentStage
    {
        $this->prefabricatedHouse = $prefabricatedHouse;

        return $this;
    }

    public function getExpandableHouse(): ?bool
    {
        return $this->expandableHouse;
    }

    public function setExpandableHouse(?bool $expandableHouse): DevelopmentStage
    {
        $this->expandableHouse = $expandableHouse;

        return $this;
    }

    public function getTurnkeyWithBasement(): ?bool
    {
        return $this->turnkeyWithBasement;
    }

    public function setTurnkeyWithBasement(?bool $turnkeyWithBasement): DevelopmentStage
    {
        $this->turnkeyWithBasement = $turnkeyWithBasement;

        return $this;
    }

    public function getTurnkeyWithoutFoundation(): ?bool
    {
        return $this->turnkeyWithoutFoundation;
    }

    public function setTurnkeyWithoutFoundation(?bool $turnkeyWithoutFoundation): DevelopmentStage
    {
        $this->turnkeyWithoutFoundation = $turnkeyWithoutFoundation;

        return $this;
    }

    public function getTurnkeyWithFoundation(): ?bool
    {
        return $this->turnkeyWithFoundation;
    }

    public function setTurnkeyWithFoundation(?bool $turnkeyWithFoundation): DevelopmentStage
    {
        $this->turnkeyWithFoundation = $turnkeyWithFoundation;

        return $this;
    }
}
