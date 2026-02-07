<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Unterkellert
 * Ist das Objekt unterkellert? Optionen nicht kombinierbar
 */
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
