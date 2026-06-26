<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HeatingType
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 */
#[Description('Type of heating system (e.g. central heating, underfloor heating)')]
#[XmlRoot(name: 'heizungsart')]
class HeatingType
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OFEN')]
        #[Description('Stove or wood-burning stove available')]
        protected ?bool $stove = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ETAGE')]
        #[Description('Floor level of the unit within the building')]
        protected ?bool $floor = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ZENTRAL')]
        #[Description('Central heating system available')]
        protected ?bool $central = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERN')]
        #[Description('Remote location of the property')]
        protected ?bool $remote = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FUSSBODEN')]
        #[Description('Flooring of the property')]
        protected ?bool $flooring = null
    ) {}

    public function getStove(): ?bool
    {
        return $this->stove;
    }

    public function setStove(?bool $stove): HeatingType
    {
        $this->stove = $stove;

        return $this;
    }

    public function getFloor(): ?bool
    {
        return $this->floor;
    }

    public function setFloor(?bool $floor): HeatingType
    {
        $this->floor = $floor;

        return $this;
    }

    public function getCentral(): ?bool
    {
        return $this->central;
    }

    public function setCentral(?bool $central): HeatingType
    {
        $this->central = $central;

        return $this;
    }

    public function getRemote(): ?bool
    {
        return $this->remote;
    }

    public function setRemote(?bool $remote): HeatingType
    {
        $this->remote = $remote;

        return $this;
    }

    public function getFlooring(): ?bool
    {
        return $this->flooring;
    }

    public function setFlooring(?bool $flooring): HeatingType
    {
        $this->flooring = $flooring;

        return $this;
    }
}
