<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpCarport
 */
#[Description('Stellplatz vom Typ Carport')]
#[XmlRoot(name: 'stp_carport')]
class StpCarport
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzmiete')]
        #[Description('Mietpreis des Stellplatzes')]
        protected ?float $stellplatzmiete = null,
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzkaufpreis')]
        #[Description('Kaufpreis des Stellplatzes')]
        protected ?float $stellplatzkaufpreis = null,
        /**
         * optional
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[XmlAttribute]
        #[SerializedName('anzahl')]
        #[Description('Anzahl oder Menge')]
        protected ?int $anzahl = null
    ) {}

    public function getStellplatzmiete(): ?float
    {
        return $this->stellplatzmiete;
    }

    public function setStellplatzmiete(?float $stellplatzmiete): StpCarport
    {
        $this->stellplatzmiete = $stellplatzmiete;

        return $this;
    }

    public function getStellplatzkaufpreis(): ?float
    {
        return $this->stellplatzkaufpreis;
    }

    public function setStellplatzkaufpreis(?float $stellplatzkaufpreis): StpCarport
    {
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;

        return $this;
    }

    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }

    public function setAnzahl(?int $anzahl): StpCarport
    {
        $this->anzahl = $anzahl;

        return $this;
    }
}
