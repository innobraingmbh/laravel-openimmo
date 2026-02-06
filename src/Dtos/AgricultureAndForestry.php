<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AgricultureAndForestry
 * Objektart / Typ f. Land-/Forstwirtschaft
 */
#[XmlRoot(name: 'land_und_forstwirtschaft')]
class AgricultureAndForestry
{
    public const string LAND_TYPE_AGRICULTURAL_ENTERPRISES = 'LANDWIRTSCHAFTLICHE_BETRIEBE';

    public const string LAND_TYPE_FARM = 'BAUERNHOF';

    public const string LAND_TYPE_SETTLER_S_FARM = 'AUSSIEDLERHOF';

    public const string LAND_TYPE_HORTICULTURE = 'GARTENBAU';

    public const string LAND_TYPE_ARABLE_FARMING = 'ACKERBAU';

    public const string LAND_TYPE_VITICULTURE = 'WEINBAU';

    public const string LAND_TYPE_LIVESTOCK_FARMING = 'VIEHWIRTSCHAFT';

    public const string LAND_TYPE_HUNTING_AND_FORESTRY = 'JAGD_UND_FORSTWIRTSCHAFT';

    public const string LAND_TYPE_POND_AND_FISHERY = 'TEICH_UND_FISCHWIRTSCHAFT';

    public const string LAND_TYPE_BARNS = 'SCHEUNEN';

    public const string LAND_TYPE_EQUESTRIAN_FARMS = 'REITERHOEFE';

    public const string LAND_TYPE_OTHER_AGRICULTURAL_PROPERTIES = 'SONSTIGE_LANDWIRTSCHAFTSIMMOBILIEN';

    public const string LAND_TYPE_ESTATE = 'ANWESEN';

    public const string LAND_TYPE_HUNTING_GROUND = 'JAGDREVIER';

    public function __construct(
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('land_typ')]
        protected string $countryType = ''
    ) {}

    public function getCountryType(): ?string
    {
        return $this->countryType;
    }

    public function setCountryType(?string $countryType): AgricultureAndForestry
    {
        $this->countryType = $countryType;

        return $this;
    }
}
