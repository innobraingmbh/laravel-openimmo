<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gender
 * Soll das Objekt nur an Frauen bzw. nur an Männer vermietet werden,
 *  fehlende Angabe wird als 'Ja' interpretiert
 *
 * @XmlRoot("geschlecht")
 */
class Gender
{
    public const GENDER_ATTRIBUTE_ANY = 'EGAL';

    public const GENDER_ATTRIBUTE_MALE_ONLY = 'NUR_MANN';

    public const GENDER_ATTRIBUTE_FEMALE_ONLY = 'NUR_FRAU';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("geschl_attr")
         * optional
         *
         * @see GENDER_ATTRIBUTE_* constants
         */
        protected string $genderAttribute = ''
    ) {}

    public function getGenderAttribute(): ?string
    {
        return $this->genderAttribute;
    }

    public function setGenderAttribute(?string $genderAttribute): Gender
    {
        $this->genderAttribute = $genderAttribute;

        return $this;
    }
}
