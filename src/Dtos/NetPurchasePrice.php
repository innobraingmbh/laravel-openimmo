<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetPurchasePrice
 * Ausgewiesene Kaufpreis Netto, Optional mit Umst im Attribut. Speziell für Gewerbe
 *
 * @XmlRoot("kaufpreisnetto")
 */
class NetPurchasePrice
{
    public function __construct(
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("kaufpreisust")
         * optional
         */
        protected ?float $purchasePriceVAT = null,
        /**
         * @Inline
         *
         * @Type("float")
         */
        protected ?float $value = null
    ) {}

    public function getPurchasePriceVAT(): ?float
    {
        return $this->purchasePriceVAT;
    }

    public function setPurchasePriceVAT(?float $purchasePriceVAT): NetPurchasePrice
    {
        $this->purchasePriceVAT = $purchasePriceVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetPurchasePrice
    {
        $this->value = $value;

        return $this;
    }
}
