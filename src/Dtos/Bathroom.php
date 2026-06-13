<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bathroom
 * Welche Eigenschaft besitzt das Bad, Optionen kombinierbar
 *
 * @description Equipment features of the bathroom
 */
#[XmlRoot(name: 'bad')]
class Bathroom
{
    public function __construct(
        /**
         * optional
         *
         * @description Shower available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DUSCHE')]
        protected ?bool $shower = null,
        /**
         * optional
         *
         * @description Bathtub available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WANNE')]
        protected ?bool $bathtub = null,
        /**
         * optional
         *
         * @description Window equipment of the property
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FENSTER')]
        protected ?bool $window = null,
        /**
         * optional
         *
         * @description Bidet in bathroom available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BIDET')]
        protected ?bool $bidet = null,
        /**
         * optional
         *
         * @description Urinal in bathroom available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PISSOIR')]
        protected ?bool $urinal = null
    ) {}

    public function getShower(): ?bool
    {
        return $this->shower;
    }

    public function setShower(?bool $shower): Bathroom
    {
        $this->shower = $shower;

        return $this;
    }

    public function getBathtub(): ?bool
    {
        return $this->bathtub;
    }

    public function setBathtub(?bool $bathtub): Bathroom
    {
        $this->bathtub = $bathtub;

        return $this;
    }

    public function getWindow(): ?bool
    {
        return $this->window;
    }

    public function setWindow(?bool $window): Bathroom
    {
        $this->window = $window;

        return $this;
    }

    public function getBidet(): ?bool
    {
        return $this->bidet;
    }

    public function setBidet(?bool $bidet): Bathroom
    {
        $this->bidet = $bidet;

        return $this;
    }

    public function getUrinal(): ?bool
    {
        return $this->urinal;
    }

    public function setUrinal(?bool $urinal): Bathroom
    {
        $this->urinal = $urinal;

        return $this;
    }
}
