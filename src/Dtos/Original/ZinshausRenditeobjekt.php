<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZinshausRenditeobjekt
 * Objektyp / Typ f. Zins und Renditehäuser
 */
#[XmlRoot(name: 'zinshaus_renditeobjekt')]
class ZinshausRenditeobjekt
{
    public const string ZINS_TYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

    public const string ZINS_TYP_WOHN_UND_GESCHAEFTSHAUS = 'WOHN_UND_GESCHAEFTSHAUS';

    public const string ZINS_TYP_GESCHAEFTSHAUS = 'GESCHAEFTSHAUS';

    public const string ZINS_TYP_BUEROGEBAEUDE = 'BUEROGEBAEUDE';

    public const string ZINS_TYP_SB_MAERKTE = 'SB_MAERKTE';

    public const string ZINS_TYP_EINKAUFSCENTREN = 'EINKAUFSCENTREN';

    public const string ZINS_TYP_WOHNANLAGEN = 'WOHNANLAGEN';

    public const string ZINS_TYP_VERBRAUCHERMAERKTE = 'VERBRAUCHERMAERKTE';

    public const string ZINS_TYP_INDUSTRIEANLAGEN = 'INDUSTRIEANLAGEN';

    public const string ZINS_TYP_PFLEGEHEIM = 'PFLEGEHEIM';

    public const string ZINS_TYP_SANATORIUM = 'SANATORIUM';

    public const string ZINS_TYP_SENIORENHEIM = 'SENIORENHEIM';

    public const string ZINS_TYP_BETREUTES_WOHNEN = 'BETREUTES-WOHNEN';

    public function __construct(
        /**
         * optional
         *
         * @see ZINS_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('zins_typ')]
        protected string $zinsTyp = ''
    ) {}

    public function getZinsTyp(): ?string
    {
        return $this->zinsTyp;
    }

    public function setZinsTyp(?string $zinsTyp): ZinshausRenditeobjekt
    {
        $this->zinsTyp = $zinsTyp;

        return $this;
    }
}
