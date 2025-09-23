<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters;

use Innobrain\OpenImmo\Converters\Concerns\BaseConverter;
use Innobrain\OpenImmo\Converters\Enterprise\Areas;
use Innobrain\OpenImmo\Converters\Enterprise\ConditionInformation;
use Innobrain\OpenImmo\Converters\Enterprise\Equipment;
use Innobrain\OpenImmo\Converters\Enterprise\FreeTexts;
use Innobrain\OpenImmo\Converters\Enterprise\Geo;
use Innobrain\OpenImmo\Converters\Enterprise\GeoCoordinates;
use Innobrain\OpenImmo\Converters\Enterprise\MarketingType;
use Innobrain\OpenImmo\Converters\Enterprise\Prices;
use Innobrain\OpenImmo\Converters\Enterprise\PropertyType;
use Innobrain\OpenImmo\Converters\Enterprise\Provision;
use Innobrain\OpenImmo\Converters\Enterprise\TechnicalManagement;
use Innobrain\OpenImmo\Converters\Enterprise\TypeOfUse;
use Innobrain\OpenImmo\Converters\Enterprise\UserDefinedSimpleFields;
use Innobrain\OpenImmo\Dtos\OpenImmo;

class EnterpriseConverter extends BaseConverter
{
    use Areas;
    use ConditionInformation;
    use Equipment;
    use FreeTexts;
    use Geo;
    use GeoCoordinates;
    use MarketingType;
    use Prices;
    use PropertyType;
    use Provision;
    use TechnicalManagement;
    use TypeOfUse;
    use UserDefinedSimpleFields;

    public function convert(OpenImmo $openImmo): array
    {
        $this->saveOpenImmo($openImmo);

        [$propertyType, $propertyCategory] = $this->convertPropertyType();

        return collect([
            'objektart' => $propertyType,
            'nutzungsart' => $this->convertTypeOfUse(),
            'vermarktungsart' => $this->convertMarketingType(),
            'objekttyp' => $propertyCategory,
            ...$this->convertConditionInformation(),
            ...$this->convertGeoCoordinates(),
            ...$this->convertGeo(),
            ...$this->convertPrices(),
            ...$this->convertFreeTexts(),
            ...$this->convertAreas(),
            ...$this->convertEquipment(),
            ...$this->convertProvision(),
            ...$this->convertUserDefinedSimpleFields(),
            ...$this->convertTechnicalManagement(),
        ])
            ->filter()
            ->toArray();
    }

    protected function parseFloat(?float $value): ?string
    {
        if ($value === null) {
            return null;
        }

        return number_format($value, 2, '.', '');
    }
}
