<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ActualRentalIncome
 * Mieteinnahmen pro Periode, Momentan-/Isteinnahmen (Ohne Periode = JAHR)
 *
 * @XmlRoot("mieteinnahmen_ist")
 */
class ActualRentalIncome
{
    public const PERIOD_DAY = 'TAG';

    public const PERIOD_WEEK = 'WOCHE';

    public const PERIOD_MONTH = 'MONAT';

    public const PERIOD_YEAR = 'JAHR';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("periode")
     * optional
     *
     * @see PERIOD_* constants
     */
    protected string $period = '';

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(string $period = '', ?float $value = null)
    {
        $this->period = $period;
        $this->value = $value;
    }

    public function getPeriod(): ?string
    {
        return $this->period;
    }

    public function setPeriod(?string $period): ActualRentalIncome
    {
        $this->period = $period;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): ActualRentalIncome
    {
        $this->value = $value;

        return $this;
    }
}
