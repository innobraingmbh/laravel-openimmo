<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtbelastungnetto
 * Die Summe alle Nebenkosten und Mietzinse bei Miete, UmSt. im Attribut.
 */
#[XmlRoot(name: 'gesamtbelastungnetto')]
class Gesamtbelastungnetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('gesamtbelastungust')]
        protected ?float $gesamtbelastungust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getGesamtbelastungust(): ?float
    {
        return $this->gesamtbelastungust;
    }

    public function setGesamtbelastungust(?float $gesamtbelastungust): Gesamtbelastungnetto
    {
        $this->gesamtbelastungust = $gesamtbelastungust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Gesamtbelastungnetto
    {
        $this->value = $value;

        return $this;
    }
}
