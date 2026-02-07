<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Einzelhandel
 * Objektart / Typ f. Handel
 */
#[XmlRoot(name: 'einzelhandel')]
class Einzelhandel
{
    public const string HANDEL_TYP_LADENLOKAL = 'LADENLOKAL';

    public const string HANDEL_TYP_EINZELHANDELSLADEN = 'EINZELHANDELSLADEN';

    public const string HANDEL_TYP_VERBRAUCHERMARKT = 'VERBRAUCHERMARKT';

    public const string HANDEL_TYP_EINKAUFSZENTRUM = 'EINKAUFSZENTRUM';

    public const string HANDEL_TYP_KAUFHAUS = 'KAUFHAUS';

    public const string HANDEL_TYP_FACTORY_OUTLET = 'FACTORY_OUTLET';

    public const string HANDEL_TYP_KIOSK = 'KIOSK';

    public const string HANDEL_TYP_VERKAUFSFLAECHE = 'VERKAUFSFLAECHE';

    public const string HANDEL_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

    public function __construct(
        /**
         * optional
         *
         * @see HANDEL_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('handel_typ')]
        protected string $handelTyp = ''
    ) {}

    public function getHandelTyp(): ?string
    {
        return $this->handelTyp;
    }

    public function setHandelTyp(?string $handelTyp): Einzelhandel
    {
        $this->handelTyp = $handelTyp;

        return $this;
    }
}
