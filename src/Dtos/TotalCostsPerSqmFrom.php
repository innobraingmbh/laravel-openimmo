<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TotalCostsPerSqmFrom
 * Gesamtkosten bei Gewerbeobjekten Von - Bis.
 */
#[Description('Total costs per square meter starting from a minimum value')]
#[XmlRoot(name: 'gesamtkostenprom2von')]
class TotalCostsPerSqmFrom
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('gesamtkostenprom2bis')]
        #[Description('Total costs per square meter up to a maximum value')]
        protected ?float $totalCostsPerSqmTo = null,
        #[Inline]
        #[Type('float')]
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
