<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DevelopableAccordingTo
 * Bebaubar nach Bebauungsrichtlinien, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'bebaubar_nach')]
class DevelopableAccordingTo
{
    public const string BUILDABLE_ATTRIBUTE_NEIGHBORHOOD = '34_NACHBARSCHAFT';

    public const string BUILDABLE_ATTRIBUTE_OUTLYING_AREA = '35_AUSSENGEBIET';

    public const string BUILDABLE_ATTRIBUTE_DEVELOPMENT_PLAN = 'B_PLAN';

    public const string BUILDABLE_ATTRIBUTE_NOT_BUILDABLE_LAND = 'KEIN BAULAND';

    public const string BUILDABLE_ATTRIBUTE_EXPECTED_BUILDING_LAND = 'BAUERWARTUNGSLAND';

    public const string BUILDABLE_ATTRIBUTE_COUNTRY_SPECIFIC = 'LAENDERSPEZIFISCH';

    public const string BUILDABLE_ATTRIBUTE_BUILDABLE_LAND_WITHOUT_DEVELOPMENT_PLAN = 'BAULAND_OHNE_B_PLAN';

    public function __construct(
        /**
         * optional
         *
         * @see BUILDABLE_ATTRIBUTE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('bebaubar_attr')]
        protected string $developableAttribute = ''
    ) {}

    public function getDevelopableAttribute(): ?string
    {
        return $this->developableAttribute;
    }

    public function setDevelopableAttribute(?string $developableAttribute): DevelopableAccordingTo
    {
        $this->developableAttribute = $developableAttribute;

        return $this;
    }
}
