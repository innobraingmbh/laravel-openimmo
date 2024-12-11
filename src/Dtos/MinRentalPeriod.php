<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MinRentalPeriod
 * Mindestzeitraum für den die Immobilie gemietet werden muss, Optionen nicht kombinierbar, vorrangig bei WaZ
 *
 * @XmlRoot("min_mietdauer")
 */
class MinRentalPeriod
{
    public const MIN_DURATION_DAY = 'TAG';

    public const MIN_DURATION_WEEK = 'WOCHE';

    public const MIN_DURATION_MONTH = 'MONAT';

    public const MIN_DURATION_YEAR = 'JAHR';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("min_dauer")
     * optional
     *
     * @see MIN_DURATION_* constants
     */
    protected string $minDuration = '';

    /**
     * @Inline
     *
     * @Type("string")
     */
    protected ?string $value = null;

    public function __construct(string $minDuration = '', ?string $value = null)
    {
        $this->minDuration = $minDuration;
        $this->value = $value;
    }

    public function getMinDuration(): ?string
    {
        return $this->minDuration;
    }

    public function setMinDuration(?string $minDuration): MinRentalPeriod
    {
        $this->minDuration = $minDuration;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): MinRentalPeriod
    {
        $this->value = $value;

        return $this;
    }
}
