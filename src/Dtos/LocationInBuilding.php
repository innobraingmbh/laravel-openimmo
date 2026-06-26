<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LocationInBuilding
 * Angabe über die Lage der Immobilie im Gesamtgebäude, Optionen kombinierbar
 */
#[Description('Position of the unit within the building (e.g. left, right, center)')]
#[XmlRoot(name: 'lage_im_bau')]
class LocationInBuilding
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LINKS')]
        #[Description('Left position in the building')]
        protected ?bool $left = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('RECHTS')]
        #[Description('Right position in the building')]
        protected ?bool $right = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('VORNE')]
        #[Description('Front orientation or facade')]
        protected ?bool $front = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HINTEN')]
        #[Description('Rear orientation')]
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
