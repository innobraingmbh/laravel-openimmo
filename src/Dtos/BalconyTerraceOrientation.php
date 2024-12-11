<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BalconyTerraceOrientation
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 *
 * @XmlRoot("ausricht_balkon_terrasse")
 */
class BalconyTerraceOrientation
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("NORD")
         * optional
         */
        protected ?bool $north = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("OST")
         * optional
         */
        protected ?bool $east = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("SUED")
         * optional
         */
        protected ?bool $south = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("WEST")
         * optional
         */
        protected ?bool $west = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("NORDOST")
         * optional
         */
        protected ?bool $northeast = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("NORDWEST")
         * optional
         */
        protected ?bool $northwest = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("SUEDOST")
         * optional
         */
        protected ?bool $southeast = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("SUEDWEST")
         * optional
         */
        protected ?bool $southwest = null
    ) {}

    public function getNorth(): ?bool
    {
        return $this->north;
    }

    public function setNorth(?bool $north): BalconyTerraceOrientation
    {
        $this->north = $north;

        return $this;
    }

    public function getEast(): ?bool
    {
        return $this->east;
    }

    public function setEast(?bool $east): BalconyTerraceOrientation
    {
        $this->east = $east;

        return $this;
    }

    public function getSouth(): ?bool
    {
        return $this->south;
    }

    public function setSouth(?bool $south): BalconyTerraceOrientation
    {
        $this->south = $south;

        return $this;
    }

    public function getWest(): ?bool
    {
        return $this->west;
    }

    public function setWest(?bool $west): BalconyTerraceOrientation
    {
        $this->west = $west;

        return $this;
    }

    public function getNortheast(): ?bool
    {
        return $this->northeast;
    }

    public function setNortheast(?bool $northeast): BalconyTerraceOrientation
    {
        $this->northeast = $northeast;

        return $this;
    }

    public function getNorthwest(): ?bool
    {
        return $this->northwest;
    }

    public function setNorthwest(?bool $northwest): BalconyTerraceOrientation
    {
        $this->northwest = $northwest;

        return $this;
    }

    public function getSoutheast(): ?bool
    {
        return $this->southeast;
    }

    public function setSoutheast(?bool $southeast): BalconyTerraceOrientation
    {
        $this->southeast = $southeast;

        return $this;
    }

    public function getSouthwest(): ?bool
    {
        return $this->southwest;
    }

    public function setSouthwest(?bool $southwest): BalconyTerraceOrientation
    {
        $this->southwest = $southwest;

        return $this;
    }
}
