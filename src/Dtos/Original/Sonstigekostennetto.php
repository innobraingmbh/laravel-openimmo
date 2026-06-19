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
 * Class Sonstigekostennetto
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 */
#[Description('Sonstige Netto-Kosten (ohne MwSt.)')]
#[XmlRoot(name: 'sonstigekostennetto')]
class Sonstigekostennetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('sonstigekostenust')]
        #[Description('Mehrwertsteueranteil sonstiger Kosten')]
        protected ?float $sonstigekostenust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getSonstigekostenust(): ?float
    {
        return $this->sonstigekostenust;
    }

    public function setSonstigekostenust(?float $sonstigekostenust): Sonstigekostennetto
    {
        $this->sonstigekostenust = $sonstigekostenust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Sonstigekostennetto
    {
        $this->value = $value;

        return $this;
    }
}
