<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Serviceleistungen
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 */
#[Description('Serviceleistungen der Immobilie oder des Anbieters')]
#[XmlRoot(name: 'serviceleistungen')]
class Serviceleistungen
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BETREUTES_WOHNEN')]
        #[Description('Betreutes Wohnen möglich')]
        protected ?bool $betreutesWohnen = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('CATERING')]
        #[Description('Catering-Service vorhanden')]
        protected ?bool $catering = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('REINIGUNG')]
        #[Description('Reinigungsservice vorhanden')]
        protected ?bool $reinigung = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('EINKAUF')]
        #[Description('Einkaufsmöglichkeiten in der Nähe')]
        protected ?bool $einkauf = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WACHDIENST')]
        #[Description('Sicherheitsdienst vorhanden')]
        protected ?bool $wachdienst = null
    ) {}

    public function getBetreutesWohnen(): ?bool
    {
        return $this->betreutesWohnen;
    }

    public function setBetreutesWohnen(?bool $betreutesWohnen): Serviceleistungen
    {
        $this->betreutesWohnen = $betreutesWohnen;

        return $this;
    }

    public function getCatering(): ?bool
    {
        return $this->catering;
    }

    public function setCatering(?bool $catering): Serviceleistungen
    {
        $this->catering = $catering;

        return $this;
    }

    public function getReinigung(): ?bool
    {
        return $this->reinigung;
    }

    public function setReinigung(?bool $reinigung): Serviceleistungen
    {
        $this->reinigung = $reinigung;

        return $this;
    }

    public function getEinkauf(): ?bool
    {
        return $this->einkauf;
    }

    public function setEinkauf(?bool $einkauf): Serviceleistungen
    {
        $this->einkauf = $einkauf;

        return $this;
    }

    public function getWachdienst(): ?bool
    {
        return $this->wachdienst;
    }

    public function setWachdienst(?bool $wachdienst): Serviceleistungen
    {
        $this->wachdienst = $wachdienst;

        return $this;
    }
}
