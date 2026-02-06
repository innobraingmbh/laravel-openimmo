<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Hospitality
 * Objektart / Typ f. Gastgewerbe
 */
#[XmlRoot(name: 'gastgewerbe')]
class Hospitality
{
    public const string HOSPITALITY_TYPE_GASTRONOMY = 'GASTRONOMIE';

    public const string HOSPITALITY_TYPE_GASTRONOMY_AND_APARTMENT = 'GASTRONOMIE_UND_WOHNUNG';

    public const string HOSPITALITY_TYPE_GUESTHOUSES = 'PENSIONEN';

    public const string HOSPITALITY_TYPE_HOTELS = 'HOTELS';

    public const string HOSPITALITY_TYPE_OTHER_ACCOMMODATION_FACILITIES = 'WEITERE_BEHERBERGUNGSBETRIEBE';

    public const string HOSPITALITY_TYPE_BAR = 'BAR';

    public const string HOSPITALITY_TYPE_CAFE = 'CAFE';

    public const string HOSPITALITY_TYPE_NIGHTCLUB = 'DISCOTHEK';

    public const string HOSPITALITY_TYPE_RESTAURANT = 'RESTAURANT';

    public const string HOSPITALITY_TYPE_SMOKING_ESTABLISHMENT = 'RAUCHERLOKAL';

    public const string HOSPITALITY_TYPE_ONE_ROOM_ESTABLISHMENT = 'EINRAUMLOKAL';

    public function __construct(
        /**
         * optional
         *
         * @see HOSPITALITY_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('gastgew_typ')]
        protected string $hospitalityType = ''
    ) {}

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
