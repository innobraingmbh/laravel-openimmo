<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingSpaceType
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 */
#[Description('Type of parking space')]
#[XmlRoot(name: 'stellplatzart')]
class ParkingSpaceType
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GARAGE')]
        #[Description('Garage available')]
        protected ?bool $garage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TIEFGARAGE')]
        #[Description('Underground parking space available')]
        protected ?bool $undergroundParking = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('CARPORT')]
        #[Description('Carport available')]
        protected ?bool $carport = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FREIPLATZ')]
        #[Description('Open space area in square meters')]
        protected ?bool $openSpace = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PARKHAUS')]
        #[Description('Garage parking space')]
        protected ?bool $parkingGarage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DUPLEX')]
        #[Description('Duplex parking space available')]
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
