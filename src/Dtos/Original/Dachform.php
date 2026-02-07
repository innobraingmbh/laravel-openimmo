<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Dachform
 */
#[XmlRoot(name: 'dachform')]
class Dachform
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KRUEPPELWALMDACH')]
        protected ?bool $krueppelwalmdach = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MANSARDDACH')]
        protected ?bool $mansarddach = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PULTDACH')]
        protected ?bool $pultdach = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SATTELDACH')]
        protected ?bool $satteldach = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WALMDACH')]
        protected ?bool $walmdach = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FLACHDACH')]
        protected ?bool $flachdach = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PYRAMIDENDACH')]
        protected ?bool $pyramidendach = null
    ) {}

    public function getKrueppelwalmdach(): ?bool
    {
        return $this->krueppelwalmdach;
    }

    public function setKrueppelwalmdach(?bool $krueppelwalmdach): Dachform
    {
        $this->krueppelwalmdach = $krueppelwalmdach;

        return $this;
    }

    public function getMansarddach(): ?bool
    {
        return $this->mansarddach;
    }

    public function setMansarddach(?bool $mansarddach): Dachform
    {
        $this->mansarddach = $mansarddach;

        return $this;
    }

    public function getPultdach(): ?bool
    {
        return $this->pultdach;
    }

    public function setPultdach(?bool $pultdach): Dachform
    {
        $this->pultdach = $pultdach;

        return $this;
    }

    public function getSatteldach(): ?bool
    {
        return $this->satteldach;
    }

    public function setSatteldach(?bool $satteldach): Dachform
    {
        $this->satteldach = $satteldach;

        return $this;
    }

    public function getWalmdach(): ?bool
    {
        return $this->walmdach;
    }

    public function setWalmdach(?bool $walmdach): Dachform
    {
        $this->walmdach = $walmdach;

        return $this;
    }

    public function getFlachdach(): ?bool
    {
        return $this->flachdach;
    }

    public function setFlachdach(?bool $flachdach): Dachform
    {
        $this->flachdach = $flachdach;

        return $this;
    }

    public function getPyramidendach(): ?bool
    {
        return $this->pyramidendach;
    }

    public function setPyramidendach(?bool $pyramidendach): Dachform
    {
        $this->pyramidendach = $pyramidendach;

        return $this;
    }
}
