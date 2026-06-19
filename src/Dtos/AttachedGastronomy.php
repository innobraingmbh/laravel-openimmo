<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AttachedGastronomy
 * Welcher Art ist die angeschlossene Gastronomie, Optionen kombinierbar
 */
#[Description('Attached gastronomy (e.g. restaurant, bar)')]
#[XmlRoot(name: 'angeschl_gastronomie')]
class AttachedGastronomy
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HOTELRESTAURANT')]
        #[Description('Hotel or restaurant available')]
        protected ?bool $hotelRestaurant = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BAR')]
        #[Description('Cash payment possible')]
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
