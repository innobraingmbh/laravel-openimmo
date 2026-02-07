<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxMietdauer
 * Maximalzeitraum für den die Immobilie gemietet werdenkann, Optionen nicht kombinierbar, vorrangig bei WaZ
 */
#[XmlRoot(name: 'max_mietdauer')]
class MaxMietdauer
{
    public const string MAX_DAUER_TAG = 'TAG';

    public const string MAX_DAUER_WOCHE = 'WOCHE';

    public const string MAX_DAUER_MONAT = 'MONAT';

    public const string MAX_DAUER_JAHR = 'JAHR';

    public function __construct(
        /**
         * optional
         *
         * @see MAX_DAUER_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('max_dauer')]
        protected string $maxDauer = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getMaxDauer(): ?string
    {
        return $this->maxDauer;
    }

    public function setMaxDauer(?string $maxDauer): MaxMietdauer
    {
        $this->maxDauer = $maxDauer;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): MaxMietdauer
    {
        $this->value = $value;

        return $this;
    }
}
