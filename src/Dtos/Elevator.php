<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Elevator
 * Welche Art von Fahrstuhl, Aufzug, Lift - Mehrfachnennung möglich
 *
 * @XmlRoot("fahrstuhl")
 */
class Elevator
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("PERSONEN")
     * optional
     */
    protected ?bool $persons = null;

    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("LASTEN")
     * optional
     */
    protected ?bool $encumbrances = null;

    public function __construct(?bool $persons = null, ?bool $encumbrances = null)
    {
        $this->persons = $persons;
        $this->encumbrances = $encumbrances;
    }

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
