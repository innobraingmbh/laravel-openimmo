<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class NetMainRent
 *
 * @XmlRoot("hauptmietzinsnetto")
 */
class NetMainRent
{
    public function __construct(
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("hauptmietzinsust")
         * optional
         */
        protected ?float $mainRentVAT = null,
        /**
         * @Inline
         *
         * @Type("float")
         */
        protected ?float $value = null
    ) {}

    public function getMainRentVAT(): ?float
    {
        return $this->mainRentVAT;
    }

    public function setMainRentVAT(?float $mainRentVAT): NetMainRent
    {
        $this->mainRentVAT = $mainRentVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetMainRent
    {
        $this->value = $value;

        return $this;
    }
}
