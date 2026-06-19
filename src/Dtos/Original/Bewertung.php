<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bewertung
 * Container für detailierte Bewertungs Parmater
 */
#[Description('Bewertungsinformationen der Immobilie')]
#[XmlRoot(name: 'bewertung')]
class Bewertung
{
    public function __construct(
        #[XmlList(entry: 'feld', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Feld>')]
        #[SkipWhenEmpty]
        #[Description('Datenfeld')]
        #[SerializedName('feld')]
        protected array $feld = []
    ) {}

    /**
     * Returns array of array
     */
    public function getFeld(): array
    {
        return $this->feld;
    }

    public function setFeld(array $feld): Bewertung
    {
        $this->feld = $feld;

        return $this;
    }
}
