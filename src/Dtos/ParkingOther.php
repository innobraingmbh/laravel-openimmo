<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ParkingOther
 */
#[XmlRoot(name: 'stp_sonstige')]
class ParkingOther
{
    public const string PLACE_TYPE_OPEN_SPACE = 'FREIPLATZ';

    public const string PLACE_TYPE_GARAGE = 'GARAGE';

    public const string PLACE_TYPE_UNDERGROUND_GARAGE = 'TIEFGARAGE';

    public const string PLACE_TYPE_CARPORT = 'CARPORT';

    public const string PLACE_TYPE_DUPLEX = 'DUPLEX';

    public const string PLACE_TYPE_PARKING_GARAGE = 'PARKHAUS';

    public const string PLACE_TYPE_OTHER = 'SONSTIGES';

    public function __construct(
        /**
         * optional
         *
         * @see PLACE_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('platzart')]
        protected string $spaceType = '',
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('bemerkung')]
        protected ?string $remark = null
    ) {}

    public function getSpaceType(): ?string
    {
        return $this->spaceType;
    }

    public function setSpaceType(?string $spaceType): ParkingOther
    {
        $this->spaceType = $spaceType;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): ParkingOther
    {
        $this->remark = $remark;

        return $this;
    }
}
