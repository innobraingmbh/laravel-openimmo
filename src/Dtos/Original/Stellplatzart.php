<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Stellplatzart
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 */
#[XmlRoot(name: 'stellplatzart')]
class Stellplatzart
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GARAGE')]
        protected ?bool $garage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TIEFGARAGE')]
        protected ?bool $tiefgarage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('CARPORT')]
        protected ?bool $carport = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FREIPLATZ')]
        protected ?bool $freiplatz = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PARKHAUS')]
        protected ?bool $parkhaus = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DUPLEX')]
        protected ?bool $duplex = null
    ) {}

    public function getGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(?bool $garage): Stellplatzart
    {
        $this->garage = $garage;

        return $this;
    }

    public function getTiefgarage(): ?bool
    {
        return $this->tiefgarage;
    }

    public function setTiefgarage(?bool $tiefgarage): Stellplatzart
    {
        $this->tiefgarage = $tiefgarage;

        return $this;
    }

    public function getCarport(): ?bool
    {
        return $this->carport;
    }

    public function setCarport(?bool $carport): Stellplatzart
    {
        $this->carport = $carport;

        return $this;
    }

    public function getFreiplatz(): ?bool
    {
        return $this->freiplatz;
    }

    public function setFreiplatz(?bool $freiplatz): Stellplatzart
    {
        $this->freiplatz = $freiplatz;

        return $this;
    }

    public function getParkhaus(): ?bool
    {
        return $this->parkhaus;
    }

    public function setParkhaus(?bool $parkhaus): Stellplatzart
    {
        $this->parkhaus = $parkhaus;

        return $this;
    }

    public function getDuplex(): ?bool
    {
        return $this->duplex;
    }

    public function setDuplex(?bool $duplex): Stellplatzart
    {
        $this->duplex = $duplex;

        return $this;
    }
}
