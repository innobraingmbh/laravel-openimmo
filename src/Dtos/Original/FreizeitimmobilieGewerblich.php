<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class FreizeitimmobilieGewerblich
 * Objektart / Typ f. gew. Freizeitimmobilen
 */
#[XmlRoot(name: 'freizeitimmobilie_gewerblich')]
class FreizeitimmobilieGewerblich
{
    public const string FREIZEIT_TYP_SPORTANLAGEN = 'SPORTANLAGEN';

    public const string FREIZEIT_TYP_VERGNUEGUNGSPARKS_UND_CENTER = 'VERGNUEGUNGSPARKS_UND_CENTER';

    public const string FREIZEIT_TYP_FREIZEITANLAGE = 'FREIZEITANLAGE';

    public function __construct(
        /**
         * optional
         *
         * @see FREIZEIT_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('freizeit_typ')]
        protected string $freizeitTyp = ''
    ) {}

    public function getFreizeitTyp(): ?string
    {
        return $this->freizeitTyp;
    }

    public function setFreizeitTyp(?string $freizeitTyp): FreizeitimmobilieGewerblich
    {
        $this->freizeitTyp = $freizeitTyp;

        return $this;
    }
}
