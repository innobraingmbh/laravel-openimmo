<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetTotalCost
 * Die Summe alle Nebenkosten und Mietzinse bei Miete, UmSt. im Attribut.
 *
 * @XmlRoot("gesamtbelastungnetto")
 */
class NetTotalCost
{
    /**
     * @Type("float")
     *
     * @XmlAttribute
     *
     * @SerializedName("gesamtbelastungust")
     * optional
     */
    protected ?float $totalCostVAT = null;

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(?float $totalCostVAT = null, ?float $value = null)
    {
        $this->totalCostVAT = $totalCostVAT;
        $this->value = $value;
    }

    public function getTotalCostVAT(): ?float
    {
        return $this->totalCostVAT;
    }

    public function setTotalCostVAT(?float $totalCostVAT): NetTotalCost
    {
        $this->totalCostVAT = $totalCostVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetTotalCost
    {
        $this->value = $value;

        return $this;
    }
}
