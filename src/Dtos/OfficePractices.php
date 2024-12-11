<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class OfficePractices
 * Objektart / Typ f. Büro/Praxen
 *
 * @XmlRoot("buero_praxen")
 */
class OfficePractices
{
    public const OFFICE_TYPE_OFFICE_SPACE = 'BUEROFLAECHE';

    public const OFFICE_TYPE_OFFICE_BUILDING = 'BUEROHAUS';

    public const OFFICE_TYPE_OFFICE_CENTER = 'BUEROZENTRUM';

    public const OFFICE_TYPE_LOFT_ATELIER = 'LOFT_ATELIER';

    public const OFFICE_TYPE_PRACTICE = 'PRAXIS';

    public const OFFICE_TYPE_PRACTICE_AREA = 'PRAXISFLAECHE';

    public const OFFICE_TYPE_PRACTICE_HOUSE = 'PRAXISHAUS';

    public const OFFICE_TYPE_EXHIBITION_SPACE = 'AUSSTELLUNGSFLAECHE';

    public const OFFICE_TYPE_COWORKING = 'COWORKING';

    public const OFFICE_TYPE_SHARED_OFFICE = 'SHARED_OFFICE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("buero_typ")
         * optional
         *
         * @see OFFICE_TYPE_* constants
         */
        protected string $officeType = ''
    ) {}

    public function getOfficeType(): ?string
    {
        return $this->officeType;
    }

    public function setOfficeType(?string $officeType): OfficePractices
    {
        $this->officeType = $officeType;

        return $this;
    }
}
