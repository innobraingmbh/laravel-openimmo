<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AussenCourtage
 * Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld
 */
#[Description('Außenprovision (Käuferprovision) für die Immobilie')]
#[XmlRoot(name: 'aussen_courtage')]
class AussenCourtage
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('mit_mwst')]
        #[Description('Preis inkl. Mehrwertsteuer')]
        protected ?bool $mitMwst = null,
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getMitMwst(): ?bool
    {
        return $this->mitMwst;
    }

    public function setMitMwst(?bool $mitMwst): AussenCourtage
    {
        $this->mitMwst = $mitMwst;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): AussenCourtage
    {
        $this->value = $value;

        return $this;
    }
}
