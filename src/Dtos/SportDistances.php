<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class SportDistances
 * Welche Distanz zu dem ausgewählen Sport-/Freizeitziel besteht(Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @XmlRoot("distanzen_sport")
 */
class SportDistances
{
    public const DISTANCE_TO_SPORT_BEACH = 'STRAND';

    public const DISTANCE_TO_SPORT_LAKE = 'SEE';

    public const DISTANCE_TO_SPORT_SEA = 'MEER';

    public const DISTANCE_TO_SPORT_SKI_AREA = 'SKIGEBIET';

    public const DISTANCE_TO_SPORT_SPORTS_FACILITIES = 'SPORTANLAGEN';

    public const DISTANCE_TO_SPORT_HIKING_AREAS = 'WANDERGEBIETE';

    public const DISTANCE_TO_SPORT_LOCAL_RECREATION = 'NAHERHOLUNG';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("distanz_zu_sport")
         * required
         *
         * @see DISTANCE_TO_SPORT_* constants
         */
        protected string $distanceToSport = '',
        /**
         * @Inline
         *
         * @Type("float")
         */
        protected ?float $value = null
    ) {}

    public function getDistanceToSport(): string
    {
        return $this->distanceToSport;
    }

    public function setDistanceToSport(string $distanceToSport): SportDistances
    {
        $this->distanceToSport = $distanceToSport;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): SportDistances
    {
        $this->value = $value;

        return $this;
    }
}
