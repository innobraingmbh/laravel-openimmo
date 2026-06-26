<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Age
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 */
#[Description('Age information of the property or building')]
#[XmlRoot(name: 'alter')]
class Age
{
    public const string AGE_ATTRIBUTE_OLD_BUILDING = 'ALTBAU';

    public const string AGE_ATTRIBUTE_NEW_CONSTRUCTION = 'NEUBAU';

    public function __construct(
        /**
         * optional
         *
         * @see AGE_ATTRIBUTE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('alter_attr')]
        #[Description('XML attribute for the age value')]
        protected string $ageAttribute = ''
    ) {}

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
