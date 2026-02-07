<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Check
 * Angabe von Daten für die Prüfung auf ein Update
 */
#[XmlRoot(name: 'check')]
class Check
{
    public const string CONTACT_TYPE_MD5 = 'MD5';

    public const string CONTACT_TYPE_DATETIME = 'DATETIME';

    public const string CONTACT_TYPE_ETAG = 'ETAG';

    public function __construct(
        /**
         * required
         *
         * @see CONTACT_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('ctype')]
        protected string $contentType = '',
        #[Inline]
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
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
