<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Basement
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 *
 * @XmlRoot("unterkellert")
 */
class Basement
{
    public const CELLAR_JA = 'JA';

    public const CELLAR_NEIN = 'NEIN';

    public const CELLAR_PARTIAL = 'TEIL';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("keller")
         * optional
         *
         * @see CELLAR_* constants
         */
        protected string $basement = ''
    ) {}

    public function getBasement(): ?string
    {
        return $this->basement;
    }

    public function setBasement(?string $basement): Basement
    {
        $this->basement = $basement;

        return $this;
    }
}
