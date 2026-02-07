<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtmietenetto
 * Summe alle Mietzins Zahlungen, UmSt. im Attribut.
 */
#[XmlRoot(name: 'gesamtmietenetto')]
class Gesamtmietenetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('gesamtmieteust')]
        protected ?float $gesamtmieteust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getGesamtmieteust(): ?float
    {
        return $this->gesamtmieteust;
    }

    public function setGesamtmieteust(?float $gesamtmieteust): Gesamtmietenetto
    {
        $this->gesamtmieteust = $gesamtmieteust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Gesamtmietenetto
    {
        $this->value = $value;

        return $this;
    }
}
