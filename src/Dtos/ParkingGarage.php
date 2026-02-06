<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingGarage
 *
 */
#[XmlRoot(name: "stp_garage")]
class ParkingGarage
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("stellplatzmiete")]
        protected ?float $parkingSpaceRent = null,
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("stellplatzkaufpreis")]
        protected ?float $parkingSpacePurchasePrice = null,
        #[Type("int")]
        #[XmlAttribute]
        #[SerializedName("anzahl")]
        protected ?int $quantity = null
    ) {}

    public function getParkingSpaceRent(): ?float
    {
        return $this->parkingSpaceRent;
    }

    public function setParkingSpaceRent(?float $parkingSpaceRent): ParkingGarage
    {
        $this->parkingSpaceRent = $parkingSpaceRent;

        return $this;
    }

    public function getParkingSpacePurchasePrice(): ?float
    {
        return $this->parkingSpacePurchasePrice;
    }

    public function setParkingSpacePurchasePrice(?float $parkingSpacePurchasePrice): ParkingGarage
    {
        $this->parkingSpacePurchasePrice = $parkingSpacePurchasePrice;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): ParkingGarage
    {
        $this->quantity = $quantity;

        return $this;
    }
}
