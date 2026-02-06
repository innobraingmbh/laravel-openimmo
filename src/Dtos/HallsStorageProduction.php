<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HallsStorageProduction
 * Objektart / Typ f. Hallen/Lager/Produktion
 */
#[XmlRoot(name: 'hallen_lager_prod')]
class HallsStorageProduction
{
    public const string HALL_TYPE_HALL = 'HALLE';

    public const string HALL_TYPE_INDUSTRIAL_HALL = 'INDUSTRIEHALLE';

    public const string HALL_TYPE_WAREHOUSE = 'LAGER';

    public const string HALL_TYPE_STORAGE_AREAS = 'LAGERFLAECHEN';

    public const string HALL_TYPE_WAREHOUSE_WITH_OPEN_SPACE = 'LAGER_MIT_FREIFLAECHE';

    public const string HALL_TYPE_HIGH_BAY_WAREHOUSE = 'HOCHREGALLAGER';

    public const string HALL_TYPE_FORWARDING_WAREHOUSE = 'SPEDITIONSLAGER';

    public const string HALL_TYPE_PRODUCTION = 'PRODUKTION';

    public const string HALL_TYPE_WORKSHOP = 'WERKSTATT';

    public const string HALL_TYPE_SERVICE = 'SERVICE';

    public const string HALL_TYPE_OPEN_SPACES = 'FREIFLAECHEN';

    public const string HALL_TYPE_COLD_STORAGE = 'KUEHLHAUS';

    public function __construct(
        /**
         * optional
         *
         * @see HALL_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('hallen_typ')]
        protected string $hallType = ''
    ) {}

    public function getHallType(): ?string
    {
        return $this->hallType;
    }

    public function setHallType(?string $hallType): HallsStorageProduction
    {
        $this->hallType = $hallType;

        return $this;
    }
}
