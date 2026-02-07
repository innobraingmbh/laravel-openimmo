<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LandUndForstwirtschaft
 * Objektart / Typ f. Land-/Forstwirtschaft
 */
#[XmlRoot(name: 'land_und_forstwirtschaft')]
class LandUndForstwirtschaft
{
    public const string LAND_TYP_LANDWIRTSCHAFTLICHE_BETRIEBE = 'LANDWIRTSCHAFTLICHE_BETRIEBE';

    public const string LAND_TYP_BAUERNHOF = 'BAUERNHOF';

    public const string LAND_TYP_AUSSIEDLERHOF = 'AUSSIEDLERHOF';

    public const string LAND_TYP_GARTENBAU = 'GARTENBAU';

    public const string LAND_TYP_ACKERBAU = 'ACKERBAU';

    public const string LAND_TYP_WEINBAU = 'WEINBAU';

    public const string LAND_TYP_VIEHWIRTSCHAFT = 'VIEHWIRTSCHAFT';

    public const string LAND_TYP_JAGD_UND_FORSTWIRTSCHAFT = 'JAGD_UND_FORSTWIRTSCHAFT';

    public const string LAND_TYP_TEICH_UND_FISCHWIRTSCHAFT = 'TEICH_UND_FISCHWIRTSCHAFT';

    public const string LAND_TYP_SCHEUNEN = 'SCHEUNEN';

    public const string LAND_TYP_REITERHOEFE = 'REITERHOEFE';

    public const string LAND_TYP_SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN = 'SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN';

    public const string LAND_TYP_ANWESEN = 'ANWESEN';

    public const string LAND_TYP_JAGDREVIER = 'JAGDREVIER';

    public function __construct(
        /**
         * optional
         *
         * @see LAND_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('land_typ')]
        protected string $landTyp = ''
    ) {}

    public function getLandTyp(): ?string
    {
        return $this->landTyp;
    }

    public function setLandTyp(?string $landTyp): LandUndForstwirtschaft
    {
        $this->landTyp = $landTyp;

        return $this;
    }
}
