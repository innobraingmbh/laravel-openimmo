<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Uebertragung
 * Übertragungsangaben
 */
#[Description('Datentransfer-Metadaten im OpenImmo-Format')]
#[XmlRoot(name: 'uebertragung')]
class Uebertragung
{
    public const string ART_ONLINE = 'ONLINE';

    public const string ART_OFFLINE = 'OFFLINE';

    public const string UMFANG_TEIL = 'TEIL';

    public const string UMFANG_VOLL = 'VOLL';

    public const string MODUS_NEW = 'NEW';

    public const string MODUS_CHANGE = 'CHANGE';

    public const string MODUS_DELETE = 'DELETE';

    public function __construct(
        /**
         * required
         *
         * @see ART_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('art')]
        #[Description('Typ oder Art')]
        protected string $art = '',
        /**
         * required
         *
         * @see UMFANG_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('umfang')]
        #[Description('Umfang oder Geltungsbereich')]
        protected string $umfang = '',
        /**
         * optional
         *
         * @see MODUS_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('modus')]
        #[Description('Modus des Datentransfers')]
        protected string $modus = '',
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('version')]
        #[Description('Version des OpenImmo-Formats oder der Software')]
        protected string $version = '',
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('sendersoftware')]
        #[Description('Software des sendenden Systems')]
        protected string $sendersoftware = '',
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('senderversion')]
        #[Description('Version des sendenden Systems')]
        protected string $senderversion = '',
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('techn_email')]
        #[Description('Technische E-Mail-Adresse des Systems')]
        protected ?string $technEmail = null,
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('regi_id')]
        #[Description('Regions-ID der Immobilie')]
        protected ?string $regiId = null,
        /** optional */
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[XmlAttribute]
        #[SerializedName('timestamp')]
        #[Description('Zeitstempel des Datentransfers')]
        protected ?DateTime $timestamp = null
    ) {}

    public function getArt(): string
    {
        return $this->art;
    }

    public function setArt(string $art): Uebertragung
    {
        $this->art = $art;

        return $this;
    }

    public function getUmfang(): string
    {
        return $this->umfang;
    }

    public function setUmfang(string $umfang): Uebertragung
    {
        $this->umfang = $umfang;

        return $this;
    }

    public function getModus(): ?string
    {
        return $this->modus;
    }

    public function setModus(?string $modus): Uebertragung
    {
        $this->modus = $modus;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): Uebertragung
    {
        $this->version = $version;

        return $this;
    }

    public function getSendersoftware(): string
    {
        return $this->sendersoftware;
    }

    public function setSendersoftware(string $sendersoftware): Uebertragung
    {
        $this->sendersoftware = $sendersoftware;

        return $this;
    }

    public function getSenderversion(): string
    {
        return $this->senderversion;
    }

    public function setSenderversion(string $senderversion): Uebertragung
    {
        $this->senderversion = $senderversion;

        return $this;
    }

    public function getTechnEmail(): ?string
    {
        return $this->technEmail;
    }

    public function setTechnEmail(?string $technEmail): Uebertragung
    {
        $this->technEmail = $technEmail;

        return $this;
    }

    public function getRegiId(): ?string
    {
        return $this->regiId;
    }

    public function setRegiId(?string $regiId): Uebertragung
    {
        $this->regiId = $regiId;

        return $this;
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(?DateTime $timestamp): Uebertragung
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
