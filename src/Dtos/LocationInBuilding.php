<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LocationInBuilding
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 *
 * @XmlRoot("lage_im_bau")
 */
class LocationInBuilding
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("LINKS")
         * optional
         */
        protected ?bool $left = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("RECHTS")
         * optional
         */
        protected ?bool $right = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("VORNE")
         * optional
         */
        protected ?bool $front = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("HINTEN")
         * optional
         */
        protected ?bool $rear = null
    ) {}

    public function getLeft(): ?bool
    {
        return $this->left;
    }

    public function setLeft(?bool $left): LocationInBuilding
    {
        $this->left = $left;

        return $this;
    }

    public function getRight(): ?bool
    {
        return $this->right;
    }

    public function setRight(?bool $right): LocationInBuilding
    {
        $this->right = $right;

        return $this;
    }

    public function getFront(): ?bool
    {
        return $this->front;
    }

    public function setFront(?bool $front): LocationInBuilding
    {
        $this->front = $front;

        return $this;
    }

    public function getRear(): ?bool
    {
        return $this->rear;
    }

    public function setRear(?bool $rear): LocationInBuilding
    {
        $this->rear = $rear;

        return $this;
    }
}
