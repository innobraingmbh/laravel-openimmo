<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Photo
 * Foto bei der Kontaktperson. Datentyp ähnlich "Anhang"
 * foto from the kontakt person of the sender
 *
 * @XmlRoot("foto")
 */
class Photo
{
    public const LOCATION_EXTERNAL = 'EXTERN';

    public const LOCATION_REMOTE = 'REMOTE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("location")
         * required
         *
         * @see LOCATION_* constants
         */
        protected string $location = '',
        /**
         * @Type("string")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("format")
         */
        protected string $format = '',
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Data")
         *
         * @SerializedName("daten")
         */
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
