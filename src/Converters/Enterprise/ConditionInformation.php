<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\Condition;
use Innobrain\OpenImmo\Dtos\EnergyPerformanceCertificate;

trait ConditionInformation
{
    public function convertConditionInformation(): array
    {
        $conditionInformation = getConditionInformation($this->openImmo);

        $result = [];

        if (! in_array($conditionInformation->getYearOfConstruction(), [null, '', '0'], true)) {
            $result['baujahr'] = $conditionInformation->getYearOfConstruction();
        }
        $condition = $conditionInformation->getCondition();
        if ($condition instanceof Condition) {
            $type = $condition->getConditionType();

            $result['zustand'] = strtolower((string) $type);
        }

        $energyPasses = $conditionInformation->getEnergyCertificate();
        /** @var EnergyPerformanceCertificate|null $energyPass */
        $energyPass = data_get($energyPasses, 0);
        if ($energyPass) {
            $result['energieausweis_gueltig_bis'] = $energyPass->getValidUntil();
            $result['energieausweisBaujahr'] = $energyPass->getYearOfConstruction();
            $result['ea_hwb_klasse_at'] = $energyPass->getHeatingDemandClass();
            $result['ea_hwb_at'] = $energyPass->getHEatingDemandClass();
            $result['ea_fgee_klasse_at'] = $energyPass->getEnergyEfficiencyClass();
            $result['ea_fgee_at'] = $energyPass->getEnergyEfficiencyClass();
            $result['energiepassJahrgang'] = $energyPass->getYear();
        }

        return $result;
    }
}
