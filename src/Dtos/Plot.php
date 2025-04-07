<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Plot
 * Objektart / Typ f. Grundstücke
 *
 * @XmlRoot("grundstueck")
 */
class Plot
{
    public const PROPERTY_TYPE_LIVING = 'WOHNEN';

    public const PROPERTY_TYPE_COMMERCIAL = 'GEWERBE';

    public const PROPERTY_TYPE_INDUSTRIAL = 'INDUSTRIE';

    public const PROPERTY_TYPE_AGRICULTURAL_FORESTRY = 'LAND_FORSTWIRSCHAFT';

    public const PROPERTY_TYPE_LEISURE = 'FREIZEIT';

    public const PROPERTY_TYPE_GEMISCHT = 'GEMISCHT';

    public const PROPERTY_TYPE_BUSINESS_PARK = 'GEWERBEPARK';

    public const PROPERTY_TYPE_SPECIAL_USE = 'SONDERNUTZUNG';

    public const PROPERTY_TYPE_LAKESIDE_PROPERTY = 'SEELIEGENSCHAFT';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("grundst_typ")
         * optional
         *
         * @see PROPERTY_TYPE_* constants
         */
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
