<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 */
#[Description('Bauweise der Immobilie')]
#[XmlRoot(name: 'bauweise')]
class Bauweise
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MASSIV')]
        #[Description('Massivbauweise')]
        protected ?bool $massiv = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERTIGTEILE')]
        #[Description('Fertigteil-Bauweise')]
        protected ?bool $fertigteile = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HOLZ')]
        #[Description('Holz als Heizenergiequelle')]
        protected ?bool $holz = null
    ) {}

    public function getMassiv(): ?bool
    {
        return $this->massiv;
    }

    public function setMassiv(?bool $massiv): Bauweise
    {
        $this->massiv = $massiv;

        return $this;
    }

    public function getFertigteile(): ?bool
    {
        return $this->fertigteile;
    }

    public function setFertigteile(?bool $fertigteile): Bauweise
    {
        $this->fertigteile = $fertigteile;

        return $this;
    }

    public function getHolz(): ?bool
    {
        return $this->holz;
    }

    public function setHolz(?bool $holz): Bauweise
    {
        $this->holz = $holz;

        return $this;
    }
}
