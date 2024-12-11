<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetEVB
 * Erhaltungs- und Verbesserungsbeitrag. Ähnlich Instanthaltungsrücklage, UmSt. im Attribut.
 *
 * @XmlRoot("evbnetto")
 */
class NetEVB
{
    /**
     * @Type("float")
     *
     * @XmlAttribute
     *
     * @SerializedName("evbust")
     * optional
     */
    protected ?float $unitValueTaxVAT = null;

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(?float $unitValueTaxVAT = null, ?float $value = null)
    {
        $this->unitValueTaxVAT = $unitValueTaxVAT;
        $this->value = $value;
    }

    public function getUnitValueTaxVAT(): ?float
    {
        return $this->unitValueTaxVAT;
    }

    public function setUnitValueTaxVAT(?float $unitValueTaxVAT): NetEVB
    {
        $this->unitValueTaxVAT = $unitValueTaxVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetEVB
    {
        $this->value = $value;

        return $this;
    }
}
