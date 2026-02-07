<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageImBau
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 */
#[XmlRoot(name: 'lage_im_bau')]
class LageImBau
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LINKS')]
        protected ?bool $links = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('RECHTS')]
        protected ?bool $rechts = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('VORNE')]
        protected ?bool $vorne = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HINTEN')]
        protected ?bool $hinten = null
    ) {}

    public function getLinks(): ?bool
    {
        return $this->links;
    }

    public function setLinks(?bool $links): LageImBau
    {
        $this->links = $links;

        return $this;
    }

    public function getRechts(): ?bool
    {
        return $this->rechts;
    }

    public function setRechts(?bool $rechts): LageImBau
    {
        $this->rechts = $rechts;

        return $this;
    }

    public function getVorne(): ?bool
    {
        return $this->vorne;
    }

    public function setVorne(?bool $vorne): LageImBau
    {
        $this->vorne = $vorne;

        return $this;
    }

    public function getHinten(): ?bool
    {
        return $this->hinten;
    }

    public function setHinten(?bool $hinten): LageImBau
    {
        $this->hinten = $hinten;

        return $this;
    }
}
