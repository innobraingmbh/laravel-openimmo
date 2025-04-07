<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AttachedGastronomy
 * Welcher Art ist die angeschlossene Gastronomie, Optionen kombinierbar
 *
 * @XmlRoot("angeschl_gastronomie")
 */
class AttachedGastronomy
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("HOTELRESTAURANT")
         * optional
         */
        protected ?bool $hotelRestaurant = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("BAR")
         * optional
         */
        protected ?bool $cash = null
    ) {}

    public function getHotelRestaurant(): ?bool
    {
        return $this->hotelRestaurant;
    }

    public function setHotelRestaurant(?bool $hotelRestaurant): AttachedGastronomy
    {
        $this->hotelRestaurant = $hotelRestaurant;

        return $this;
    }

    public function getCash(): ?bool
    {
        return $this->cash;
    }

    public function setCash(?bool $cash): AttachedGastronomy
    {
        $this->cash = $cash;

        return $this;
    }
}
