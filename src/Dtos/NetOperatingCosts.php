<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetOperatingCosts
 * Betriebskosten eines Objektes bei Vermietun, UmSt. im Attribut
 *
 */
#[XmlRoot(name: "betriebskostennetto")]
class NetOperatingCosts
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("betriebskostenust")]
        protected ?float $operatingCostsVAT = null,
        #[Inline]
        #[Type("float")]
        protected ?float $value = null
    ) {}

    public function getOperatingCostsVAT(): ?float
    {
        return $this->operatingCostsVAT;
    }

    public function setOperatingCostsVAT(?float $operatingCostsVAT): NetOperatingCosts
    {
        $this->operatingCostsVAT = $operatingCostsVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetOperatingCosts
    {
        $this->value = $value;

        return $this;
    }
}
