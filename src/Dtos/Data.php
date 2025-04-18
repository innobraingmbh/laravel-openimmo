<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Data
 * Anhangdaten
 *
 * @XmlRoot("daten")
 */
class Data
{
    public function __construct(
        /**
         * @Type("string")
         *
         * @SerializedName("pfad")
         */
        protected ?string $path = null,
        /**
         * @Type("string")
         *
         * @SerializedName("anhanginhalt")
         */
        protected ?string $attachmentContent = null
    ) {}

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): Data
    {
        $this->path = $path;

        return $this;
    }

    public function getAttachmentContent(): ?string
    {
        return $this->attachmentContent;
    }

    public function setAttachmentContent(?string $attachmentContent): Data
    {
        $this->attachmentContent = $attachmentContent;

        return $this;
    }
}
