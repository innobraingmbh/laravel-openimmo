<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class GeoCoordinates
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 */
#[Description('GPS coordinates of the property')]
#[XmlRoot(name: 'geokoordinaten')]
class GeoCoordinates
{
    public function __construct(
        /** required */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('breitengrad')]
        #[Description('Geographic latitude of the property')]
        protected float $latitude = 0.0,
        /** required */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('laengengrad')]
        #[Description('Geographic longitude of the property')]
        protected float $longitude = 0.0
    ) {}

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): GeoCoordinates
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): GeoCoordinates
    {
        $this->longitude = $longitude;

        return $this;
    }
}
