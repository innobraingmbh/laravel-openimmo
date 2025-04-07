<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Attachment
 * Element für Anhänge
 *
 * @XmlRoot("anhang")
 */
class Attachment
{
    public const LOCATION_INTERNAL = 'INTERN';

    public const LOCATION_EXTERNAL = 'EXTERN';

    public const LOCATION_REMOTE = 'REMOTE';

    public const GROUP_COVER_IMAGE = 'TITELBILD';

    public const GROUP_INTERIOR_VIEWS = 'INNENANSICHTEN';

    public const GROUP_EXTERIOR_VIEWS = 'AUSSENANSICHTEN';

    public const GROUP_FLOOR_PLAN = 'GRUNDRISS';

    public const GROUP_MAPS_SITE_PLAN = 'KARTEN_LAGEPLAN';

    public const GROUP_PROVIDER_LOGO = 'ANBIETERLOGO';

    public const GROUP_IMAGE = 'BILD';

    public const GROUP_DOCUMENTS = 'DOKUMENTE';

    public const GROUP_LINKS = 'LINKS';

    public const GROUP_PANORAMA = 'PANORAMA';

    public const GROUP_QRCODE = 'QRCODE';

    public const GROUP_MOVIE = 'FILM';

    public const GROUP_MOVIE_LINK = 'FILMLINK';

    public const GROUP_ENERGY_PASS_SCALE = 'EPASS-SKALA';

    public const GROUP_PROPERTY_URL = 'ANBOBJURL';

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
         * @XmlAttribute
         *
         * @SerializedName("gruppe")
         * optional
         *
         * @see GROUP_* constants
         */
        protected string $group = '',
        /**
         * @Type("string")
         *
         * @SerializedName("anhangtitel")
         */
        protected ?string $attachmentTitle = null,
        /**
         * @Type("string")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("format")
         */
        protected string $format = '',
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Check")
         *
         * @SerializedName("check")
         */
        protected ?Check $check = null,
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

    public function setLocation(string $location): Attachment
    {
        $this->location = $location;

        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): Attachment
    {
        $this->group = $group;

        return $this;
    }

    public function getAttachmentTitle(): ?string
    {
        return $this->attachmentTitle;
    }

    public function setAttachmentTitle(?string $attachmentTitle): Attachment
    {
        $this->attachmentTitle = $attachmentTitle;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): Attachment
    {
        $this->format = $format;

        return $this;
    }

    public function getCheck(): ?Check
    {
        return $this->check;
    }

    public function setCheck(?Check $check): Attachment
    {
        $this->check = $check;

        return $this;
    }

    public function getData(): ?Data
    {
        return $this->data;
    }

    public function setData(?Data $data): Attachment
    {
        $this->data = $data;

        return $this;
    }
}
