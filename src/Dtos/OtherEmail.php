<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class OtherEmail
 */
#[XmlRoot(name: 'email_sonstige')]
class OtherEmail
{
    public const string EMAIL_TYPE_HQ_MARKETING = 'EM_ZENTRALE';

    public const string EMAIL_TYPE_DIRECT_MARKETING = 'EM_DIREKT';

    public const string EMAIL_TYPE_PRIVATE_MARKETING = 'EM_PRIVAT';

    public const string EMAIL_TYPE_OTHER_MARKETING = 'EM_SONSTIGE';

    public function __construct(
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('emailart')]
        protected string $emailType = '',
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('bemerkung')]
        protected ?string $remark = null,
        #[Inline]
        #[Type('string')]
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
