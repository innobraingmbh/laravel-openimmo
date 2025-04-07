<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BroadbandAccess
 * Informationen über die Breitbandmöglichkeiten.
 *
 * @XmlRoot("breitband_zugang")
 */
class BroadbandAccess
{
    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("art")
         * optional
         */
        protected ?string $type = null,
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("speed")
         * optional
         */
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
