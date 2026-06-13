<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kueche
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 *
 * @description Küchenausstattungsmerkmale der Immobilie
 */
#[XmlRoot(name: 'kueche')]
class Kueche
{
    public function __construct(
        /**
         * optional
         *
         * @description Einbauküche vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('EBK')]
        protected ?bool $ebk = null,
        /**
         * optional
         *
         * @description Offene Küche vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OFFEN')]
        protected ?bool $offen = null,
        /**
         * optional
         *
         * @description Speisekammer vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PANTRY')]
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
