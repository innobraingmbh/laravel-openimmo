<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DevelopmentScope
 * Detailbeschreibung der Massnahmen
 *
 * @XmlRoot("erschliessung_umfang")
 */
class DevelopmentScope
{
    public const DEVELOPMENT_ATTRIBUTE_GAS = 'GAS';

    public const DEVELOPMENT_ATTRIBUTE_WATER = 'WASSER';

    public const DEVELOPMENT_ATTRIBUTE_ELECTRICITY = 'STROM';

    public const DEVELOPMENT_ATTRIBUTE_TELECOMMUNICATION = 'TK';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("erschl_attr")
         * optional
         *
         * @see DEVELOPMENT_ATTRIBUTE_* constants
         */
        protected string $developmentAttribute = ''
    ) {}

    public function getDevelopmentAttribute(): ?string
    {
        return $this->developmentAttribute;
    }

    public function setDevelopmentAttribute(?string $developmentAttribute): DevelopmentScope
    {
        $this->developmentAttribute = $developmentAttribute;

        return $this;
    }
}
