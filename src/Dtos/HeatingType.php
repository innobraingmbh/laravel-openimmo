<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HeatingType
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 * @XmlRoot("heizungsart")
 */
class HeatingType
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("OFEN")
     * optional
     */
    protected ?bool $stove = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("ETAGE")
     * optional
     */
    protected ?bool $floor = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("ZENTRAL")
     * optional
     */
    protected ?bool $central = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("FERN")
     * optional
     */
    protected ?bool $remote = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("FUSSBODEN")
     * optional
     */
    protected ?bool $flooring = null;

    public function __construct(
        ?bool $stove = null,
        ?bool $floor = null,
        ?bool $central = null,
        ?bool $remote = null,
        ?bool $flooring = null,
    ) {
        $this->stove = $stove;
        $this->floor = $floor;
        $this->central = $central;
        $this->remote = $remote;
        $this->flooring = $flooring;
    }

    public function getStove(): ?bool
    {
        return $this->stove;
    }

    public function setStove(?bool $stove): HeatingType
    {
        $this->stove = $stove;

        return $this;
    }

    public function getFloor(): ?bool
    {
        return $this->floor;
    }

    public function setFloor(?bool $floor): HeatingType
    {
        $this->floor = $floor;

        return $this;
    }

    public function getCentral(): ?bool
    {
        return $this->central;
    }

    public function setCentral(?bool $central): HeatingType
    {
        $this->central = $central;

        return $this;
    }

    public function getRemote(): ?bool
    {
        return $this->remote;
    }

    public function setRemote(?bool $remote): HeatingType
    {
        $this->remote = $remote;

        return $this;
    }

    public function getFlooring(): ?bool
    {
        return $this->flooring;
    }

    public function setFlooring(?bool $flooring): HeatingType
    {
        $this->flooring = $flooring;

        return $this;
    }
}
