<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Daten
 * Anhangdaten
 */
#[Description('Allgemeiner Datenbehälter im OpenImmo-Format')]
#[XmlRoot(name: 'daten')]
class Daten
{
    public function __construct(
        #[Type('string')]
        #[Description('Dateipfad des Anhangs')]
        #[SerializedName('pfad')]
        protected ?string $pfad = null,
        #[Type('string')]
        #[Description('Binärer Inhalt des Anhangs')]
        #[SerializedName('anhanginhalt')]
        protected ?string $anhanginhalt = null
    ) {}

    public function getPfad(): ?string
    {
        return $this->pfad;
    }

    public function setPfad(?string $pfad): Daten
    {
        $this->pfad = $pfad;

        return $this;
    }

    public function getAnhanginhalt(): ?string
    {
        return $this->anhanginhalt;
    }

    public function setAnhanginhalt(?string $anhanginhalt): Daten
    {
        $this->anhanginhalt = $anhanginhalt;

        return $this;
    }
}
