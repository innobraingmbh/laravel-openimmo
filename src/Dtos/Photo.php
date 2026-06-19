<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Photo
 * Foto bei der Kontaktperson. Datentyp ähnlich "Anhang"
 * foto from the kontakt person of the sender
 */
#[Description('Photo of a contact person or the property')]
#[XmlRoot(name: 'foto')]
class Photo
{
    public const string LOCATION_EXTERNAL = 'EXTERN';

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
        #[Description('Location description of the property')]
        protected string $location = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('File format of the attachment')]
        #[SerializedName('format')]
        protected string $format = '',
        #[Type(Data::class)]
        #[Description('Data container')]
        #[SerializedName('daten')]
        protected ?Data $data = null
    ) {}

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): Photo
    {
        $this->location = $location;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): Photo
    {
        $this->format = $format;

        return $this;
    }

    public function getData(): ?Data
    {
        return $this->data;
    }

    public function setData(?Data $data): Photo
    {
        $this->data = $data;

        return $this;
    }
}
