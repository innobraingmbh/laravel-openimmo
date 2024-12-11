<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bathroom
 * Welche Eigenschaft besitzt das Bad, Optionen kombinierbar
 *
 * @XmlRoot("bad")
 */
class Bathroom
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("DUSCHE")
     * optional
     */
    protected ?bool $shower = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("WANNE")
     * optional
     */
    protected ?bool $bathtub = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("FENSTER")
     * optional
     */
    protected ?bool $window = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("BIDET")
     * optional
     */
    protected ?bool $bidet = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("PISSOIR")
     * optional
     */
    protected ?bool $urinal = null;

    public function __construct(
        ?bool $shower = null,
        ?bool $bathtub = null,
        ?bool $window = null,
        ?bool $bidet = null,
        ?bool $urinal = null,
    ) {
        $this->shower = $shower;
        $this->bathtub = $bathtub;
        $this->window = $window;
        $this->bidet = $bidet;
        $this->urinal = $urinal;
    }

    public function getShower(): ?bool
    {
        return $this->shower;
    }

    public function setShower(?bool $shower): Bathroom
    {
        $this->shower = $shower;

        return $this;
    }

    public function getBathtub(): ?bool
    {
        return $this->bathtub;
    }

    public function setBathtub(?bool $bathtub): Bathroom
    {
        $this->bathtub = $bathtub;

        return $this;
    }

    public function getWindow(): ?bool
    {
        return $this->window;
    }

    public function setWindow(?bool $window): Bathroom
    {
        $this->window = $window;

        return $this;
    }

    public function getBidet(): ?bool
    {
        return $this->bidet;
    }

    public function setBidet(?bool $bidet): Bathroom
    {
        $this->bidet = $bidet;

        return $this;
    }

    public function getUrinal(): ?bool
    {
        return $this->urinal;
    }

    public function setUrinal(?bool $urinal): Bathroom
    {
        $this->urinal = $urinal;

        return $this;
    }
}
