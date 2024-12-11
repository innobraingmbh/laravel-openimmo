<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Hospitality
 * Objektart / Typ f. Gastgewerbe
 *
 * @XmlRoot("gastgewerbe")
 */
class Hospitality
{
    public const HOSPITALITY_TYPE_GASTRONOMY = 'GASTRONOMIE';

    public const HOSPITALITY_TYPE_GASTRONOMY_AND_APARTMENT = 'GASTRONOMIE_UND_WOHNUNG';

    public const HOSPITALITY_TYPE_GUESTHOUSES = 'PENSIONEN';

    public const HOSPITALITY_TYPE_HOTELS = 'HOTELS';

    public const HOSPITALITY_TYPE_OTHER_ACCOMMODATION_FACILITIES = 'WEITERE_BEHERBERGUNGSBETRIEBE';

    public const HOSPITALITY_TYPE_BAR = 'BAR';

    public const HOSPITALITY_TYPE_CAFE = 'CAFE';

    public const HOSPITALITY_TYPE_NIGHTCLUB = 'DISCOTHEK';

    public const HOSPITALITY_TYPE_RESTAURANT = 'RESTAURANT';

    public const HOSPITALITY_TYPE_SMOKING_ESTABLISHMENT = 'RAUCHERLOKAL';

    public const HOSPITALITY_TYPE_ONE_ROOM_ESTABLISHMENT = 'EINRAUMLOKAL';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("gastgew_typ")
     * optional
     *
     * @see HOSPITALITY_TYPE_* constants
     */
    protected string $hospitalityType = '';

    public function __construct(string $hospitalityType = '')
    {
        $this->hospitalityType = $hospitalityType;
    }

    public function getHospitalityType(): ?string
    {
        return $this->hospitalityType;
    }

    public function setHospitalityType(?string $hospitalityType): Hospitality
    {
        $this->hospitalityType = $hospitalityType;

        return $this;
    }
}
