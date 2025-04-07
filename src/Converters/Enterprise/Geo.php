<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

trait Geo
{
    public function convertGeo(): array
    {
        $geo = getGeo($this->openImmo);

        return [
            'plz' => $geo->getPostalCode(),
            'ort' => $geo->getCity(),
            'strasse' => $geo->getStreet(),
            'hausnummer' => $geo->getHouseNumber(),
            'bundesland' => $geo->getState(),
            'land' => $geo->getCountry()?->getIsoCountry(),
            'etage' => $geo->getFloor(),
            'flur' => $geo->getCorridor(),
            'flurstueck' => $geo->getParcel(),
        ];
    }
}
