<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class OtherPhone
 *
 * @XmlRoot("tel_sonstige")
 */
class OtherPhone
{
    public const PHONE_TYPE_HQ_TELEPHONE = 'TEL_ZENTRALE';

    public const PHONE_TYPE_DIRECT_LINE = 'TEL_DURCHW';

    public const PHONE_TYPE_PRIVATE_PHONE = 'TEL_PRIVAT';

    public const PHONE_TYPE_MOBILE_PHONE = 'TEL_HANDY';

    public const PHONE_TYPE_FAX = 'TEL_FAX';

    public const PHONE_TYPE_OTHER_PHONE = 'TEL_SONSTIGE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("telefonart")
         * optional
         *
         * @see PHONE_TYPE_* constants
         */
        protected string $phoneType = '',
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

    public function getPhoneType(): ?string
    {
        return $this->phoneType;
    }

    public function setPhoneType(?string $phoneType): OtherPhone
    {
        $this->phoneType = $phoneType;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): OtherPhone
    {
        $this->remark = $remark;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): OtherPhone
    {
        $this->value = $value;

        return $this;
    }
}
