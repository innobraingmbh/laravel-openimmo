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
 * Class Ruecklagenetto
 * Vorhanden Rücklagen bei einem Kauf Objekt, UmSt. im Attribut.
 */
#[Description('Netto-Rücklagen (ohne MwSt.)')]
#[XmlRoot(name: 'ruecklagenetto')]
class Ruecklagenetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('ruecklageust')]
        #[Description('Mehrwertsteueranteil der Rücklagen')]
        protected ?float $ruecklageust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getRuecklageust(): ?float
    {
        return $this->ruecklageust;
    }

    public function setRuecklageust(?float $ruecklageust): Ruecklagenetto
    {
        $this->ruecklageust = $ruecklageust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Ruecklagenetto
    {
        $this->value = $value;

        return $this;
    }
}
