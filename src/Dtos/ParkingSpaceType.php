<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingSpaceType
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 */
#[XmlRoot(name: 'stellplatzart')]
class ParkingSpaceType
{
    public function __construct(
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GARAGE')]
        protected ?bool $garage = null,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TIEFGARAGE')]
        protected ?bool $undergroundParking = null,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('CARPORT')]
        protected ?bool $carport = null,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FREIPLATZ')]
        protected ?bool $openSpace = null,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PARKHAUS')]
        protected ?bool $parkingGarage = null,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DUPLEX')]
        protected ?bool $duplex = null
    ) {}

    public function getGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(?bool $garage): ParkingSpaceType
    {
        $this->garage = $garage;

        return $this;
    }

    public function getUndergroundParking(): ?bool
    {
        return $this->undergroundParking;
    }

    public function setUndergroundParking(?bool $undergroundParking): ParkingSpaceType
    {
        $this->undergroundParking = $undergroundParking;

        return $this;
    }

    public function getCarport(): ?bool
    {
        return $this->carport;
    }

    public function setCarport(?bool $carport): ParkingSpaceType
    {
        $this->carport = $carport;

        return $this;
    }

    public function getOpenSpace(): ?bool
    {
        return $this->openSpace;
    }

    public function setOpenSpace(?bool $openSpace): ParkingSpaceType
    {
        $this->openSpace = $openSpace;

        return $this;
    }

    public function getParkingGarage(): ?bool
    {
        return $this->parkingGarage;
    }

    public function setParkingGarage(?bool $parkingGarage): ParkingSpaceType
    {
        $this->parkingGarage = $parkingGarage;

        return $this;
    }

    public function getDuplex(): ?bool
    {
        return $this->duplex;
    }

    public function setDuplex(?bool $duplex): ParkingSpaceType
    {
        $this->duplex = $duplex;

        return $this;
    }
}
