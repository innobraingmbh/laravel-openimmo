<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Floor
 * Welche Eigenschaft besitzt der Bodenbelag, Optionen kombinierbar
 */
#[XmlRoot(name: 'boden')]
class Floor
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FLIESEN')]
        protected ?bool $tiles = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('STEIN')]
        protected ?bool $stone = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TEPPICH')]
        protected ?bool $carpet = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PARKETT')]
        protected ?bool $parquet = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERTIGPARKETT')]
        protected ?bool $finishedParquet = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LAMINAT')]
        protected ?bool $laminate = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DIELEN')]
        protected ?bool $floorboards = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KUNSTSTOFF')]
        protected ?bool $plastic = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ESTRICH')]
        protected ?bool $screed = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DOPPELBODEN')]
        protected ?bool $raisedFloor = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LINOLEUM')]
        protected ?bool $linoleum = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MARMOR')]
        protected ?bool $marble = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TERRAKOTTA')]
        protected ?bool $terracotta = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GRANIT')]
        protected ?bool $granite = null
    ) {}

    public function getTiles(): ?bool
    {
        return $this->tiles;
    }

    public function setTiles(?bool $tiles): Floor
    {
        $this->tiles = $tiles;

        return $this;
    }

    public function getStone(): ?bool
    {
        return $this->stone;
    }

    public function setStone(?bool $stone): Floor
    {
        $this->stone = $stone;

        return $this;
    }

    public function getCarpet(): ?bool
    {
        return $this->carpet;
    }

    public function setCarpet(?bool $carpet): Floor
    {
        $this->carpet = $carpet;

        return $this;
    }

    public function getParquet(): ?bool
    {
        return $this->parquet;
    }

    public function setParquet(?bool $parquet): Floor
    {
        $this->parquet = $parquet;

        return $this;
    }

    public function getFinishedParquet(): ?bool
    {
        return $this->finishedParquet;
    }

    public function setFinishedParquet(?bool $finishedParquet): Floor
    {
        $this->finishedParquet = $finishedParquet;

        return $this;
    }

    public function getLaminate(): ?bool
    {
        return $this->laminate;
    }

    public function setLaminate(?bool $laminate): Floor
    {
        $this->laminate = $laminate;

        return $this;
    }

    public function getFloorboards(): ?bool
    {
        return $this->floorboards;
    }

    public function setFloorboards(?bool $floorboards): Floor
    {
        $this->floorboards = $floorboards;

        return $this;
    }

    public function getPlastic(): ?bool
    {
        return $this->plastic;
    }

    public function setPlastic(?bool $plastic): Floor
    {
        $this->plastic = $plastic;

        return $this;
    }

    public function getScreed(): ?bool
    {
        return $this->screed;
    }

    public function setScreed(?bool $screed): Floor
    {
        $this->screed = $screed;

        return $this;
    }

    public function getRaisedFloor(): ?bool
    {
        return $this->raisedFloor;
    }

    public function setRaisedFloor(?bool $raisedFloor): Floor
    {
        $this->raisedFloor = $raisedFloor;

        return $this;
    }

    public function getLinoleum(): ?bool
    {
        return $this->linoleum;
    }

    public function setLinoleum(?bool $linoleum): Floor
    {
        $this->linoleum = $linoleum;

        return $this;
    }

    public function getMarble(): ?bool
    {
        return $this->marble;
    }

    public function setMarble(?bool $marble): Floor
    {
        $this->marble = $marble;

        return $this;
    }

    public function getTerracotta(): ?bool
    {
        return $this->terracotta;
    }

    public function setTerracotta(?bool $terracotta): Floor
    {
        $this->terracotta = $terracotta;

        return $this;
    }

    public function getGranite(): ?bool
    {
        return $this->granite;
    }

    public function setGranite(?bool $granite): Floor
    {
        $this->granite = $granite;

        return $this;
    }
}
