<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class InternalCommission
 * Maklercourtage, bei Vermittlungs- bzw. Nachweisgeschäften als Betrag in ? / % / MM, daher Textfeld
 */
#[XmlRoot(name: 'innen_courtage')]
class InternalCommission
{
    public function __construct(
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('mit_mwst')]
        protected ?bool $withVAT = null,
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getWithVAT(): ?bool
    {
        return $this->withVAT;
    }

    public function setWithVAT(?bool $withVAT): InternalCommission
    {
        $this->withVAT = $withVAT;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): InternalCommission
    {
        $this->value = $value;

        return $this;
    }
}
