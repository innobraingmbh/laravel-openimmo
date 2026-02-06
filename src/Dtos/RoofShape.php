<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class RoofShape
 *
 */
#[XmlRoot(name: "dachform")]
class RoofShape
{
    public function __construct(
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("KRUEPPELWALMDACH")]
        protected ?bool $truncatedHipRoof = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("MANSARDDACH")]
        protected ?bool $mansardRoof = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("PULTDACH")]
        protected ?bool $shedRoof = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("SATTELDACH")]
        protected ?bool $saddleRoof = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("WALMDACH")]
        protected ?bool $hipRoof = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("FLACHDACH")]
        protected ?bool $flatRoof = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("PYRAMIDENDACH")]
        protected ?bool $pyramidRoof = null
    ) {}

    public function getTruncatedHipRoof(): ?bool
    {
        return $this->truncatedHipRoof;
    }

    public function setTruncatedHipRoof(?bool $truncatedHipRoof): RoofShape
    {
        $this->truncatedHipRoof = $truncatedHipRoof;

        return $this;
    }

    public function getMansardRoof(): ?bool
    {
        return $this->mansardRoof;
    }

    public function setMansardRoof(?bool $mansardRoof): RoofShape
    {
        $this->mansardRoof = $mansardRoof;

        return $this;
    }

    public function getShedRoof(): ?bool
    {
        return $this->shedRoof;
    }

    public function setShedRoof(?bool $shedRoof): RoofShape
    {
        $this->shedRoof = $shedRoof;

        return $this;
    }

    public function getSaddleRoof(): ?bool
    {
        return $this->saddleRoof;
    }

    public function setSaddleRoof(?bool $saddleRoof): RoofShape
    {
        $this->saddleRoof = $saddleRoof;

        return $this;
    }

    public function getHipRoof(): ?bool
    {
        return $this->hipRoof;
    }

    public function setHipRoof(?bool $hipRoof): RoofShape
    {
        $this->hipRoof = $hipRoof;

        return $this;
    }

    public function getFlatRoof(): ?bool
    {
        return $this->flatRoof;
    }

    public function setFlatRoof(?bool $flatRoof): RoofShape
    {
        $this->flatRoof = $flatRoof;

        return $this;
    }

    public function getPyramidRoof(): ?bool
    {
        return $this->pyramidRoof;
    }

    public function setPyramidRoof(?bool $pyramidRoof): RoofShape
    {
        $this->pyramidRoof = $pyramidRoof;

        return $this;
    }
}
