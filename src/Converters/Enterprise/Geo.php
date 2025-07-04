<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

trait Geo
{
    public function convertGeo(): array
    {
        $geo = getGeo($this->openImmo);

        $countryCode = $geo->getCountry()?->getIsoCountry();

        // Convert 2-letter country codes to 3-letter codes
        if ($countryCode !== null && strlen($countryCode) === 2) {
            $countryMap = [
                'DE' => 'DEU',
                'AT' => 'AUT',
                'FR' => 'FRA',
                'CH' => 'CHE',
                'IT' => 'ITA',
                'ES' => 'ESP',
                'GB' => 'GBR',
                'NL' => 'NLD',
                'BE' => 'BEL',
                'LU' => 'LUX',
                'PL' => 'POL',
                'CZ' => 'CZE',
                'SK' => 'SVK',
                'HU' => 'HUN',
                'SI' => 'SVN',
                'HR' => 'HRV',
                'RO' => 'ROM',
                'BG' => 'BGR',
                'GR' => 'GRC',
                'PT' => 'PRT',
                'SE' => 'SWE',
                'DK' => 'DNK',
                'NO' => 'NOR',
                'FI' => 'FIN',
                'US' => 'USA',
                'CA' => 'CAN',
                'AU' => 'AUS',
                'NZ' => 'NZL',
                'JP' => 'JPN',
                'CN' => 'CHN',
                'IN' => 'IND',
                'BR' => 'BRA',
                'MX' => 'MEX',
                'RU' => 'RUS',
                'TR' => 'TUR',
                'AE' => 'ARE',
                'IL' => 'ISR',
                'ZA' => 'ZAF',
            ];

            $countryCode = $countryMap[strtoupper($countryCode)] ?? $countryCode;
        }

        return [
            'plz' => $geo->getPostalCode(),
            'ort' => $geo->getCity(),
            'strasse' => $geo->getStreet(),
            'hausnummer' => $geo->getHouseNumber(),
            'bundesland' => $geo->getState(),
            'land' => $countryCode,
            'etage' => $geo->getFloor(),
            'flur' => $geo->getCorridor(),
            'flurstueck' => $geo->getParcel(),
        ];
    }
}
