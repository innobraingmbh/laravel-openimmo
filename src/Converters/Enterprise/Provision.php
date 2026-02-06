<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\UserDefinedSimplefield;

use function Innobrain\OpenImmo\Helpers\getPrices;

trait Provision
{
    public function convertProvision(): array
    {
        $provisionDivision = null;
        $provisionDivisionText = null;

        $prices = getPrices($this->openImmo);

        $fields = $prices->getUserDefinedSimplefield();
        /** @var UserDefinedSimplefield $field */
        foreach ($fields as $field) {
            match ($field->getFieldName()) {
                'provisionsteilung' => $provisionDivision = $field->getValue(),
                'provisionsteilung_text' => $provisionDivisionText = $field->getValue(),
                default => null,
            };
        }

        $result = [];

        switch ($provisionDivision) {
            case 'standard':
                $result['provisionsAbgabe'] = '50';
                $result['provisionsAbgabe_innen'] = '50';
                break;
            case 'gemeinschaft':
                $result['provisionsAbgabe'] = '100';
                $result['provisionsAbgabe_innen'] = '0';
                break;
            case 'individual':
                $result['provisionsAbgabe'] = '';
                $result['provisionsAbgabe_innen'] = '';
                $result['mls_provisionsAbgabe_beschreibung'] = $provisionDivisionText ?? '';
                break;
        }

        return $result;
    }
}
