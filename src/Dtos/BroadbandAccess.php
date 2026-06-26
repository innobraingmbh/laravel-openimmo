<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BroadbandAccess
 * Informationen über die Breitbandmöglichkeiten.
 */
#[Description('Broadband internet access details of the property')]
#[XmlRoot(name: 'breitband_zugang')]
class BroadbandAccess
{
    public function __construct(
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('art')]
        #[Description('Type or kind')]
        protected ?string $type = null,
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('speed')]
        #[Description('Speed (e.g. broadband speed in Mbit/s)')]
        protected ?float $speed = null
    ) {}

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): BroadbandAccess
    {
        $this->type = $type;

        return $this;
    }

    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    public function setSpeed(?float $speed): BroadbandAccess
    {
        $this->speed = $speed;

        return $this;
    }
}
