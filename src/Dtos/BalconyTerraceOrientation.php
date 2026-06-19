<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BalconyTerraceOrientation
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 */
#[Description('Orientation of balcony or terrace')]
#[XmlRoot(name: 'ausricht_balkon_terrasse')]
class BalconyTerraceOrientation
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NORD')]
        #[Description('North orientation')]
        protected ?bool $north = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OST')]
        #[Description('East orientation')]
        protected ?bool $east = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SUED')]
        #[Description('South orientation')]
        protected ?bool $south = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WEST')]
        #[Description('West orientation')]
        protected ?bool $west = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NORDOST')]
        #[Description('Northeast orientation')]
        protected ?bool $northeast = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NORDWEST')]
        #[Description('Northwest orientation')]
        protected ?bool $northwest = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SUEDOST')]
        #[Description('Southeast orientation')]
        protected ?bool $southeast = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SUEDWEST')]
        #[Description('Southwest orientation')]
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
