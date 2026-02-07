<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sicherheitstechnik
 * Welche Sicherheitstechnik ist geboten, Optionen kombinierbar
 */
#[XmlRoot(name: 'sicherheitstechnik')]
class Sicherheitstechnik
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ALARMANLAGE')]
        protected ?bool $alarmanlage = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KAMERA')]
        protected ?bool $kamera = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('POLIZEIRUF')]
        protected ?bool $polizeiruf = null
    ) {}

    public function getAlarmanlage(): ?bool
    {
        return $this->alarmanlage;
    }

    public function setAlarmanlage(?bool $alarmanlage): Sicherheitstechnik
    {
        $this->alarmanlage = $alarmanlage;

        return $this;
    }

    public function getKamera(): ?bool
    {
        return $this->kamera;
    }

    public function setKamera(?bool $kamera): Sicherheitstechnik
    {
        $this->kamera = $kamera;

        return $this;
    }

    public function getPolizeiruf(): ?bool
    {
        return $this->polizeiruf;
    }

    public function setPolizeiruf(?bool $polizeiruf): Sicherheitstechnik
    {
        $this->polizeiruf = $polizeiruf;

        return $this;
    }
}
