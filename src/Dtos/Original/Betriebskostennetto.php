<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Betriebskostennetto
 * Betriebskosten eines Objektes bei Vermietun, UmSt. im Attribut
 */
#[Description('Netto-Betriebskosten (ohne MwSt.)')]
#[XmlRoot(name: 'betriebskostennetto')]
class Betriebskostennetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('betriebskostenust')]
        #[Description('Mehrwertsteueranteil der Betriebskosten')]
        protected ?float $betriebskostenust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getBetriebskostenust(): ?float
    {
        return $this->betriebskostenust;
    }

    public function setBetriebskostenust(?float $betriebskostenust): Betriebskostennetto
    {
        $this->betriebskostenust = $betriebskostenust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Betriebskostennetto
    {
        $this->value = $value;

        return $this;
    }
}
