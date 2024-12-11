<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class SecurityTechnology
 * Welche Sicherheitstechnik ist geboten, Optionen kombinierbar
 *
 * @XmlRoot("sicherheitstechnik")
 */
class SecurityTechnology
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("ALARMANLAGE")
     * optional
     */
    protected ?bool $alarmSystem = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("KAMERA")
     * optional
     */
    protected ?bool $camera = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("POLIZEIRUF")
     * optional
     */
    protected ?bool $policeCall = null;

    public function __construct(?bool $alarmSystem = null, ?bool $camera = null, ?bool $policeCall = null)
    {
        $this->alarmSystem = $alarmSystem;
        $this->camera = $camera;
        $this->policeCall = $policeCall;
    }

    public function getAlarmSystem(): ?bool
    {
        return $this->alarmSystem;
    }

    public function setAlarmSystem(?bool $alarmSystem): SecurityTechnology
    {
        $this->alarmSystem = $alarmSystem;

        return $this;
    }

    public function getCamera(): ?bool
    {
        return $this->camera;
    }

    public function setCamera(?bool $camera): SecurityTechnology
    {
        $this->camera = $camera;

        return $this;
    }

    public function getPoliceCall(): ?bool
    {
        return $this->policeCall;
    }

    public function setPoliceCall(?bool $policeCall): SecurityTechnology
    {
        $this->policeCall = $policeCall;

        return $this;
    }
}
