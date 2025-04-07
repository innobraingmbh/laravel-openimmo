<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Distances
 * Welche Distanz zu dem ausgewählten Ziel besteht (Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @XmlRoot("distanzen")
 */
class Distances
{
    public const DISTANCE_TO_AIRPORT = 'FLUGHAFEN';

    public const DISTANCE_TO_LONG_DISTANCE_TRAIN_STATION = 'FERNBAHNHOF';

    public const DISTANCE_TO_HIGHWAY = 'AUTOBAHN';

    public const DISTANCE_TO_SUBWAY = 'US_BAHN';

    public const DISTANCE_TO_BUS = 'BUS';

    public const DISTANCE_TO_KINDERGARTENS = 'KINDERGAERTEN';

    public const DISTANCE_TO_ELEMENTARY_SCHOOL = 'GRUNDSCHULE';

    public const DISTANCE_TO_MAIN_SCHOOL = 'HAUPTSCHULE';

    public const DISTANCE_TO_INTERMEDIATE_SCHOOL = 'REALSCHULE';

    public const DISTANCE_TO_COMPREHENSIVE_SCHOOL = 'GESAMTSCHULE';

    public const DISTANCE_TO_HIGH_SCHOOL = 'GYMNASIUM';

    public const DISTANCE_TO_CENTER = 'ZENTRUM';

    public const DISTANCE_TO_SHOPPING_FACILITIES = 'EINKAUFSMOEGLICHKEITEN';

    public const DISTANCE_TO_RESTAURANTS = 'GASTSTAETTEN';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("distanz_zu")
         * required
         *
         * @see DISTANCE_TO_* constants
         */
        protected string $distanceTo = '',
        /**
         * @Inline
         *
         * @Type("float")
         */
        protected ?float $value = null
    ) {}

    public function getDistanceTo(): string
    {
        return $this->distanceTo;
    }

    public function setDistanceTo(string $distanceTo): Distances
    {
        $this->distanceTo = $distanceTo;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Distances
    {
        $this->value = $value;

        return $this;
    }
}
