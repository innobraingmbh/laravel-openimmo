<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BueroPraxen
 * Objektart / Typ f. Büro/Praxen
 */
#[XmlRoot(name: 'buero_praxen')]
class BueroPraxen
{
    public const string BUERO_TYP_BUEROFLAECHE = 'BUEROFLAECHE';

    public const string BUERO_TYP_BUEROHAUS = 'BUEROHAUS';

    public const string BUERO_TYP_BUEROZENTRUM = 'BUEROZENTRUM';

    public const string BUERO_TYP_LOFT_ATELIER = 'LOFT_ATELIER';

    public const string BUERO_TYP_PRAXIS = 'PRAXIS';

    public const string BUERO_TYP_PRAXISFLAECHE = 'PRAXISFLAECHE';

    public const string BUERO_TYP_PRAXISHAUS = 'PRAXISHAUS';

    public const string BUERO_TYP_AUSSTELLUNGSFLAECHE = 'AUSSTELLUNGSFLAECHE';

    public const string BUERO_TYP_COWORKING = 'COWORKING';

    public const string BUERO_TYP_SHARED_OFFICE = 'SHARED_OFFICE';

    public function __construct(
        /**
         * optional
         *
         * @see BUERO_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('buero_typ')]
        protected string $bueroTyp = ''
    ) {}

    public function getBueroTyp(): ?string
    {
        return $this->bueroTyp;
    }

    public function setBueroTyp(?string $bueroTyp): BueroPraxen
    {
        $this->bueroTyp = $bueroTyp;

        return $this;
    }
}
