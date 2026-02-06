<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PreisZeiteinheit
 * Zeiteinheit für die der Preis gilt, vorrangig bei Ferienobjekten
 */
#[XmlRoot(name: 'preis_zeiteinheit')]
class PreisZeiteinheit
{
    public const string ZEITEINHEIT_TAG = 'TAG';

    public const string ZEITEINHEIT_WOCHE = 'WOCHE';

    public const string ZEITEINHEIT_MONAT = 'MONAT';

    public const string ZEITEINHEIT_JAHR = 'JAHR';

    public function __construct(
        /**
         * optional
         *
         * @see ZEITEINHEIT_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('zeiteinheit')]
        protected string $zeiteinheit = ''
    ) {}

    public function getZeiteinheit(): ?string
    {
        return $this->zeiteinheit;
    }

    public function setZeiteinheit(?string $zeiteinheit): PreisZeiteinheit
    {
        $this->zeiteinheit = $zeiteinheit;

        return $this;
    }
}
