<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Elevator
 * Welche Art von Fahrstuhl, Aufzug, Lift - Mehrfachnennung möglich
 */
#[Description('Elevator or lift information of the property')]
#[XmlRoot(name: 'fahrstuhl')]
class Elevator
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PERSONEN')]
        #[Description('Number of persons')]
        protected ?bool $persons = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LASTEN')]
        #[Description('Encumbrances on the property (e.g. mortgages)')]
        protected ?bool $encumbrances = null
    ) {}

    public function getPersons(): ?bool
    {
        return $this->persons;
    }

    public function setPersons(?bool $persons): Elevator
    {
        $this->persons = $persons;

        return $this;
    }

    public function getEncumbrances(): ?bool
    {
        return $this->encumbrances;
    }

    public function setEncumbrances(?bool $encumbrances): Elevator
    {
        $this->encumbrances = $encumbrances;

        return $this;
    }
}
