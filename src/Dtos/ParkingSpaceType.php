<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingSpaceType
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 *
 * @XmlRoot("stellplatzart")
 */
class ParkingSpaceType
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("GARAGE")
     * optional
     */
    protected ?bool $garage = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("TIEFGARAGE")
     * optional
     */
    protected ?bool $undergroundParking = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("CARPORT")
     * optional
     */
    protected ?bool $carport = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("FREIPLATZ")
     * optional
     */
    protected ?bool $openSpace = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("PARKHAUS")
     * optional
     */
    protected ?bool $parkingGarage = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("DUPLEX")
     * optional
     */
    protected ?bool $duplex = null;

    public function __construct(
        ?bool $garage = null,
        ?bool $undergroundParking = null,
        ?bool $carport = null,
        ?bool $openSpace = null,
        ?bool $parkingGarage = null,
        ?bool $duplex = null,
    ) {
        $this->garage = $garage;
        $this->undergroundParking = $undergroundParking;
        $this->carport = $carport;
        $this->openSpace = $openSpace;
        $this->parkingGarage = $parkingGarage;
        $this->duplex = $duplex;
    }

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
