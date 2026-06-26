<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AngeschlGastronomie
 * Welcher Art ist die angeschlossene Gastronomie, Optionen kombinierbar
 */
#[Description('Angeschlossene Gastronomie (z.B. Restaurant, Bar)')]
#[XmlRoot(name: 'angeschl_gastronomie')]
class AngeschlGastronomie
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HOTELRESTAURANT')]
        #[Description('Hotel oder Restaurant vorhanden')]
        protected ?bool $hotelrestaurant = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BAR')]
        #[Description('Barzahlung möglich')]
        protected ?bool $bar = null
    ) {}

    public function getHotelrestaurant(): ?bool
    {
        return $this->hotelrestaurant;
    }

    public function setHotelrestaurant(?bool $hotelrestaurant): AngeschlGastronomie
    {
        $this->hotelrestaurant = $hotelrestaurant;

        return $this;
    }

    public function getBar(): ?bool
    {
        return $this->bar;
    }

    public function setBar(?bool $bar): AngeschlGastronomie
    {
        $this->bar = $bar;

        return $this;
    }
}
