<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TotalCostsPerSqmFrom
 * Gesamtkosten bei Gewerbeobjekten Von - Bis.
 *
 */
#[XmlRoot(name: "gesamtkostenprom2von")]
class TotalCostsPerSqmFrom
{
    public function __construct(
        #[Type("float")]
        #[XmlAttribute]
        #[SerializedName("gesamtkostenprom2bis")]
        protected ?float $totalCostsPerSqmTo = null,
        #[Inline]
        #[Type("float")]
        protected ?float $value = null
    ) {}

    public function getTotalCostsPerSqmTo(): ?float
    {
        return $this->totalCostsPerSqmTo;
    }

    public function setTotalCostsPerSqmTo(?float $totalCostsPerSqmTo): TotalCostsPerSqmFrom
    {
        $this->totalCostsPerSqmTo = $totalCostsPerSqmTo;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): TotalCostsPerSqmFrom
    {
        $this->value = $value;

        return $this;
    }
}
