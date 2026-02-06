<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

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
    public const string CTYPE_MD5 = 'MD5';

    public const string CTYPE_DATETIME = 'DATETIME';

    public const string CTYPE_ETAG = 'ETAG';

    public function __construct(
        /**
         * required
         *
         * @see CTYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('ctype')]
        protected string $ctype = '',
        #[Inline]
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        protected ?DateTime $value = null
    ) {}

    public function getCtype(): string
    {
        return $this->ctype;
    }

    public function setCtype(string $ctype): Check
    {
        $this->ctype = $ctype;

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
