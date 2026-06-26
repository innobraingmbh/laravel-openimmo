<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AusrichtBalkonTerrasse
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 */
#[Description('Ausrichtung von Balkon oder Terrasse')]
#[XmlRoot(name: 'ausricht_balkon_terrasse')]
class AusrichtBalkonTerrasse
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NORD')]
        #[Description('Ausrichtung Nord')]
        protected ?bool $nord = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OST')]
        #[Description('Ausrichtung Ost')]
        protected ?bool $ost = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SUED')]
        #[Description('Ausrichtung Süd')]
        protected ?bool $sued = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WEST')]
        #[Description('Ausrichtung West')]
        protected ?bool $west = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NORDOST')]
        #[Description('Ausrichtung Nordost')]
        protected ?bool $nordost = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NORDWEST')]
        #[Description('Ausrichtung Nordwest')]
        protected ?bool $nordwest = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SUEDOST')]
        #[Description('Ausrichtung Südost')]
        protected ?bool $suedost = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SUEDWEST')]
        #[Description('Ausrichtung Südwest')]
        protected ?bool $suedwest = null
    ) {}

    public function getNord(): ?bool
    {
        return $this->nord;
    }

    public function setNord(?bool $nord): AusrichtBalkonTerrasse
    {
        $this->nord = $nord;

        return $this;
    }

    public function getOst(): ?bool
    {
        return $this->ost;
    }

    public function setOst(?bool $ost): AusrichtBalkonTerrasse
    {
        $this->ost = $ost;

        return $this;
    }

    public function getSued(): ?bool
    {
        return $this->sued;
    }

    public function setSued(?bool $sued): AusrichtBalkonTerrasse
    {
        $this->sued = $sued;

        return $this;
    }

    public function getWest(): ?bool
    {
        return $this->west;
    }

    public function setWest(?bool $west): AusrichtBalkonTerrasse
    {
        $this->west = $west;

        return $this;
    }

    public function getNordost(): ?bool
    {
        return $this->nordost;
    }

    public function setNordost(?bool $nordost): AusrichtBalkonTerrasse
    {
        $this->nordost = $nordost;

        return $this;
    }

    public function getNordwest(): ?bool
    {
        return $this->nordwest;
    }

    public function setNordwest(?bool $nordwest): AusrichtBalkonTerrasse
    {
        $this->nordwest = $nordwest;

        return $this;
    }

    public function getSuedost(): ?bool
    {
        return $this->suedost;
    }

    public function setSuedost(?bool $suedost): AusrichtBalkonTerrasse
    {
        $this->suedost = $suedost;

        return $this;
    }

    public function getSuedwest(): ?bool
    {
        return $this->suedwest;
    }

    public function setSuedwest(?bool $suedwest): AusrichtBalkonTerrasse
    {
        $this->suedwest = $suedwest;

        return $this;
    }
}
