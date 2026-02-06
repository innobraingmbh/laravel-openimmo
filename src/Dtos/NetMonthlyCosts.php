<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetMonthlyCosts
 * Summe der Monatlichen Kosten einer Wohnung als Information für einen Käufer (Netto), Umst im Attribut.
 *
 */
#[XmlRoot(name: "monatlichekostennetto")]
class NetMonthlyCosts
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("monatlichekostenust")]
        protected ?float $monthlyCostsVAT = null,
        #[Inline]
        #[Type("float")]
        protected ?float $value = null
    ) {}

    public function getMonthlyCostsVAT(): ?float
    {
        return $this->monthlyCostsVAT;
    }

    public function setMonthlyCostsVAT(?float $monthlyCostsVAT): NetMonthlyCosts
    {
        $this->monthlyCostsVAT = $monthlyCostsVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetMonthlyCosts
    {
        $this->value = $value;

        return $this;
    }
}
