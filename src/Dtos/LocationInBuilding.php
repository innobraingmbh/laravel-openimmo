<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LocationInBuilding
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 *
 * @description Position of the unit within the building (e.g. left, right, center)
 */
#[XmlRoot(name: 'lage_im_bau')]
class LocationInBuilding
{
    public function __construct(
        /**
         * optional
         *
         * @description Left position in the building
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LINKS')]
        protected ?bool $left = null,
        /**
         * optional
         *
         * @description Right position in the building
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('RECHTS')]
        protected ?bool $right = null,
        /**
         * optional
         *
         * @description Front orientation or facade
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('VORNE')]
        protected ?bool $front = null,
        /**
         * optional
         *
         * @description Rear orientation
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HINTEN')]
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
