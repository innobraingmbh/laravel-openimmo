<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nettomieteprom2von
 * Angaben bei Gewerbe Miete, UmSt. im Attribut.
 */
#[XmlRoot(name: 'nettomieteprom2von')]
class Nettomieteprom2von
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('nettomieteprom2bis')]
        protected ?float $nettomieteprom2bis = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getNettomieteprom2bis(): ?float
    {
        return $this->nettomieteprom2bis;
    }

    public function setNettomieteprom2bis(?float $nettomieteprom2bis): Nettomieteprom2von
    {
        $this->nettomieteprom2bis = $nettomieteprom2bis;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Nettomieteprom2von
    {
        $this->value = $value;

        return $this;
    }
}
