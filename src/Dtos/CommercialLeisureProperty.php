<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class CommercialLeisureProperty
 * Objektart / Typ f. gew. Freizeitimmobilen
 *
 * @XmlRoot("freizeitimmobilie_gewerblich")
 */
class CommercialLeisureProperty
{
    public const LEISURE_TYPE_SPORTS_FACILITIES = 'SPORTANLAGEN';

    public const LEISURE_TYPE_AMUSEMENT_PARKS_AND_CENTERS = 'VERGNUEGUNGSPARKS_UND_CENTER';

    public const LEISURE_TYPE_LEISURE_FACILITY = 'FREIZEITANLAGE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("freizeit_typ")
         * optional
         *
         * @see LEISURE_TYPE_* constants
         */
        protected string $leisureType = ''
    ) {}

    public function getLeisureType(): ?string
    {
        return $this->leisureType;
    }

    public function setLeisureType(?string $leisureType): CommercialLeisureProperty
    {
        $this->leisureType = $leisureType;

        return $this;
    }
}
