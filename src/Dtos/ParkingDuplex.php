<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingDuplex
 */
#[Description('Parking space of type duplex parking system')]
#[XmlRoot(name: 'stp_duplex')]
class ParkingDuplex
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzmiete')]
        #[Description('Rental price of the parking space')]
        protected ?float $parkingSpaceRent = null,
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzkaufpreis')]
        #[Description('Purchase price of the parking space')]
        protected ?float $parkingSpacePurchasePrice = null,
        /**
         * optional
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[XmlAttribute]
        #[SerializedName('anzahl')]
        #[Description('Quantity or count')]
        protected ?int $quantity = null
    ) {}

    public function getParkingSpaceRent(): ?float
    {
        return $this->parkingSpaceRent;
    }

    public function setParkingSpaceRent(?float $parkingSpaceRent): ParkingDuplex
    {
        $this->parkingSpaceRent = $parkingSpaceRent;

        return $this;
    }

    public function getParkingSpacePurchasePrice(): ?float
    {
        return $this->parkingSpacePurchasePrice;
    }

    public function setParkingSpacePurchasePrice(?float $parkingSpacePurchasePrice): ParkingDuplex
    {
        $this->parkingSpacePurchasePrice = $parkingSpacePurchasePrice;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): ParkingDuplex
    {
        $this->quantity = $quantity;

        return $this;
    }
}
