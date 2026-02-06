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
 */
#[XmlRoot(name: "lage_gebiet")]
class LocationArea
{
    public const string AREAS_RESIDENTIAL = 'WOHN';

    public const string AREAS_COMMERCIAL = 'GEWERBE';

    public const string AREAS_INDUSTRIAL = 'INDUSTRIE';

    public const string AREAS_MISCH = 'MISCH';

    public const string AREAS_NEW_CONSTRUCTION = 'NEUBAU';

    public const string AREAS_LOCATION = 'ORTSLAGE';

    public const string AREAS_SETTLEMENT = 'SIEDLUNG';

    public const string AREAS_OUTSKIRTS = 'STADTRAND';

    public const string AREAS_DISTRICT = 'STADTTEIL';

    public const string AREAS_CITY_CENTER = 'STADTZENTRUM';

    public const string AREAS_SECONDARY_CENTER = 'NEBENZENTRUM';

    public const string AREAS_PRIME = '1A';

    public const string AREAS_SECONDARY = '1B';

    public function __construct(
        #[Type("string")]
        #[XmlAttribute]
        #[SerializedName("gebiete")]
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
