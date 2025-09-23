<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ApartmentBuildingInvestmentProperty
 * Objektyp / Typ f. Zins und Renditehäuser
 *
 * @XmlRoot("zinshaus_renditeobjekt")
 */
class ApartmentBuildingInvestmentProperty
{
    public const string INTEREST_TYPE_MULTI_FAMILY_HOUSE = 'MEHRFAMILIENHAUS';

    public const string INTEREST_TYPE_RESIDENTIAL_AND_COMMERCIAL_BUILDING = 'WOHN_UND_GESCHAEFTSHAUS';

    public const string INTEREST_TYPE_BUSINESS_BUILDING = 'GESCHAEFTSHAUS';

    public const string INTEREST_TYPE_OFFICE_BUILDING = 'BUEROGEBAEUDE';

    public const string INTEREST_TYPE_SELF_SERVICE_MARKETS = 'SB_MAERKTE';

    public const string INTEREST_TYPE_SHOPPING_CENTERS = 'EINKAUFSCENTREN';

    public const string INTEREST_TYPE_HOUSING_ESTATES = 'WOHNANLAGEN';

    public const string INTEREST_TYPE_CONSUMER_MARKETS = 'VERBRAUCHERMAERKTE';

    public const string INTEREST_TYPE_INDUSTRIAL_FACILITIES = 'INDUSTRIEANLAGEN';

    public const string INTEREST_TYPE_NURSING_HOME = 'PFLEGEHEIM';

    public const string INTEREST_TYPE_SANATORIUM = 'SANATORIUM';

    public const string INTEREST_TYPE_SENIOR_CITIZEN_HOME = 'SENIORENHEIM';

    public const string INTEREST_TYPE_ASSISTED_LIVING = 'BETREUTES-WOHNEN';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("zins_typ")
         * optional
         *
         * @see INTEREST_TYPE_* constants
         */
        protected string $interestType = ''
    ) {}

    public function getInterestType(): ?string
    {
        return $this->interestType;
    }

    public function setInterestType(?string $interestType): ApartmentBuildingInvestmentProperty
    {
        $this->interestType = $interestType;

        return $this;
    }
}
