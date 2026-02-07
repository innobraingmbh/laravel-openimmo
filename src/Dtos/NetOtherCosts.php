<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetOtherCosts
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 */
#[XmlRoot(name: 'sonstigekostennetto')]
class NetOtherCosts
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('sonstigekostenust')]
        protected ?float $otherCostsVAT = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getOtherCostsVAT(): ?float
    {
        return $this->otherCostsVAT;
    }

    public function setOtherCostsVAT(?float $otherCostsVAT): NetOtherCosts
    {
        $this->otherCostsVAT = $otherCostsVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetOtherCosts
    {
        $this->value = $value;

        return $this;
    }
}
