<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Distanzen
 * Welche Distanz zu dem ausgewählten Ziel besteht (Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 */
#[XmlRoot(name: 'distanzen')]
class Distanzen
{
    public const string DISTANZ_ZU_FLUGHAFEN = 'FLUGHAFEN';

    public const string DISTANZ_ZU_FERNBAHNHOF = 'FERNBAHNHOF';

    public const string DISTANZ_ZU_AUTOBAHN = 'AUTOBAHN';

    public const string DISTANZ_ZU_US_BAHN = 'US_BAHN';

    public const string DISTANZ_ZU_BUS = 'BUS';

    public const string DISTANZ_ZU_KINDERGAERTEN = 'KINDERGAERTEN';

    public const string DISTANZ_ZU_GRUNDSCHULE = 'GRUNDSCHULE';

    public const string DISTANZ_ZU_HAUPTSCHULE = 'HAUPTSCHULE';

    public const string DISTANZ_ZU_REALSCHULE = 'REALSCHULE';

    public const string DISTANZ_ZU_GESAMTSCHULE = 'GESAMTSCHULE';

    public const string DISTANZ_ZU_GYMNASIUM = 'GYMNASIUM';

    public const string DISTANZ_ZU_ZENTRUM = 'ZENTRUM';

    public const string DISTANZ_ZU_EINKAUFSMOEGLICHKEITEN = 'EINKAUFSMOEGLICHKEITEN';

    public const string DISTANZ_ZU_GASTSTAETTEN = 'GASTSTAETTEN';

    public function __construct(
        /**
         * required
         *
         * @see DISTANZ_ZU_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('distanz_zu')]
        protected string $distanzZu = '',
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getDistanzZu(): string
    {
        return $this->distanzZu;
    }

    public function setDistanzZu(string $distanzZu): Distanzen
    {
        $this->distanzZu = $distanzZu;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Distanzen
    {
        $this->value = $value;

        return $this;
    }
}
