<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetOtherCosts
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 *
 * @XmlRoot("sonstigekostennetto")
 */
class NetOtherCosts
{
    /**
     * @Type("float")
     *
     * @XmlAttribute
     *
     * @SerializedName("sonstigekostenust")
     * optional
     */
    protected ?float $otherCostsVAT = null;

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(?float $otherCostsVAT = null, ?float $value = null)
    {
        $this->otherCostsVAT = $otherCostsVAT;
        $this->value = $value;
    }

    public function getOtherCostsVAT(): ?float
    {
        return $this->otherCostsVAT;
    }

    public function setOtherCostsVAT(?float $otherCostsVAT): NetOtherCosts
    {
        $this->otherCostsVAT = $otherCostsVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetOtherCosts
    {
        $this->value = $value;

        return $this;
    }
}
