<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HallsStorageProduction
 * Objektart / Typ f. Hallen/Lager/Produktion
 *
 * @XmlRoot("hallen_lager_prod")
 */
class HallsStorageProduction
{
    public const HALL_TYPE_HALL = 'HALLE';

    public const HALL_TYPE_INDUSTRIAL_HALL = 'INDUSTRIEHALLE';

    public const HALL_TYPE_WAREHOUSE = 'LAGER';

    public const HALL_TYPE_STORAGE_AREAS = 'LAGERFLAECHEN';

    public const HALL_TYPE_WAREHOUSE_WITH_OPEN_SPACE = 'LAGER_MIT_FREIFLAECHE';

    public const HALL_TYPE_HIGH_BAY_WAREHOUSE = 'HOCHREGALLAGER';

    public const HALL_TYPE_FORWARDING_WAREHOUSE = 'SPEDITIONSLAGER';

    public const HALL_TYPE_PRODUCTION = 'PRODUKTION';

    public const HALL_TYPE_WORKSHOP = 'WERKSTATT';

    public const HALL_TYPE_SERVICE = 'SERVICE';

    public const HALL_TYPE_OPEN_SPACES = 'FREIFLAECHEN';

    public const HALL_TYPE_COLD_STORAGE = 'KUEHLHAUS';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("hallen_typ")
     * optional
     *
     * @see HALL_TYPE_* constants
     */
    protected string $hallType = '';

    public function __construct(string $hallType = '')
    {
        $this->hallType = $hallType;
    }

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
