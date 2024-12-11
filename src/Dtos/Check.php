<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Check
 * Angabe von Daten für die Prüfung auf ein Update
 *
 * @XmlRoot("check")
 */
class Check
{
    public const CONTACT_TYPE_MD5 = 'MD5';

    public const CONTACT_TYPE_DATETIME = 'DATETIME';

    public const CONTACT_TYPE_ETAG = 'ETAG';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("ctype")
         * required
         *
         * @see CONTACT_TYPE_* constants
         */
        protected string $contentType = '',
        /**
         * @Inline
         *
         * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>")
         */
        protected ?DateTime $value = null
    ) {}

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function setContentType(string $contentType): Check
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getValue(): ?DateTime
    {
        return $this->value;
    }

    public function setValue(?DateTime $value): Check
    {
        $this->value = $value;

        return $this;
    }
}
