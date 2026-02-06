<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreisnetto
 * Ausgewiesene Kaufpreis Netto, Optional mit Umst im Attribut. Speziell für Gewerbe
 */
#[XmlRoot(name: 'kaufpreisnetto')]
class Kaufpreisnetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('kaufpreisust')]
        protected ?float $kaufpreisust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getKaufpreisust(): ?float
    {
        return $this->kaufpreisust;
    }

    public function setKaufpreisust(?float $kaufpreisust): Kaufpreisnetto
    {
        $this->kaufpreisust = $kaufpreisust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Kaufpreisnetto
    {
        $this->value = $value;

        return $this;
    }
}
