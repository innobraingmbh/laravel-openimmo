<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Plot
 * Objektart / Typ f. Grundstücke
 */
#[Description('Plot property with type specification')]
#[XmlRoot(name: 'grundstueck')]
class Plot
{
    public const string PROPERTY_TYPE_LIVING = 'WOHNEN';

    public const string PROPERTY_TYPE_COMMERCIAL = 'GEWERBE';

    public const string PROPERTY_TYPE_INDUSTRIAL = 'INDUSTRIE';

    public const string PROPERTY_TYPE_AGRICULTURAL_FORESTRY = 'LAND_FORSTWIRSCHAFT';

    public const string PROPERTY_TYPE_LEISURE = 'FREIZEIT';

    public const string PROPERTY_TYPE_GEMISCHT = 'GEMISCHT';

    public const string PROPERTY_TYPE_BUSINESS_PARK = 'GEWERBEPARK';

    public const string PROPERTY_TYPE_SPECIAL_USE = 'SONDERNUTZUNG';

    public const string PROPERTY_TYPE_LAKESIDE_PROPERTY = 'SEELIEGENSCHAFT';

    public function __construct(
        /**
         * optional
         *
         * @see PROPERTY_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('grundst_typ')]
        #[Description('Type of the plot property')]
        protected string $plotType = ''
    ) {}

    public function getPlotType(): ?string
    {
        return $this->plotType;
    }

    public function setPlotType(?string $plotType): Plot
    {
        $this->plotType = $plotType;

        return $this;
    }
}
