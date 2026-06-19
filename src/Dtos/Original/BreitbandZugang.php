<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 * Informationen über die Breitbandmöglichkeiten.
 */
#[Description('Angaben zum Breitbandanschluss der Immobilie')]
#[XmlRoot(name: 'breitband_zugang')]
class BreitbandZugang
{
    public function __construct(
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('art')]
        #[Description('Typ oder Art')]
        protected ?string $art = null,
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('speed')]
        #[Description('Geschwindigkeit (z.B. Breitbandgeschwindigkeit in Mbit/s)')]
        protected ?float $speed = null
    ) {}

    public function getArt(): ?string
    {
        return $this->art;
    }

    public function setArt(?string $art): BreitbandZugang
    {
        $this->art = $art;

        return $this;
    }

    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    public function setSpeed(?float $speed): BreitbandZugang
    {
        $this->speed = $speed;

        return $this;
    }
}
