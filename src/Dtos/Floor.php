<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Floor
 * Welche Eigenschaft besitzt der Bodenbelag, Optionen kombinierbar
 *
 * @XmlRoot("boden")
 */
class Floor
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("FLIESEN")
         * optional
         */
        protected ?bool $tiles = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("STEIN")
         * optional
         */
        protected ?bool $stone = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("TEPPICH")
         * optional
         */
        protected ?bool $carpet = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("PARKETT")
         * optional
         */
        protected ?bool $parquet = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("FERTIGPARKETT")
         * optional
         */
        protected ?bool $finishedParquet = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("LAMINAT")
         * optional
         */
        protected ?bool $laminate = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("DIELEN")
         * optional
         */
        protected ?bool $floorboards = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("KUNSTSTOFF")
         * optional
         */
        protected ?bool $plastic = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("ESTRICH")
         * optional
         */
        protected ?bool $screed = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("DOPPELBODEN")
         * optional
         */
        protected ?bool $raisedFloor = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("LINOLEUM")
         * optional
         */
        protected ?bool $linoleum = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("MARMOR")
         * optional
         */
        protected ?bool $marble = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("TERRAKOTTA")
         * optional
         */
        protected ?bool $terracotta = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("GRANIT")
         * optional
         */
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
