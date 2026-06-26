<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetTotalRent
 * Gesamtsumme der Mietkosten, UmSt. im Attribut.
 */
#[Description('Net total rent (excluding VAT)')]
#[XmlRoot(name: 'summemietenetto')]
class NetTotalRent
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('summemieteust')]
        #[Description('VAT portion of the total rent')]
        protected ?float $totalRentVAT = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getTotalRentVAT(): ?float
    {
        return $this->totalRentVAT;
    }

    public function setTotalRentVAT(?float $totalRentVAT): NetTotalRent
    {
        $this->totalRentVAT = $totalRentVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetTotalRent
    {
        $this->value = $value;

        return $this;
    }
}
