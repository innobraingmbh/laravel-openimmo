<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpTiefgarage
 */
#[XmlRoot(name: 'stp_tiefgarage')]
class StpTiefgarage
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzmiete')]
        protected ?float $stellplatzmiete = null,
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('stellplatzkaufpreis')]
        protected ?float $stellplatzkaufpreis = null,
        /**
         * optional
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[XmlAttribute]
        #[SerializedName('anzahl')]
        protected ?int $anzahl = null
    ) {}

    public function getStellplatzmiete(): ?float
    {
        return $this->stellplatzmiete;
    }

    public function setStellplatzmiete(?float $stellplatzmiete): StpTiefgarage
    {
        $this->stellplatzmiete = $stellplatzmiete;

        return $this;
    }

    public function getStellplatzkaufpreis(): ?float
    {
        return $this->stellplatzkaufpreis;
    }

    public function setStellplatzkaufpreis(?float $stellplatzkaufpreis): StpTiefgarage
    {
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;

        return $this;
    }

    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }

    public function setAnzahl(?int $anzahl): StpTiefgarage
    {
        $this->anzahl = $anzahl;

        return $this;
    }
}
