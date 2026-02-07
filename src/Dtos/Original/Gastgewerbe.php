<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gastgewerbe
 * Objektart / Typ f. Gastgewerbe
 */
#[XmlRoot(name: 'gastgewerbe')]
class Gastgewerbe
{
    public const string GASTGEW_TYP_GASTRONOMIE = 'GASTRONOMIE';

    public const string GASTGEW_TYP_GASTRONOMIE_UND_WOHNUNG = 'GASTRONOMIE_UND_WOHNUNG';

    public const string GASTGEW_TYP_PENSIONEN = 'PENSIONEN';

    public const string GASTGEW_TYP_HOTELS = 'HOTELS';

    public const string GASTGEW_TYP_WEITERE_BEHERBERGUNGSBETRIEBE = 'WEITERE_BEHERBERGUNGSBETRIEBE';

    public const string GASTGEW_TYP_BAR = 'BAR';

    public const string GASTGEW_TYP_CAFE = 'CAFE';

    public const string GASTGEW_TYP_DISCOTHEK = 'DISCOTHEK';

    public const string GASTGEW_TYP_RESTAURANT = 'RESTAURANT';

    public const string GASTGEW_TYP_RAUCHERLOKAL = 'RAUCHERLOKAL';

    public const string GASTGEW_TYP_EINRAUMLOKAL = 'EINRAUMLOKAL';

    public function __construct(
        /**
         * optional
         *
         * @see GASTGEW_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('gastgew_typ')]
        protected string $gastgewTyp = ''
    ) {}

    public function getGastgewTyp(): ?string
    {
        return $this->gastgewTyp;
    }

    public function setGastgewTyp(?string $gastgewTyp): Gastgewerbe
    {
        $this->gastgewTyp = $gastgewTyp;

        return $this;
    }
}
