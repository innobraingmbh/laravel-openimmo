<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MinMietdauer
 * Mindestzeitraum für den die Immobilie gemietet werden muss, Optionen nicht kombinierbar, vorrangig bei WaZ
 */
#[Description('Minimale Mietdauer der Immobilie')]
#[XmlRoot(name: 'min_mietdauer')]
class MinMietdauer
{
    public const string MIN_DAUER_TAG = 'TAG';

    public const string MIN_DAUER_WOCHE = 'WOCHE';

    public const string MIN_DAUER_MONAT = 'MONAT';

    public const string MIN_DAUER_JAHR = 'JAHR';

    public function __construct(
        /**
         * optional
         *
         * @see MIN_DAUER_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('min_dauer')]
        #[Description('Minimale Mietdauer')]
        protected string $minDauer = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getMinDauer(): ?string
    {
        return $this->minDauer;
    }

    public function setMinDauer(?string $minDauer): MinMietdauer
    {
        $this->minDauer = $minDauer;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): MinMietdauer
    {
        $this->value = $value;

        return $this;
    }
}
