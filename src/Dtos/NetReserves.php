<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetReserves
 * Vorhanden Rücklagen bei einem Kauf Objekt, UmSt. im Attribut.
 *
 */
#[XmlRoot(name: "ruecklagenetto")]
class NetReserves
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("ruecklageust")]
        protected ?float $reserveVAT = null,
        #[Inline]
        #[Type("float")]
        protected ?float $value = null
    ) {}

    public function getReserveVAT(): ?float
    {
        return $this->reserveVAT;
    }

    public function setReserveVAT(?float $reserveVAT): NetReserves
    {
        $this->reserveVAT = $reserveVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetReserves
    {
        $this->value = $value;

        return $this;
    }
}
