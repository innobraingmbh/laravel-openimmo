<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geokoordinaten
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 *
 * @description GPS-Koordinaten der Immobilie
 */
#[XmlRoot(name: 'geokoordinaten')]
class Geokoordinaten
{
    public function __construct(
        /**
         * required
         *
         * @description Geografischer Breitengrad der Immobilie
         */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('breitengrad')]
        protected float $breitengrad = 0.0,
        /**
         * required
         *
         * @description Geografischer Längengrad der Immobilie
         */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('laengengrad')]
        protected float $laengengrad = 0.0
    ) {}

    public function getBreitengrad(): float
    {
        return $this->breitengrad;
    }

    public function setBreitengrad(float $breitengrad): Geokoordinaten
    {
        $this->breitengrad = $breitengrad;

        return $this;
    }

    public function getLaengengrad(): float
    {
        return $this->laengengrad;
    }

    public function setLaengengrad(float $laengengrad): Geokoordinaten
    {
        $this->laengengrad = $laengengrad;

        return $this;
    }
}
