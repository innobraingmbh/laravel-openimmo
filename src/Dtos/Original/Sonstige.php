<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstige
 * Objektart / Typ f. Sonstiges
 * Bitte ab Version 1.2.3 die Attribute GARAGEN, PARKFLACHE nicht mehr verwenden.
 * Objekte befinden sich jetzt unter Element parken.
 * Aus kompatibilitätegründen bleiben die Attribute NOCH! erhalten.
 * In nachfolgenden Versionen wird die Unterstützung an dieser Stelle eingestellt.
 */
#[XmlRoot(name: 'sonstige')]
class Sonstige
{
    public const string SONSTIGE_TYP_PARKHAUS = 'PARKHAUS';

    public const string SONSTIGE_TYP_TANKSTELLE = 'TANKSTELLE';

    public const string SONSTIGE_TYP_KRANKENHAUS = 'KRANKENHAUS';

    public const string SONSTIGE_TYP_SONSTIGE = 'SONSTIGE';

    public function __construct(
        /**
         * optional
         *
         * @see SONSTIGE_TYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('sonstige_typ')]
        protected string $sonstigeTyp = ''
    ) {}

    public function getSonstigeTyp(): ?string
    {
        return $this->sonstigeTyp;
    }

    public function setSonstigeTyp(?string $sonstigeTyp): Sonstige
    {
        $this->sonstigeTyp = $sonstigeTyp;

        return $this;
    }
}
