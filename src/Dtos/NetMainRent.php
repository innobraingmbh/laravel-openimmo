<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

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
    /**
     * @Type("float")
     *
     * @XmlAttribute
     *
     * @SerializedName("hauptmietzinsust")
     * optional
     */
    protected ?float $mainRentVAT = null;

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(?float $mainRentVAT = null, ?float $value = null)
    {
        $this->mainRentVAT = $mainRentVAT;
        $this->value = $value;
    }

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
