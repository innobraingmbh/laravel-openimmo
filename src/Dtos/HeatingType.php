<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HeatingType
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 */
#[XmlRoot(name: "heizungsart")]
class HeatingType
{
    public function __construct(
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("OFEN")]
        protected ?bool $stove = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ETAGE")]
        protected ?bool $floor = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ZENTRAL")]
        protected ?bool $central = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("FERN")]
        protected ?bool $remote = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("FUSSBODEN")]
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
