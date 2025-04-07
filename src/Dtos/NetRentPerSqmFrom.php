<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetRentPerSqmFrom
 * Angaben bei Gewerbe Miete, UmSt. im Attribut.
 *
 * @XmlRoot("nettomieteprom2von")
 */
class NetRentPerSqmFrom
{
    public function __construct(
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("nettomieteprom2bis")
         * optional
         */
        protected ?float $netRentPerSqmTo = null,
        /**
         * @Inline
         *
         * @Type("float")
         */
        protected ?float $value = null
    ) {}

    public function getNetRentPerSqmTo(): ?float
    {
        return $this->netRentPerSqmTo;
    }

    public function setNetRentPerSqmTo(?float $netRentPerSqmTo): NetRentPerSqmFrom
    {
        $this->netRentPerSqmTo = $netRentPerSqmTo;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetRentPerSqmFrom
    {
        $this->value = $value;

        return $this;
    }
}
