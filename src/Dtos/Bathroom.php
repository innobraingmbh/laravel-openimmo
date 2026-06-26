<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bathroom
 * Welche Eigenschaft besitzt das Bad, Optionen kombinierbar
 */
#[Description('Equipment features of the bathroom')]
#[XmlRoot(name: 'bad')]
class Bathroom
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DUSCHE')]
        #[Description('Shower available')]
        protected ?bool $shower = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WANNE')]
        #[Description('Bathtub available')]
        protected ?bool $bathtub = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FENSTER')]
        #[Description('Window equipment of the property')]
        protected ?bool $window = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BIDET')]
        #[Description('Bidet in bathroom available')]
        protected ?bool $bidet = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PISSOIR')]
        #[Description('Urinal in bathroom available')]
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
