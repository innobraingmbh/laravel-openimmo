<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TypeOfUse
 * nutzungsart
 *
 * @XmlRoot("nutzungsart")
 */
class TypeOfUse
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("WOHNEN")
     * required
     */
    protected bool $living = false;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("GEWERBE")
     * required
     */
    protected bool $commercial = false;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("ANLAGE")
     * optional
     */
    protected ?bool $facility = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("WAZ")
     * optional
     */
    protected ?bool $waz = null;

    public function __construct(
        bool $living = false,
        bool $commercial = false,
        ?bool $facility = null,
        ?bool $waz = null,
    ) {
        $this->living = $living;
        $this->commercial = $commercial;
        $this->facility = $facility;
        $this->waz = $waz;
    }

    public function getLiving(): bool
    {
        return $this->living;
    }

    public function setLiving(bool $living): TypeOfUse
    {
        $this->living = $living;

        return $this;
    }

    public function getCommercial(): bool
    {
        return $this->commercial;
    }

    public function setCommercial(bool $commercial): TypeOfUse
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getFacility(): ?bool
    {
        return $this->facility;
    }

    public function setFacility(?bool $facility): TypeOfUse
    {
        $this->facility = $facility;

        return $this;
    }

    public function getWaz(): ?bool
    {
        return $this->waz;
    }

    public function setWaz(?bool $waz): TypeOfUse
    {
        $this->waz = $waz;

        return $this;
    }
}
