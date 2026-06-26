<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kueche
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 */
#[Description('Küchenausstattungsmerkmale der Immobilie')]
#[XmlRoot(name: 'kueche')]
class Kueche
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('EBK')]
        #[Description('Einbauküche vorhanden')]
        protected ?bool $ebk = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OFFEN')]
        #[Description('Offene Küche vorhanden')]
        protected ?bool $offen = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PANTRY')]
        #[Description('Speisekammer vorhanden')]
        protected ?bool $pantry = null
    ) {}

    public function getEbk(): ?bool
    {
        return $this->ebk;
    }

    public function setEbk(?bool $ebk): Kueche
    {
        $this->ebk = $ebk;

        return $this;
    }

    public function getOffen(): ?bool
    {
        return $this->offen;
    }

    public function setOffen(?bool $offen): Kueche
    {
        $this->offen = $offen;

        return $this;
    }

    public function getPantry(): ?bool
    {
        return $this->pantry;
    }

    public function setPantry(?bool $pantry): Kueche
    {
        $this->pantry = $pantry;

        return $this;
    }
}
