<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class StpSonstige
 */
#[Description('Sonstiger Stellplatztyp')]
#[XmlRoot(name: 'stp_sonstige')]
class StpSonstige
{
    public const string PLATZART_FREIPLATZ = 'FREIPLATZ';

    public const string PLATZART_GARAGE = 'GARAGE';

    public const string PLATZART_TIEFGARAGE = 'TIEFGARAGE';

    public const string PLATZART_CARPORT = 'CARPORT';

    public const string PLATZART_DUPLEX = 'DUPLEX';

    public const string PLATZART_PARKHAUS = 'PARKHAUS';

    public const string PLATZART_SONSTIGES = 'SONSTIGES';

    public function __construct(
        /**
         * optional
         *
         * @see PLATZART_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('platzart')]
        #[Description('Raumtyp (z.B. Büro, Lager, Verkauf)')]
        protected string $platzart = '',
        /** optional */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('bemerkung')]
        #[Description('Bemerkung oder Hinweis')]
        protected ?string $bemerkung = null
    ) {}

    public function getPlatzart(): ?string
    {
        return $this->platzart;
    }

    public function setPlatzart(?string $platzart): StpSonstige
    {
        $this->platzart = $platzart;

        return $this;
    }

    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(?string $bemerkung): StpSonstige
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }
}
