<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Moebliert
 * Wie ist die Möblierung: Voll, Teil oder keine Aussage
 */
#[Description('Möblierungsangaben der Immobilie')]
#[XmlRoot(name: 'moebliert')]
class Moebliert
{
    public const string MOEB_VOLL = 'VOLL';

    public const string MOEB_TEIL = 'TEIL';

    public function __construct(
        /**
         * optional
         *
         * @see MOEB_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('moeb')]
        #[Description('Möblierungsangabe der Immobilie')]
        protected string $moeb = ''
    ) {}

    public function getMoeb(): ?string
    {
        return $this->moeb;
    }

    public function setMoeb(?string $moeb): Moebliert
    {
        $this->moeb = $moeb;

        return $this;
    }
}
