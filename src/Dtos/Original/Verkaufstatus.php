<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Verkaufstatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'verkaufstatus')]
class Verkaufstatus
{
    public const string STAND_OFFEN = 'OFFEN';

    public const string STAND_RESERVIERT = 'RESERVIERT';

    public const string STAND_VERKAUFT = 'VERKAUFT';

    public function __construct(
        /**
         * optional
         *
         * @see STAND_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('stand')]
        protected string $stand = ''
    ) {}

    public function getStand(): ?string
    {
        return $this->stand;
    }

    public function setStand(?string $stand): Verkaufstatus
    {
        $this->stand = $stand;

        return $this;
    }
}
