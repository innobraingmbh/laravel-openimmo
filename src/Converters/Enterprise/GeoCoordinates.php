<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\UserDefinedSimplefield;

trait GeoCoordinates
{
    public function convertGeoCoordinates(): array
    {
        $geoCoordinates = getGeoCoordinates($this->openImmo);

        $result = [];
        if ($geoCoordinates->getLatitude() !== .0 && $geoCoordinates->getLongitude() !== .0) {
            $result['breitengrad'] = $geoCoordinates->getLatitude();
            $result['laengengrad'] = $geoCoordinates->getLongitude();

            return $result;
        }

        $geo = getGeo($this->openImmo);
        $fields = $geo->getUserDefinedSimplefield();
        /** @var UserDefinedSimplefield $field */
        foreach ($fields as $field) {
            match ($field->getFieldName()) {
                'geokoordinaten_laengengrad' => $result['laengengrad'] = $field->getValue(),
                'geokoordinaten_breitengrad' => $result['breitengrad'] = $field->getValue(),
                'ez' => $result['einlagezahl'] = $field->getValue(),
                'kg' => $result['katastergemeinde'] = $field->getValue(),
                'Grnr' => $result['grundstuecknr'] = $field->getValue(),
                'stiege' => $result['stiege'] = $field->getValue(),
                default => null,
            };
        }

        return $result;
    }
}
