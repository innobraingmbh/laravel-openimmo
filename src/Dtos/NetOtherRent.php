<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetOtherRent
 * Ergänzenden Mietkosten, UmSt. im Attribut.
 *
 */
#[XmlRoot(name: "sonstigemietenetto")]
class NetOtherRent
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("sonstigemieteust")]
        protected ?float $otherRentVAT = null,
        #[Inline]
        #[Type("float")]
        protected ?float $value = null
    ) {}

    public function getOtherRentVAT(): ?float
    {
        return $this->otherRentVAT;
    }

    public function setOtherRentVAT(?float $otherRentVAT): NetOtherRent
    {
        $this->otherRentVAT = $otherRentVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetOtherRent
    {
        $this->value = $value;

        return $this;
    }
}
