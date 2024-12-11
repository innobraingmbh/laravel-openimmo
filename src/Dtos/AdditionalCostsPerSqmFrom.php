<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AdditionalCostsPerSqmFrom
 * Angaben bei Gewerbe Miete,UmSt. im Attribut.
 *
 * @XmlRoot("nebenkostenprom2von")
 */
class AdditionalCostsPerSqmFrom
{
    /**
     * @Type("float")
     *
     * @XmlAttribute
     *
     * @SerializedName("nebenkostenprom2bis")
     * optional
     */
    protected ?float $additionalCostsPerSqmTo = null;

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(?float $additionalCostsPerSqmTo = null, ?float $value = null)
    {
        $this->additionalCostsPerSqmTo = $additionalCostsPerSqmTo;
        $this->value = $value;
    }

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
