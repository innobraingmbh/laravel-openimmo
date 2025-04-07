<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Converters;

use Katalam\OpenImmo\Converters\Concerns\BaseConverter;
use Katalam\OpenImmo\Converters\Concerns\ConverterInterface;
use Katalam\OpenImmo\Converters\Enterprise\Areas;
use Katalam\OpenImmo\Converters\Enterprise\ConditionInformation;
use Katalam\OpenImmo\Converters\Enterprise\Equipment;
use Katalam\OpenImmo\Converters\Enterprise\FreeTexts;
use Katalam\OpenImmo\Converters\Enterprise\Geo;
use Katalam\OpenImmo\Converters\Enterprise\GeoCoordinates;
use Katalam\OpenImmo\Converters\Enterprise\MarketingType;
use Katalam\OpenImmo\Converters\Enterprise\Prices;
use Katalam\OpenImmo\Converters\Enterprise\PropertyType;
use Katalam\OpenImmo\Converters\Enterprise\Provision;
use Katalam\OpenImmo\Converters\Enterprise\TypeOfUse;
use Katalam\OpenImmo\Converters\Enterprise\UserDefinedSimpleFields;
use Katalam\OpenImmo\Dtos\OpenImmo;

class EnterpriseConverter extends BaseConverter implements ConverterInterface
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
