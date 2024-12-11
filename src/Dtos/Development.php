<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Development
 * Stand der Erschließung, Optionen nicht kombinierbar
 *
 * @XmlRoot("erschliessung")
 */
class Development
{
    public const DEVELOPMENT_ATTRIBUTE_UNDEVELOPED = 'UNERSCHLOSSEN';

    public const DEVELOPMENT_ATTRIBUTE_PARTIALLY_DEVELOPED = 'TEILERSCHLOSSEN';

    public const DEVELOPMENT_ATTRIBUTE_FULLY_DEVELOPED = 'VOLLERSCHLOSSEN';

    public const DEVELOPMENT_ATTRIBUTE_USUALLY_DEVELOPED = 'ORTSUEBLICHERSCHLOSSEN';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("erschl_attr")
         * optional
         *
         * @see DEVELOPMENT_ATTRIBUTE_* constants
         */
        protected string $developmentAttribute = ''
    ) {}

    public function getDevelopmentAttribute(): ?string
    {
        return $this->developmentAttribute;
    }

    public function setDevelopmentAttribute(?string $developmentAttribute): Development
    {
        $this->developmentAttribute = $developmentAttribute;

        return $this;
    }
}
