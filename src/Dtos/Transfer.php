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
 *
 * @XmlRoot("uebertragung")
 */
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
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("art")
         * required
         *
         * @see TYPE_* constants
         */
        protected string $type = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("umfang")
         * required
         *
         * @see SCOPE_* constants
         */
        protected string $scope = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("modus")
         * optional
         *
         * @see MODE_* constants
         */
        protected string $mode = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("version")
         * required
         */
        protected string $version = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("sendersoftware")
         * required
         */
        protected string $senderSoftware = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("senderversion")
         * required
         */
        protected string $senderVersion = '',
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("techn_email")
         * optional
         */
        protected ?string $technicalEmail = null,
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("regi_id")
         * optional
         */
        protected ?string $regionId = null,
        /**
         * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>")
         *
         * @XmlAttribute
         *
         * @SerializedName("timestamp")
         * optional
         */
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
