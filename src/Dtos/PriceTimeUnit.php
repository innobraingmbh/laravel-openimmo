<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PriceTimeUnit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 */
#[XmlRoot(name: 'preis_zeiteinheit')]
class PriceTimeUnit
{
    public const string TIME_UNIT_DAY = 'TAG';

    public const string TIME_UNIT_WEEK = 'WOCHE';

    public const string TIME_UNIT_MONTH = 'MONAT';

    public const string TIME_UNIT_YEAR = 'JAHR';

    public function __construct(
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('zeiteinheit')]
        protected string $timeUnit = ''
    ) {}

    public function getTimeUnit(): ?string
    {
        return $this->timeUnit;
    }

    public function setTimeUnit(?string $timeUnit): PriceTimeUnit
    {
        $this->timeUnit = $timeUnit;

        return $this;
    }
}
