<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class OtherEmail
 *
 * @XmlRoot("email_sonstige")
 */
class OtherEmail
{
    public const EMAIL_TYPE_HQ_MARKETING = 'EM_ZENTRALE';

    public const EMAIL_TYPE_DIRECT_MARKETING = 'EM_DIREKT';

    public const EMAIL_TYPE_PRIVATE_MARKETING = 'EM_PRIVAT';

    public const EMAIL_TYPE_OTHER_MARKETING = 'EM_SONSTIGE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("emailart")
         * optional
         *
         * @see EMAIL_TYPE_* constants
         */
        protected string $emailType = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("bemerkung")
         * optional
         */
        protected ?string $remark = null,
        /**
         * @Inline
         *
         * @Type("string")
         */
        protected ?string $value = null
    ) {}

    public function getEmailType(): ?string
    {
        return $this->emailType;
    }

    public function setEmailType(?string $emailType): OtherEmail
    {
        $this->emailType = $emailType;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): OtherEmail
    {
        $this->remark = $remark;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): OtherEmail
    {
        $this->value = $value;

        return $this;
    }
}
