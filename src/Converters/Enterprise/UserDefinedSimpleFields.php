<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\UserDefinedSimplefield;

trait UserDefinedSimpleFields
{
    public function convertUserDefinedSimpleFields(): array
    {
        $result = [];

        $fields = $this->openImmo->getUserDefinedSimplefield();
        /** @var UserDefinedSimplefield $field */
        foreach ($fields as $field) {
            match ($field->getFieldName()) {
                'anzahl_garagen' => $result['anzahl_garagen'] = $field->getValue(),
            };
        }

        return $result;
    }
}
