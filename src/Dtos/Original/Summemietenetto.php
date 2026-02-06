<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Summemietenetto
 * Gesamtsumme der Mietkosten, UmSt. im Attribut.
 */
#[XmlRoot(name: 'summemietenetto')]
class Summemietenetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('summemieteust')]
        protected ?float $summemieteust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getSummemieteust(): ?float
    {
        return $this->summemieteust;
    }

    public function setSummemieteust(?float $summemieteust): Summemietenetto
    {
        $this->summemieteust = $summemieteust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Summemietenetto
    {
        $this->value = $value;

        return $this;
    }
}
