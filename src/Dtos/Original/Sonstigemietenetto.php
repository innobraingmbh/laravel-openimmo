<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigemietenetto
 * Ergänzenden Mietkosten, UmSt. im Attribut.
 */
#[XmlRoot(name: 'sonstigemietenetto')]
class Sonstigemietenetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('sonstigemieteust')]
        protected ?float $sonstigemieteust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getSonstigemieteust(): ?float
    {
        return $this->sonstigemieteust;
    }

    public function setSonstigemieteust(?float $sonstigemieteust): Sonstigemietenetto
    {
        $this->sonstigemieteust = $sonstigemieteust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Sonstigemietenetto
    {
        $this->value = $value;

        return $this;
    }
}
