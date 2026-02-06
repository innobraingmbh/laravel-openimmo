<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Foto
 * Foto bei der Kontaktperson. Datentyp ähnlich "Anhang"
 * foto from the kontakt person of the sender
 */
#[XmlRoot(name: 'foto')]
class Foto
{
    public const string LOCATION_EXTERN = 'EXTERN';

    public const string LOCATION_REMOTE = 'REMOTE';

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
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('format')]
        protected string $format = '',
        #[Type(Daten::class)]
        #[SerializedName('daten')]
        protected ?Daten $daten = null
    ) {}

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): Foto
    {
        $this->location = $location;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): Foto
    {
        $this->format = $format;

        return $this;
    }

    public function getDaten(): ?Daten
    {
        return $this->daten;
    }

    public function setDaten(?Daten $daten): Foto
    {
        $this->daten = $daten;

        return $this;
    }
}
