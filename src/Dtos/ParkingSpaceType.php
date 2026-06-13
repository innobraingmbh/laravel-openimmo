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
 *
 * @description Type of parking space
 */
#[XmlRoot(name: 'stellplatzart')]
class ParkingSpaceType
{
    public function __construct(
        /**
         * optional
         *
         * @description Garage available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GARAGE')]
        protected ?bool $garage = null,
        /**
         * optional
         *
         * @description Underground parking space available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TIEFGARAGE')]
        protected ?bool $undergroundParking = null,
        /**
         * optional
         *
         * @description Carport available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('CARPORT')]
        protected ?bool $carport = null,
        /**
         * optional
         *
         * @description Open space area in square meters
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FREIPLATZ')]
        protected ?bool $openSpace = null,
        /**
         * optional
         *
         * @description Garage parking space
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PARKHAUS')]
        protected ?bool $parkingGarage = null,
        /**
         * optional
         *
         * @description Duplex parking space available
         */
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
