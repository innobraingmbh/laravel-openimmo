<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Haus
 * Objektart / Typ f. Haus
 */
#[XmlRoot(name: 'haus')]
class Haus
{
    public const string HAUSTYP_REIHENHAUS = 'REIHENHAUS';

    public const string HAUSTYP_REIHENEND = 'REIHENEND';

    public const string HAUSTYP_REIHENMITTEL = 'REIHENMITTEL';

    public const string HAUSTYP_REIHENECK = 'REIHENECK';

    public const string HAUSTYP_DOPPELHAUSHAELFTE = 'DOPPELHAUSHAELFTE';

    public const string HAUSTYP_EINFAMILIENHAUS = 'EINFAMILIENHAUS';

    public const string HAUSTYP_STADTHAUS = 'STADTHAUS';

    public const string HAUSTYP_BUNGALOW = 'BUNGALOW';

    public const string HAUSTYP_VILLA = 'VILLA';

    public const string HAUSTYP_RESTHOF = 'RESTHOF';

    public const string HAUSTYP_BAUERNHAUS = 'BAUERNHAUS';

    public const string HAUSTYP_LANDHAUS = 'LANDHAUS';

    public const string HAUSTYP_SCHLOSS = 'SCHLOSS';

    public const string HAUSTYP_ZWEIFAMILIENHAUS = 'ZWEIFAMILIENHAUS';

    public const string HAUSTYP_MEHRFAMILIENHAUS = 'MEHRFAMILIENHAUS';

    public const string HAUSTYP_FERIENHAUS = 'FERIENHAUS';

    public const string HAUSTYP_BERGHUETTE = 'BERGHUETTE';

    public const string HAUSTYP_CHALET = 'CHALET';

    public const string HAUSTYP_STRANDHAUS = 'STRANDHAUS';

    public const string HAUSTYP_LAUBE_DATSCHE_GARTENHAUS = 'LAUBE-DATSCHE-GARTENHAUS';

    public const string HAUSTYP_APARTMENTHAUS = 'APARTMENTHAUS';

    public const string HAUSTYP_BURG = 'BURG';

    public const string HAUSTYP_HERRENHAUS = 'HERRENHAUS';

    public const string HAUSTYP_FINCA = 'FINCA';

    public const string HAUSTYP_RUSTICO = 'RUSTICO';

    public const string HAUSTYP_FERTIGHAUS = 'FERTIGHAUS';

    public const string HAUSTYP_KEINE_ANGABE = 'KEINE_ANGABE';

    public function __construct(
        /**
         * optional
         *
         * @see HAUSTYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('haustyp')]
        protected string $haustyp = ''
    ) {}

    public function getHaustyp(): ?string
    {
        return $this->haustyp;
    }

    public function setHaustyp(?string $haustyp): Haus
    {
        $this->haustyp = $haustyp;

        return $this;
    }
}
