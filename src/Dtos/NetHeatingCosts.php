<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetHeatingCosts
 * Die Heizkosten einer Einheit als Nettowert. Die Umsatzsteuer optional im Attribut
 *
 * @XmlRoot("heizkostennetto")
 */
class NetHeatingCosts
{
    public function __construct(
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("heizkostenust")
         * optional
         */
        protected ?float $heatingCostsVAT = null,
        /**
         * @Inline
         *
         * @Type("float")
         */
        protected ?float $value = null
    ) {}

    public function getHeatingCostsVAT(): ?float
    {
        return $this->heatingCostsVAT;
    }

    public function setHeatingCostsVAT(?float $heatingCostsVAT): NetHeatingCosts
    {
        $this->heatingCostsVAT = $heatingCostsVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetHeatingCosts
    {
        $this->value = $value;

        return $this;
    }
}
