<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Furnished
 * Wie ist die Möblierung: Voll, Teil oder keine Aussage
 *
 * @description Furnishing information of the property
 */
#[XmlRoot(name: 'moebliert')]
class Furnished
{
    public const string FURNISHED_FULL = 'VOLL';

    public const string FURNISHED_PARTIAL = 'TEIL';

    public function __construct(
        /**
         * optional
         *
         * @see FURNISHED_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('moeb')]
        protected string $furnished = ''
    ) {}

    public function getFurnished(): ?string
    {
        return $this->furnished;
    }

    public function setFurnished(?string $furnished): Furnished
    {
        $this->furnished = $furnished;

        return $this;
    }
}
