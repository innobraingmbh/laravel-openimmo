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
 */
#[XmlRoot(name: 'wohnung')]
class Apartment
{
    public const string APARTMENT_TYPE_ATTIC = 'DACHGESCHOSS';

    public const string APARTMENT_TYPE_MAISONETTE = 'MAISONETTE';

    public const string APARTMENT_TYPE_LOFT_STUDIO_ATELIER = 'LOFT-STUDIO-ATELIER';

    public const string APARTMENT_TYPE_PENTHOUSE = 'PENTHOUSE';

    public const string APARTMENT_TYPE_TERRACES = 'TERRASSEN';

    public const string APARTMENT_TYPE_FLOOR = 'ETAGE';

    public const string APARTMENT_TYPE_GROUND_FLOOR = 'ERDGESCHOSS';

    public const string APARTMENT_TYPE_BASEMENT = 'SOUTERRAIN';

    public const string APARTMENT_TYPE_APARTMENT = 'APARTMENT';

    public const string APARTMENT_TYPE_HOLIDAY_APARTMENT = 'FERIENWOHNUNG';

    public const string APARTMENT_TYPE_GALLERY = 'GALERIE';

    public const string APARTMENT_TYPE_RAW_ATTIC = 'ROHDACHBODEN';

    public const string APARTMENT_TYPE_PENTHOUSE_APARTMENT = 'ATTIKAWOHNUNG';

    public const string APARTMENT_TYPE_NO_INFORMATION = 'KEINE_ANGABE';

    public function __construct(
        /**
         * optional
         *
         * @see APARTMENT_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('wohnungtyp')]
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
