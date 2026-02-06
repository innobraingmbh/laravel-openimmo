<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizkostennetto
 * Die Heizkosten einer Einheit als Nettowert. Die Umsatzsteuer optional im Attribut
 */
#[XmlRoot(name: 'heizkostennetto')]
class Heizkostennetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('heizkostenust')]
        protected ?float $heizkostenust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getHeizkostenust(): ?float
    {
        return $this->heizkostenust;
    }

    public function setHeizkostenust(?float $heizkostenust): Heizkostennetto
    {
        $this->heizkostenust = $heizkostenust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Heizkostennetto
    {
        $this->value = $value;

        return $this;
    }
}
