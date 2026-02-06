<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Wohnung
 * Objektart / Typ f. Wohnungen
 */
#[XmlRoot(name: 'wohnung')]
class Wohnung
{
    public const string WOHNUNGTYP_DACHGESCHOSS = 'DACHGESCHOSS';

    public const string WOHNUNGTYP_MAISONETTE = 'MAISONETTE';

    public const string WOHNUNGTYP_LOFT_STUDIO_ATELIER = 'LOFT-STUDIO-ATELIER';

    public const string WOHNUNGTYP_PENTHOUSE = 'PENTHOUSE';

    public const string WOHNUNGTYP_TERRASSEN = 'TERRASSEN';

    public const string WOHNUNGTYP_ETAGE = 'ETAGE';

    public const string WOHNUNGTYP_ERDGESCHOSS = 'ERDGESCHOSS';

    public const string WOHNUNGTYP_SOUTERRAIN = 'SOUTERRAIN';

    public const string WOHNUNGTYP_APARTMENT = 'APARTMENT';

    public const string WOHNUNGTYP_FERIENWOHNUNG = 'FERIENWOHNUNG';

    public const string WOHNUNGTYP_GALERIE = 'GALERIE';

    public const string WOHNUNGTYP_ROHDACHBODEN = 'ROHDACHBODEN';

    public const string WOHNUNGTYP_ATTIKAWOHNUNG = 'ATTIKAWOHNUNG';

    public const string WOHNUNGTYP_KEINE_ANGABE = 'KEINE_ANGABE';

    public function __construct(
        /**
         * optional
         *
         * @see WOHNUNGTYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('wohnungtyp')]
        protected string $wohnungtyp = ''
    ) {}

    public function getWohnungtyp(): ?string
    {
        return $this->wohnungtyp;
    }

    public function setWohnungtyp(?string $wohnungtyp): Wohnung
    {
        $this->wohnungtyp = $wohnungtyp;

        return $this;
    }
}
