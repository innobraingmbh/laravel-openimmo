<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kitchen
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 *
 * @XmlRoot("kueche")
 */
class Kitchen
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("EBK")
     * optional
     */
    protected ?bool $builtInKitchen = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("OFFEN")
     * optional
     */
    protected ?bool $open = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("PANTRY")
     * optional
     */
    protected ?bool $pantry = null;

    public function __construct(?bool $builtInKitchen = null, ?bool $open = null, ?bool $pantry = null)
    {
        $this->builtInKitchen = $builtInKitchen;
        $this->open = $open;
        $this->pantry = $pantry;
    }

    public function getBuiltInKitchen(): ?bool
    {
        return $this->builtInKitchen;
    }

    public function setBuiltInKitchen(?bool $builtInKitchen): Kitchen
    {
        $this->builtInKitchen = $builtInKitchen;

        return $this;
    }

    public function getOpen(): ?bool
    {
        return $this->open;
    }

    public function setOpen(?bool $open): Kitchen
    {
        $this->open = $open;

        return $this;
    }

    public function getPantry(): ?bool
    {
        return $this->pantry;
    }

    public function setPantry(?bool $pantry): Kitchen
    {
        $this->pantry = $pantry;

        return $this;
    }
}
