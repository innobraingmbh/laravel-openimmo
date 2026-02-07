<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MaxRentalPeriod
 * Maximalzeitraum für den die Immobilie gemietet werdenkann, Optionen nicht kombinierbar, vorrangig bei WaZ
 */
#[XmlRoot(name: 'max_mietdauer')]
class MaxRentalPeriod
{
    public const string MAX_DURATION_DAY = 'TAG';

    public const string MAX_DURATION_WEEK = 'WOCHE';

    public const string MAX_DURATION_MONTH = 'MONAT';

    public const string MAX_DURATION_YEAR = 'JAHR';

    public function __construct(
        /**
         * optional
         *
         * @see MAX_DURATION_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('max_dauer')]
        protected string $maxDuration = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getMaxDuration(): ?string
    {
        return $this->maxDuration;
    }

    public function setMaxDuration(?string $maxDuration): MaxRentalPeriod
    {
        $this->maxDuration = $maxDuration;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): MaxRentalPeriod
    {
        $this->value = $value;

        return $this;
    }
}
