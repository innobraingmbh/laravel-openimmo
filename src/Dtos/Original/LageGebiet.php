<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class LageGebiet
 * Lage Gebiet, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'lage_gebiet')]
class LageGebiet
{
    public const string GEBIETE_WOHN = 'WOHN';

    public const string GEBIETE_GEWERBE = 'GEWERBE';

    public const string GEBIETE_INDUSTRIE = 'INDUSTRIE';

    public const string GEBIETE_MISCH = 'MISCH';

    public const string GEBIETE_NEUBAU = 'NEUBAU';

    public const string GEBIETE_ORTSLAGE = 'ORTSLAGE';

    public const string GEBIETE_SIEDLUNG = 'SIEDLUNG';

    public const string GEBIETE_STADTRAND = 'STADTRAND';

    public const string GEBIETE_STADTTEIL = 'STADTTEIL';

    public const string GEBIETE_STADTZENTRUM = 'STADTZENTRUM';

    public const string GEBIETE_NEBENZENTRUM = 'NEBENZENTRUM';

    public const string GEBIETE_1A = '1A';

    public const string GEBIETE_1B = '1B';

    public function __construct(
        /**
         * optional
         *
         * @see GEBIETE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('gebiete')]
        protected string $gebiete = ''
    ) {}

    public function getGebiete(): ?string
    {
        return $this->gebiete;
    }

    public function setGebiete(?string $gebiete): LageGebiet
    {
        $this->gebiete = $gebiete;

        return $this;
    }
}
