<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DistanzenSport
 * Welche Distanz zu dem ausgewählen Sport-/Freizeitziel besteht(Angabe in km),
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 */
#[XmlRoot(name: 'distanzen_sport')]
class DistanzenSport
{
    public const string DISTANZ_ZU_SPORT_STRAND = 'STRAND';

    public const string DISTANZ_ZU_SPORT_SEE = 'SEE';

    public const string DISTANZ_ZU_SPORT_MEER = 'MEER';

    public const string DISTANZ_ZU_SPORT_SKIGEBIET = 'SKIGEBIET';

    public const string DISTANZ_ZU_SPORT_SPORTANLAGEN = 'SPORTANLAGEN';

    public const string DISTANZ_ZU_SPORT_WANDERGEBIETE = 'WANDERGEBIETE';

    public const string DISTANZ_ZU_SPORT_NAHERHOLUNG = 'NAHERHOLUNG';

    public function __construct(
        /**
         * required
         *
         * @see DISTANZ_ZU_SPORT_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('distanz_zu_sport')]
        protected string $distanzZuSport = '',
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getDistanzZuSport(): string
    {
        return $this->distanzZuSport;
    }

    public function setDistanzZuSport(string $distanzZuSport): DistanzenSport
    {
        $this->distanzZuSport = $distanzZuSport;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): DistanzenSport
    {
        $this->value = $value;

        return $this;
    }
}
