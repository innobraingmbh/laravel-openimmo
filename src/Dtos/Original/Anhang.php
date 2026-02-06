<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhang
 * Element für Anhänge
 */
#[XmlRoot(name: 'anhang')]
class Anhang
{
    public const string LOCATION_INTERN = 'INTERN';

    public const string LOCATION_EXTERN = 'EXTERN';

    public const string LOCATION_REMOTE = 'REMOTE';

    public const string GRUPPE_TITELBILD = 'TITELBILD';

    public const string GRUPPE_INNENANSICHTEN = 'INNENANSICHTEN';

    public const string GRUPPE_AUSSENANSICHTEN = 'AUSSENANSICHTEN';

    public const string GRUPPE_GRUNDRISS = 'GRUNDRISS';

    public const string GRUPPE_KARTEN_LAGEPLAN = 'KARTEN_LAGEPLAN';

    public const string GRUPPE_ANBIETERLOGO = 'ANBIETERLOGO';

    public const string GRUPPE_BILD = 'BILD';

    public const string GRUPPE_DOKUMENTE = 'DOKUMENTE';

    public const string GRUPPE_LINKS = 'LINKS';

    public const string GRUPPE_PANORAMA = 'PANORAMA';

    public const string GRUPPE_QRCODE = 'QRCODE';

    public const string GRUPPE_FILM = 'FILM';

    public const string GRUPPE_FILMLINK = 'FILMLINK';

    public const string GRUPPE_EPASS_SKALA = 'EPASS-SKALA';

    public const string GRUPPE_ANBOBJURL = 'ANBOBJURL';

    public function __construct(
        /**
         * required
         *
         * @see LOCATION_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('location')]
        protected string $location = '',
        /**
         * optional
         *
         * @see GRUPPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('gruppe')]
        protected string $gruppe = '',
        #[Type('string')]
        #[SerializedName('anhangtitel')]
        protected ?string $anhangtitel = null,
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('format')]
        protected string $format = '',
        #[Type(Check::class)]
        #[SerializedName('check')]
        protected ?Check $check = null,
        #[Type(Daten::class)]
        #[SerializedName('daten')]
        protected ?Daten $daten = null
    ) {}

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): Anhang
    {
        $this->location = $location;

        return $this;
    }

    public function getGruppe(): ?string
    {
        return $this->gruppe;
    }

    public function setGruppe(?string $gruppe): Anhang
    {
        $this->gruppe = $gruppe;

        return $this;
    }

    public function getAnhangtitel(): ?string
    {
        return $this->anhangtitel;
    }

    public function setAnhangtitel(?string $anhangtitel): Anhang
    {
        $this->anhangtitel = $anhangtitel;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): Anhang
    {
        $this->format = $format;

        return $this;
    }

    public function getCheck(): ?Check
    {
        return $this->check;
    }

    public function setCheck(?Check $check): Anhang
    {
        $this->check = $check;

        return $this;
    }

    public function getDaten(): ?Daten
    {
        return $this->daten;
    }

    public function setDaten(?Daten $daten): Anhang
    {
        $this->daten = $daten;

        return $this;
    }
}
