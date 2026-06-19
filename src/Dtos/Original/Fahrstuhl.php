<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Fahrstuhl
 * Welche Art von Fahrstuhl, Aufzug, Lift - Mehrfachnennung möglich
 */
#[Description('Fahrstuhl- oder Aufzugsangaben der Immobilie')]
#[XmlRoot(name: 'fahrstuhl')]
class Fahrstuhl
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PERSONEN')]
        #[Description('Anzahl der Personen')]
        protected ?bool $personen = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LASTEN')]
        #[Description('Grundstücksbelastungen (z.B. Grundpfandrechte)')]
        protected ?bool $lasten = null
    ) {}

    public function getPersonen(): ?bool
    {
        return $this->personen;
    }

    public function setPersonen(?bool $personen): Fahrstuhl
    {
        $this->personen = $personen;

        return $this;
    }

    public function getLasten(): ?bool
    {
        return $this->lasten;
    }

    public function setLasten(?bool $lasten): Fahrstuhl
    {
        $this->lasten = $lasten;

        return $this;
    }
}
