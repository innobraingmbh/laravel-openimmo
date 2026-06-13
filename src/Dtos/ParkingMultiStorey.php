<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingMultiStorey
 *
 * @description Parking space of type multi-storey car park
 */
#[XmlRoot(name: 'stp_parkhaus')]
class ParkingMultiStorey
{
    public function __construct(
        /**
         * optional
         *
         * @description Rental price of the parking space
         */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzmiete')]
        protected ?float $parkingSpaceRent = null,
        /**
         * optional
         *
         * @description Purchase price of the parking space
         */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzkaufpreis')]
        protected ?float $parkingSpacePurchasePrice = null,
        /**
         * optional
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         *
         * @description Quantity or count
         */
        #[Type('int')]
        #[XmlAttribute]
        #[SerializedName('anzahl')]
        protected ?int $quantity = null
    ) {}

    public function getParkingSpaceRent(): ?float
    {
        return $this->parkingSpaceRent;
    }

    public function setParkingSpaceRent(?float $parkingSpaceRent): ParkingMultiStorey
    {
        $this->parkingSpaceRent = $parkingSpaceRent;

        return $this;
    }

    public function getParkingSpacePurchasePrice(): ?float
    {
        return $this->parkingSpacePurchasePrice;
    }

    public function setParkingSpacePurchasePrice(?float $parkingSpacePurchasePrice): ParkingMultiStorey
    {
        $this->parkingSpacePurchasePrice = $parkingSpacePurchasePrice;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): ParkingMultiStorey
    {
        $this->quantity = $quantity;

        return $this;
    }
}
