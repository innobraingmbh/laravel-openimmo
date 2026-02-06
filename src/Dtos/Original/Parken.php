<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Parken
 * Objektart für diverse Parkplatz Angaben
 */
#[XmlRoot(name: 'parken')]
class Parken
{
    public const string PARKEN_TYP_STELLPLATZ = 'STELLPLATZ';

    public const string PARKEN_TYP_CARPORT = 'CARPORT';

    public const string PARKEN_TYP_DOPPELGARAGE = 'DOPPELGARAGE';

    public const string PARKEN_TYP_DUPLEX = 'DUPLEX';

    public const string PARKEN_TYP_TIEFGARAGE = 'TIEFGARAGE';

    public const string PARKEN_TYP_BOOTSLIEGEPLATZ = 'BOOTSLIEGEPLATZ';

    public const string PARKEN_TYP_EINZELGARAGE = 'EINZELGARAGE';

    public const string PARKEN_TYP_PARKHAUS = 'PARKHAUS';

    public const string PARKEN_TYP_TIEFGARAGENSTELLPLATZ = 'TIEFGARAGENSTELLPLATZ';

    public const string PARKEN_TYP_PARKPLATZ_STROM = 'PARKPLATZ_STROM';

    public function __construct(
        /**
         * optional
         *
         * @see PARKEN_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('parken_typ')]
        protected string $parkenTyp = ''
    ) {}

    public function getParkenTyp(): ?string
    {
        return $this->parkenTyp;
    }

    public function setParkenTyp(?string $parkenTyp): Parken
    {
        $this->parkenTyp = $parkenTyp;

        return $this;
    }
}
