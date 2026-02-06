<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HallenLagerProd
 * Objektart / Typ f. Hallen/Lager/Produktion
 */
#[XmlRoot(name: 'hallen_lager_prod')]
class HallenLagerProd
{
    public const string HALLEN_TYP_HALLE = 'HALLE';

    public const string HALLEN_TYP_INDUSTRIEHALLE = 'INDUSTRIEHALLE';

    public const string HALLEN_TYP_LAGER = 'LAGER';

    public const string HALLEN_TYP_LAGERFLAECHEN = 'LAGERFLAECHEN';

    public const string HALLEN_TYP_LAGER_MIT_FREIFLAECHE = 'LAGER_MIT_FREIFLAECHE';

    public const string HALLEN_TYP_HOCHREGALLAGER = 'HOCHREGALLAGER';

    public const string HALLEN_TYP_SPEDITIONSLAGER = 'SPEDITIONSLAGER';

    public const string HALLEN_TYP_PRODUKTION = 'PRODUKTION';

    public const string HALLEN_TYP_WERKSTATT = 'WERKSTATT';

    public const string HALLEN_TYP_SERVICE = 'SERVICE';

    public const string HALLEN_TYP_FREIFLAECHEN = 'FREIFLAECHEN';

    public const string HALLEN_TYP_KUEHLHAUS = 'KUEHLHAUS';

    public function __construct(
        /**
         * optional
         *
         * @see HALLEN_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('hallen_typ')]
        protected string $hallenTyp = ''
    ) {}

    public function getHallenTyp(): ?string
    {
        return $this->hallenTyp;
    }

    public function setHallenTyp(?string $hallenTyp): HallenLagerProd
    {
        $this->hallenTyp = $hallenTyp;

        return $this;
    }
}
