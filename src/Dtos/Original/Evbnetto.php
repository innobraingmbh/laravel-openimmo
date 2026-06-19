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
 * Class Evbnetto
 * Erhaltungs- und Verbesserungsbeitrag. Ähnlich Instanthaltungsrücklage, UmSt. im Attribut.
 */
#[Description('Netto-Einheitswertbescheid (EVB)')]
#[XmlRoot(name: 'evbnetto')]
class Evbnetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('evbust')]
        #[Description('Mehrwertsteuer auf den Einheitswert')]
        protected ?float $evbust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getEvbust(): ?float
    {
        return $this->evbust;
    }

    public function setEvbust(?float $evbust): Evbnetto
    {
        $this->evbust = $evbust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Evbnetto
    {
        $this->value = $value;

        return $this;
    }
}
