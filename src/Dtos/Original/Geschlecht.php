<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geschlecht
 * Soll das Objekt nur an Frauen bzw. nur an Männer vermietet werden,
 *  fehlende Angabe wird als 'Ja' interpretiert
 */
#[Description('Geschlechtsangabe einer Person')]
#[XmlRoot(name: 'geschlecht')]
class Geschlecht
{
    public const string GESCHL_ATTR_EGAL = 'EGAL';

    public const string GESCHL_ATTR_NUR_MANN = 'NUR_MANN';

    public const string GESCHL_ATTR_NUR_FRAU = 'NUR_FRAU';

    public function __construct(
        /**
         * optional
         *
         * @see GESCHL_ATTR_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('geschl_attr')]
        #[Description('XML-Attribut zur Geschlechtsangabe')]
        protected string $geschlAttr = ''
    ) {}

    public function getGeschlAttr(): ?string
    {
        return $this->geschlAttr;
    }

    public function setGeschlAttr(?string $geschlAttr): Geschlecht
    {
        $this->geschlAttr = $geschlAttr;

        return $this;
    }
}
