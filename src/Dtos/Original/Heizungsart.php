<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 */
#[Description('Art des Heizsystems (z.B. Zentralheizung, Fußbodenheizung)')]
#[XmlRoot(name: 'heizungsart')]
class Heizungsart
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OFEN')]
        #[Description('Ofen oder Kaminofen vorhanden')]
        protected ?bool $ofen = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ETAGE')]
        #[Description('Stockwerk der Wohnung im Gebäude')]
        protected ?bool $etage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ZENTRAL')]
        #[Description('Zentrale Heizungsanlage vorhanden')]
        protected ?bool $zentral = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERN')]
        #[Description('Abgelegene Lage der Immobilie')]
        protected ?bool $fern = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FUSSBODEN')]
        #[Description('Bodenbelag der Immobilie')]
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
