<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nutzungsart
 * nutzungsart
 */
#[Description('Nutzungsart der Immobilie (z.B. Wohnen, Gewerbe)')]
#[XmlRoot(name: 'nutzungsart')]
class Nutzungsart
{
    public function __construct(
        /** required */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WOHNEN')]
        #[Description('Wohnbereich vorhanden')]
        protected bool $wohnen = false,
        /** required */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GEWERBE')]
        #[Description('Gewerbliche Nutzung vorhanden')]
        protected bool $gewerbe = false,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ANLAGE')]
        #[Description('Einrichtung oder Anlage')]
        protected ?bool $anlage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WAZ')]
        #[Description('Wohn-Arbeits-Zimmer (Kombination aus Wohnen und Arbeiten)')]
        protected ?bool $waz = null
    ) {}

    public function getWohnen(): bool
    {
        return $this->wohnen;
    }

    public function setWohnen(bool $wohnen): Nutzungsart
    {
        $this->wohnen = $wohnen;

        return $this;
    }

    public function getGewerbe(): bool
    {
        return $this->gewerbe;
    }

    public function setGewerbe(bool $gewerbe): Nutzungsart
    {
        $this->gewerbe = $gewerbe;

        return $this;
    }

    public function getAnlage(): ?bool
    {
        return $this->anlage;
    }

    public function setAnlage(?bool $anlage): Nutzungsart
    {
        $this->anlage = $anlage;

        return $this;
    }

    public function getWaz(): ?bool
    {
        return $this->waz;
    }

    public function setWaz(?bool $waz): Nutzungsart
    {
        $this->waz = $waz;

        return $this;
    }
}
