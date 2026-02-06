<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zustand
 * Zustand des Objektes, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'zustand')]
class Zustand
{
    public const string ZUSTAND_ART_ERSTBEZUG = 'ERSTBEZUG';

    public const string ZUSTAND_ART_TEIL_VOLLRENOVIERUNGSBED = 'TEIL_VOLLRENOVIERUNGSBED';

    public const string ZUSTAND_ART_NEUWERTIG = 'NEUWERTIG';

    public const string ZUSTAND_ART_TEIL_VOLLSANIERT = 'TEIL_VOLLSANIERT';

    public const string ZUSTAND_ART_TEIL_VOLLRENOVIERT = 'TEIL_VOLLRENOVIERT';

    public const string ZUSTAND_ART_TEIL_SANIERT = 'TEIL_SANIERT';

    public const string ZUSTAND_ART_VOLL_SANIERT = 'VOLL_SANIERT';

    public const string ZUSTAND_ART_SANIERUNGSBEDUERFTIG = 'SANIERUNGSBEDUERFTIG';

    public const string ZUSTAND_ART_BAUFAELLIG = 'BAUFAELLIG';

    public const string ZUSTAND_ART_NACH_VEREINBARUNG = 'NACH_VEREINBARUNG';

    public const string ZUSTAND_ART_MODERNISIERT = 'MODERNISIERT';

    public const string ZUSTAND_ART_GEPFLEGT = 'GEPFLEGT';

    public const string ZUSTAND_ART_ROHBAU = 'ROHBAU';

    public const string ZUSTAND_ART_ENTKERNT = 'ENTKERNT';

    public const string ZUSTAND_ART_ABRISSOBJEKT = 'ABRISSOBJEKT';

    public const string ZUSTAND_ART_PROJEKTIERT = 'PROJEKTIERT';

    public function __construct(
        /**
         * optional
         *
         * @see ZUSTAND_ART_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('zustand_art')]
        protected string $zustandArt = ''
    ) {}

    public function getZustandArt(): ?string
    {
        return $this->zustandArt;
    }

    public function setZustandArt(?string $zustandArt): Zustand
    {
        $this->zustandArt = $zustandArt;

        return $this;
    }
}
