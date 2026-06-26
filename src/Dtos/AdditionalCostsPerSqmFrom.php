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
 * Class AdditionalCostsPerSqmFrom
 * Angaben bei Gewerbe Miete,UmSt. im Attribut.
 */
#[Description('Additional costs per square meter starting from a given value')]
#[XmlRoot(name: 'nebenkostenprom2von')]
class AdditionalCostsPerSqmFrom
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('nebenkostenprom2bis')]
        #[Description('Additional costs per square meter up to a maximum value')]
        protected ?float $additionalCostsPerSqmTo = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getAdditionalCostsPerSqmTo(): ?float
    {
        return $this->additionalCostsPerSqmTo;
    }

    public function setAdditionalCostsPerSqmTo(?float $additionalCostsPerSqmTo): AdditionalCostsPerSqmFrom
    {
        $this->additionalCostsPerSqmTo = $additionalCostsPerSqmTo;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): AdditionalCostsPerSqmFrom
    {
        $this->value = $value;

        return $this;
    }
}
