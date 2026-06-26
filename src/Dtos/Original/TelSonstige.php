<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TelSonstige
 */
#[Description('Weitere Telefonnummer einer Kontaktperson')]
#[XmlRoot(name: 'tel_sonstige')]
class TelSonstige
{
    public const string TELEFONART_TEL_ZENTRALE = 'TEL_ZENTRALE';

    public const string TELEFONART_TEL_DURCHW = 'TEL_DURCHW';

    public const string TELEFONART_TEL_PRIVAT = 'TEL_PRIVAT';

    public const string TELEFONART_TEL_HANDY = 'TEL_HANDY';

    public const string TELEFONART_TEL_FAX = 'TEL_FAX';

    public const string TELEFONART_TEL_SONSTIGE = 'TEL_SONSTIGE';

    public function __construct(
        /**
         * optional
         *
         * @see TELEFONART_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('telefonart')]
        #[Description('Typ der Telefonnummer')]
        protected string $telefonart = '',
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('bemerkung')]
        #[Description('Bemerkung oder Hinweis')]
        protected ?string $bemerkung = null,
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getTelefonart(): ?string
    {
        return $this->telefonart;
    }

    public function setTelefonart(?string $telefonart): TelSonstige
    {
        $this->telefonart = $telefonart;

        return $this;
    }

    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(?string $bemerkung): TelSonstige
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): TelSonstige
    {
        $this->value = $value;

        return $this;
    }
}
