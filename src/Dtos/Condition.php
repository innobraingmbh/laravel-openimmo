<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Condition
 * Zustand des Objektes, Optionen nicht kombinierbar
 *
 * @XmlRoot("zustand")
 */
class Condition
{
    public const string CONDITION_TYPE_FIRST_OCCUPANCY = 'ERSTBEZUG';

    public const string CONDITION_TYPE_PARTIAL_FULL_RENOVATION_NEEDED = 'TEIL_VOLLRENOVIERUNGSBED';

    public const string CONDITION_TYPE_AS_NEW = 'NEUWERTIG';

    public const string CONDITION_TYPE_PARTIALLY_FULLY_REFURBISHED = 'TEIL_VOLLSANIERT';

    public const string CONDITION_TYPE_PARTIALLY_FULLY_RENOVATED = 'TEIL_VOLLRENOVIERT';

    public const string CONDITION_TYPE_PARTIALLY_RENOVATED = 'TEIL_SANIERT';

    public const string CONDITION_TYPE_FULLY_RENOVATED = 'VOLL_SANIERT';

    public const string CONDITION_TYPE_IN_NEED_OF_RENOVATION = 'SANIERUNGSBEDUERFTIG';

    public const string CONDITION_TYPE_DILAPIDATED = 'BAUFAELLIG';

    public const string CONDITION_TYPE_BY_AGREEMENT = 'NACH_VEREINBARUNG';

    public const string CONDITION_TYPE_MODERNIZED = 'MODERNISIERT';

    public const string CONDITION_TYPE_WELL_MAINTAINED = 'GEPFLEGT';

    public const string CONDITION_TYPE_SHELL_CONSTRUCTION = 'ROHBAU';

    public const string CONDITION_TYPE_GUTTED = 'ENTKERNT';

    public const string CONDITION_TYPE_DEMOLITION_PROPERTY = 'ABRISSOBJEKT';

    public const string CONDITION_TYPE_PLANNED = 'PROJEKTIERT';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("zustand_art")
         * optional
         *
         * @see CONDITION_TYPE_* constants
         */
        protected string $conditionType = ''
    ) {}

    public function getConditionType(): ?string
    {
        return $this->conditionType;
    }

    public function setConditionType(?string $conditionType): Condition
    {
        $this->conditionType = $conditionType;

        return $this;
    }
}
