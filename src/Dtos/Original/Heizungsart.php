<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 * @description Art des Heizsystems (z.B. Zentralheizung, Fußbodenheizung)
 */
#[XmlRoot(name: 'heizungsart')]
class Heizungsart
{
    public function __construct(
        /**
         * optional
         *
         * @description Ofen oder Kaminofen vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OFEN')]
        protected ?bool $ofen = null,
        /**
         * optional
         *
         * @description Stockwerk der Wohnung im Gebäude
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ETAGE')]
        protected ?bool $etage = null,
        /**
         * optional
         *
         * @description Zentrale Heizungsanlage vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ZENTRAL')]
        protected ?bool $zentral = null,
        /**
         * optional
         *
         * @description Abgelegene Lage der Immobilie
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERN')]
        protected ?bool $fern = null,
        /**
         * optional
         *
         * @description Bodenbelag der Immobilie
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FUSSBODEN')]
        protected ?bool $fussboden = null
    ) {}

    public function getOfen(): ?bool
    {
        return $this->ofen;
    }

    public function setOfen(?bool $ofen): Heizungsart
    {
        $this->ofen = $ofen;

        return $this;
    }

    public function getEtage(): ?bool
    {
        return $this->etage;
    }

    public function setEtage(?bool $etage): Heizungsart
    {
        $this->etage = $etage;

        return $this;
    }

    public function getZentral(): ?bool
    {
        return $this->zentral;
    }

    public function setZentral(?bool $zentral): Heizungsart
    {
        $this->zentral = $zentral;

        return $this;
    }

    public function getFern(): ?bool
    {
        return $this->fern;
    }

    public function setFern(?bool $fern): Heizungsart
    {
        $this->fern = $fern;

        return $this;
    }

    public function getFussboden(): ?bool
    {
        return $this->fussboden;
    }

    public function setFussboden(?bool $fussboden): Heizungsart
    {
        $this->fussboden = $fussboden;

        return $this;
    }
}
