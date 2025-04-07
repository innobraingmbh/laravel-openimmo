<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingUnderground
 *
 * @XmlRoot("stp_tiefgarage")
 */
class ParkingUnderground
{
    public function __construct(
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("stellplatzmiete")
         * optional
         */
        protected ?float $parkingSpaceRent = null,
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("stellplatzkaufpreis")
         * optional
         */
        protected ?float $parkingSpacePurchasePrice = null,
        /**
         * @Type("int")
         *
         * @XmlAttribute
         *
         * @SerializedName("anzahl")
         * optional
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        protected ?int $quantity = null
    ) {}

    public function getParkingSpaceRent(): ?float
    {
        return $this->parkingSpaceRent;
    }

    public function setParkingSpaceRent(?float $parkingSpaceRent): ParkingUnderground
    {
        $this->parkingSpaceRent = $parkingSpaceRent;

        return $this;
    }

    public function getParkingSpacePurchasePrice(): ?float
    {
        return $this->parkingSpacePurchasePrice;
    }

    public function setParkingSpacePurchasePrice(?float $parkingSpacePurchasePrice): ParkingUnderground
    {
        $this->parkingSpacePurchasePrice = $parkingSpacePurchasePrice;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): ParkingUnderground
    {
        $this->quantity = $quantity;

        return $this;
    }
}
