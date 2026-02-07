<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Hauptmietzinsnetto
 */
#[XmlRoot(name: 'hauptmietzinsnetto')]
class Hauptmietzinsnetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('hauptmietzinsust')]
        protected ?float $hauptmietzinsust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getHauptmietzinsust(): ?float
    {
        return $this->hauptmietzinsust;
    }

    public function setHauptmietzinsust(?float $hauptmietzinsust): Hauptmietzinsnetto
    {
        $this->hauptmietzinsust = $hauptmietzinsust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Hauptmietzinsnetto
    {
        $this->value = $value;

        return $this;
    }
}
