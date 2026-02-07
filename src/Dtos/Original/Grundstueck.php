<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Grundstueck
 * Objektart / Typ f. Grundstücke
 */
#[XmlRoot(name: 'grundstueck')]
class Grundstueck
{
    public const string GRUNDST_TYP_WOHNEN = 'WOHNEN';

    public const string GRUNDST_TYP_GEWERBE = 'GEWERBE';

    public const string GRUNDST_TYP_INDUSTRIE = 'INDUSTRIE';

    public const string GRUNDST_TYP_LAND_FORSTWIRSCHAFT = 'LAND_FORSTWIRSCHAFT';

    public const string GRUNDST_TYP_FREIZEIT = 'FREIZEIT';

    public const string GRUNDST_TYP_GEMISCHT = 'GEMISCHT';

    public const string GRUNDST_TYP_GEWERBEPARK = 'GEWERBEPARK';

    public const string GRUNDST_TYP_SONDERNUTZUNG = 'SONDERNUTZUNG';

    public const string GRUNDST_TYP_SEELIEGENSCHAFT = 'SEELIEGENSCHAFT';

    public function __construct(
        /**
         * optional
         *
         * @see GRUNDST_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('grundst_typ')]
        protected string $grundstTyp = ''
    ) {}

    public function getGrundstTyp(): ?string
    {
        return $this->grundstTyp;
    }

    public function setGrundstTyp(?string $grundstTyp): Grundstueck
    {
        $this->grundstTyp = $grundstTyp;

        return $this;
    }
}
