<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Age
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 *
 * @XmlRoot("alter")
 */
class Age
{
    public const AGE_ATTRIBUTE_OLD_BUILDING = 'ALTBAU';

    public const AGE_ATTRIBUTE_NEW_CONSTRUCTION = 'NEUBAU';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("alter_attr")
     * optional
     *
     * @see AGE_ATTRIBUTE_* constants
     */
    protected string $ageAttribute = '';

    public function __construct(string $ageAttribute = '')
    {
        $this->ageAttribute = $ageAttribute;
    }

    public function getAgeAttribute(): ?string
    {
        return $this->ageAttribute;
    }

    public function setAgeAttribute(?string $ageAttribute): Age
    {
        $this->ageAttribute = $ageAttribute;

        return $this;
    }
}
