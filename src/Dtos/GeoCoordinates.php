<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class GeoCoordinates
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 *
 * @XmlRoot("geokoordinaten")
 */
class GeoCoordinates
{
    public function __construct(
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("breitengrad")
         * required
         */
        protected float $latitude = 0.0,
        /**
         * @Type("float")
         *
         * @XmlAttribute
         *
         * @SerializedName("laengengrad")
         * required
         */
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
