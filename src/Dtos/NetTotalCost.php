<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetTotalCost
 * Die Summe alle Nebenkosten und Mietzinse bei Miete, UmSt. im Attribut.
 *
 */
#[XmlRoot(name: "gesamtbelastungnetto")]
class NetTotalCost
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("gesamtbelastungust")]
        protected ?float $totalCostVAT = null,
        #[Inline]
        #[Type("float")]
        protected ?float $value = null
    ) {}

    public function getTotalCostVAT(): ?float
    {
        return $this->totalCostVAT;
    }

    public function setTotalCostVAT(?float $totalCostVAT): NetTotalCost
    {
        $this->totalCostVAT = $totalCostVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetTotalCost
    {
        $this->value = $value;

        return $this;
    }
}
