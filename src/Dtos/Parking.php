<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Parking
 * Objektart für diverse Parkplatz Angaben
 *
 * @XmlRoot("parken")
 */
class Parking
{
    public const PARKING_TYPE_PARKING_SPACE = 'STELLPLATZ';

    public const PARKING_TYPE_CARPORT = 'CARPORT';

    public const PARKING_TYPE_DOUBLE_GARAGE = 'DOPPELGARAGE';

    public const PARKING_TYPE_DUPLEX = 'DUPLEX';

    public const PARKING_TYPE_UNDERGROUND_GARAGE = 'TIEFGARAGE';

    public const PARKING_TYPE_BOAT_MOORING = 'BOOTSLIEGEPLATZ';

    public const PARKING_TYPE_SINGLE_GARAGE = 'EINZELGARAGE';

    public const PARKING_TYPE_PARKING_GARAGE = 'PARKHAUS';

    public const PARKING_TYPE_UNDERGROUND_PARKING_SPACE = 'TIEFGARAGENSTELLPLATZ';

    public const PARKING_TYPE_PARKING_SPACE_WITH_ELECTRICITY = 'PARKPLATZ_STROM';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("parken_typ")
         * optional
         *
         * @see PARKING_TYPE_* constants
         */
        protected string $parkingType = ''
    ) {}

    public function getParkingType(): ?string
    {
        return $this->parkingType;
    }

    public function setParkingType(?string $parkingType): Parking
    {
        $this->parkingType = $parkingType;

        return $this;
    }
}
