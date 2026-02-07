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
 */
#[XmlRoot(name: 'freizeitimmobilie_gewerblich')]
class CommercialLeisureProperty
{
    public const string LEISURE_TYPE_SPORTS_FACILITIES = 'SPORTANLAGEN';

    public const string LEISURE_TYPE_AMUSEMENT_PARKS_AND_CENTERS = 'VERGNUEGUNGSPARKS_UND_CENTER';

    public const string LEISURE_TYPE_LEISURE_FACILITY = 'FREIZEITANLAGE';

    public function __construct(
        /**
         * optional
         *
         * @see LEISURE_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('freizeit_typ')]
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
