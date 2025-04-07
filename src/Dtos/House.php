<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class House
 * Objektart / Typ f. Haus
 *
 * @XmlRoot("haus")
 */
class House
{
    public const HOUSE_TYPE_TOWNHOUSE = 'REIHENHAUS';

    public const HOUSE_TYPE_END_TERRACE = 'REIHENEND';

    public const HOUSE_TYPE_MID_TERRACE = 'REIHENMITTEL';

    public const HOUSE_TYPE_CORNER_TERRACE = 'REIHENECK';

    public const HOUSE_TYPE_SEMI_DETACHED_HOUSE = 'DOPPELHAUSHAELFTE';

    public const HOUSE_TYPE_SINGLE_FAMILY_HOUSE = 'EINFAMILIENHAUS';

    public const HOUSE_TYPE_CITY_HOUSE = 'STADTHAUS';

    public const HOUSE_TYPE_BUNGALOW = 'BUNGALOW';

    public const HOUSE_TYPE_VILLA = 'VILLA';

    public const HOUSE_TYPE_FARMHOUSE = 'RESTHOF';

    public const HOUSE_TYPE_COUNTRY_HOUSE = 'LANDHAUS';

    public const HOUSE_TYPE_CASTLE = 'SCHLOSS';

    public const HOUSE_TYPE_TWO_FAMILY_HOUSE = 'ZWEIFAMILIENHAUS';

    public const HOUSE_TYPE_MULTI_FAMILY_HOUSE = 'MEHRFAMILIENHAUS';

    public const HOUSE_TYPE_HOLIDAY_HOUSE = 'FERIENHAUS';

    public const HOUSE_TYPE_MOUNTAIN_HUT = 'BERGHUETTE';

    public const HOUSE_TYPE_CHALET = 'CHALET';

    public const HOUSE_TYPE_BEACH_HOUSE = 'STRANDHAUS';

    public const HOUSE_TYPE_SUMMER_HOUSE = 'LAUBE-DATSCHE-GARTENHAUS';

    public const HOUSE_TYPE_APARTMENT_BUILDING = 'APARTMENTHAUS';

    public const HOUSE_TYPE_MANOR_HOUSE = 'HERRENHAUS';

    public const HOUSE_TYPE_FINCA = 'FINCA';

    public const HOUSE_TYPE_RUSTICO = 'RUSTICO';

    public const HOUSE_TYPE_PREFABRICATED_HOUSE = 'FERTIGHAUS';

    public const HOUSE_TYPE_NO_INFORMATION = 'KEINE_ANGABE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("haustyp")
         * optional
         *
         * @see HOUSE_TYPE_* constants
         */
        protected string $houseType = ''
    ) {}

    public function getHouseType(): ?string
    {
        return $this->houseType;
    }

    public function setHouseType(?string $houseType): House
    {
        $this->houseType = $houseType;

        return $this;
    }
}
