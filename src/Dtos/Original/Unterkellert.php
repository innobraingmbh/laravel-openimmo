<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 */
#[Description('Keller- oder Unterkellerungsangaben der Immobilie')]
#[XmlRoot(name: 'unterkellert')]
class Unterkellert
{
    public const string KELLER_JA = 'JA';

    public const string KELLER_NEIN = 'NEIN';

    public const string KELLER_TEIL = 'TEIL';

    public function __construct(
        /**
         * optional
         *
         * @see KELLER_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('keller')]
        #[Description('Keller- oder Unterkellerungsangabe')]
        protected string $keller = ''
    ) {}

    public function getKeller(): ?string
    {
        return $this->keller;
    }

    public function setKeller(?string $keller): Unterkellert
    {
        $this->keller = $keller;

        return $this;
    }
}
