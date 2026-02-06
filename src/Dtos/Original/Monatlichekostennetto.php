<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Monatlichekostennetto
 * Summe der Monatlichen Kosten einer Wohnung als Information für einen Käufer (Netto), Umst im Attribut.
 */
#[XmlRoot(name: 'monatlichekostennetto')]
class Monatlichekostennetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('monatlichekostenust')]
        protected ?float $monatlichekostenust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getMonatlichekostenust(): ?float
    {
        return $this->monatlichekostenust;
    }

    public function setMonatlichekostenust(?float $monatlichekostenust): Monatlichekostennetto
    {
        $this->monatlichekostenust = $monatlichekostenust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Monatlichekostennetto
    {
        $this->value = $value;

        return $this;
    }
}
