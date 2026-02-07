<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Transfer
 * Übertragungsangaben
 */
#[XmlRoot(name: 'uebertragung')]
class Transfer
{
    public const string TYPE_ONLINE = 'ONLINE';

    public const string TYPE_OFFLINE = 'OFFLINE';

    public const string SCOPE_PARTIAL = 'TEIL';

    public const string SCOPE_FULL = 'VOLL';

    public const string MODE_NEW = 'NEW';

    public const string MODE_CHANGE = 'CHANGE';

    public const string MODE_DELETE = 'DELETE';

    public function __construct(
        /**
         * required
         *
         * @see TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('art')]
        protected string $type = '',
        /**
         * required
         *
         * @see SCOPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('umfang')]
        protected string $scope = '',
        /**
         * optional
         *
         * @see MODE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('modus')]
        protected string $mode = '',
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('version')]
        protected string $version = '',
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('sendersoftware')]
        protected string $senderSoftware = '',
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('senderversion')]
        protected string $senderVersion = '',
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('techn_email')]
        protected ?string $technicalEmail = null,
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('regi_id')]
        protected ?string $regionId = null,
        /** optional */
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[XmlAttribute]
        #[SerializedName('timestamp')]
        protected ?DateTime $timestamp = null
    ) {}

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Transfer
    {
        $this->type = $type;

        return $this;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setScope(string $scope): Transfer
    {
        $this->scope = $scope;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): Transfer
    {
        $this->mode = $mode;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): Transfer
    {
        $this->version = $version;

        return $this;
    }

    public function getSenderSoftware(): string
    {
        return $this->senderSoftware;
    }

    public function setSenderSoftware(string $senderSoftware): Transfer
    {
        $this->senderSoftware = $senderSoftware;

        return $this;
    }

    public function getSenderVersion(): string
    {
        return $this->senderVersion;
    }

    public function setSenderVersion(string $senderVersion): Transfer
    {
        $this->senderVersion = $senderVersion;

        return $this;
    }

    public function getTechnicalEmail(): ?string
    {
        return $this->technicalEmail;
    }

    public function setTechnicalEmail(?string $technicalEmail): Transfer
    {
        $this->technicalEmail = $technicalEmail;

        return $this;
    }

    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    public function setRegionId(?string $regionId): Transfer
    {
        $this->regionId = $regionId;

        return $this;
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(?DateTime $timestamp): Transfer
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
