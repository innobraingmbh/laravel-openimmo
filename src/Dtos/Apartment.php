<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Apartment
 * Objektart / Typ f. Wohnungen
 *
 * @XmlRoot("wohnung")
 */
class Apartment
{
    public const APARTMENT_TYPE_ATTIC = 'DACHGESCHOSS';

    public const APARTMENT_TYPE_MAISONETTE = 'MAISONETTE';

    public const APARTMENT_TYPE_LOFT_STUDIO_ATELIER = 'LOFT-STUDIO-ATELIER';

    public const APARTMENT_TYPE_PENTHOUSE = 'PENTHOUSE';

    public const APARTMENT_TYPE_TERRACES = 'TERRASSEN';

    public const APARTMENT_TYPE_FLOOR = 'ETAGE';

    public const APARTMENT_TYPE_GROUND_FLOOR = 'ERDGESCHOSS';

    public const APARTMENT_TYPE_BASEMENT = 'SOUTERRAIN';

    public const APARTMENT_TYPE_APARTMENT = 'APARTMENT';

    public const APARTMENT_TYPE_HOLIDAY_APARTMENT = 'FERIENWOHNUNG';

    public const APARTMENT_TYPE_GALLERY = 'GALERIE';

    public const APARTMENT_TYPE_RAW_ATTIC = 'ROHDACHBODEN';

    public const APARTMENT_TYPE_PENTHOUSE_APARTMENT = 'ATTIKAWOHNUNG';

    public const APARTMENT_TYPE_NO_INFORMATION = 'KEINE_ANGABE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("wohnungtyp")
         * optional
         *
         * @see APARTMENT_TYPE_* constants
         */
        protected string $apartmentType = ''
    ) {}

    public function getApartmentType(): ?string
    {
        return $this->apartmentType;
    }

    public function setApartmentType(?string $apartmentType): Apartment
    {
        $this->apartmentType = $apartmentType;

        return $this;
    }
}
