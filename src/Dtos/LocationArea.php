<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LocationArea
 * Lage Gebiet, Optionen nicht kombinierbar
 *
 * @XmlRoot("lage_gebiet")
 */
class LocationArea
{
    public const AREAS_RESIDENTIAL = 'WOHN';

    public const AREAS_COMMERCIAL = 'GEWERBE';

    public const AREAS_INDUSTRIAL = 'INDUSTRIE';

    public const AREAS_MISCH = 'MISCH';

    public const AREAS_NEW_CONSTRUCTION = 'NEUBAU';

    public const AREAS_LOCATION = 'ORTSLAGE';

    public const AREAS_SETTLEMENT = 'SIEDLUNG';

    public const AREAS_OUTSKIRTS = 'STADTRAND';

    public const AREAS_DISTRICT = 'STADTTEIL';

    public const AREAS_CITY_CENTER = 'STADTZENTRUM';

    public const AREAS_SECONDARY_CENTER = 'NEBENZENTRUM';

    public const AREAS_PRIME = '1A';

    public const AREAS_SECONDARY = '1B';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("gebiete")
         * optional
         *
         * @see AREAS_* constants
         */
        protected string $areas = ''
    ) {}

    public function getAreas(): ?string
    {
        return $this->areas;
    }

    public function setAreas(?string $areas): LocationArea
    {
        $this->areas = $areas;

        return $this;
    }
}
