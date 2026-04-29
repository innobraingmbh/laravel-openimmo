<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\Condition;
use Innobrain\OpenImmo\Dtos\EnergyPerformanceCertificate;

use function Innobrain\OpenImmo\Helpers\getConditionInformation;

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
            $energyCertificateType = $this->mapEnergyCertificateType($energyPass);
            if ($energyCertificateType !== null) {
                $result['energieausweistyp'] = $energyCertificateType;
            }

            $result['energyClass'] = $energyPass->getValueClass();
            $result['energieverbrauchskennwert'] = $energyPass->getEnergyConsumptionValue();
            $result['warmwasserEnthalten'] = $energyPass->getWithHotWater();
            $result['endenergiebedarf'] = $energyPass->getFinalEnergyDemand();

            $primaryEnergySource = $energyPass->getPrimaryEnergySource();
            if ($primaryEnergySource) {
                $result['energietraeger'] = $this->mapEnergySource($primaryEnergySource);
            }

            $result['energieausweis_gueltig_bis'] = $energyPass->getValidUntil();
            $result['energieausweisBaujahr'] = $energyPass->getYearOfConstruction();
            $result['ea_hwb_klasse_at'] = $energyPass->getHeatingDemandClass();
            $result['ea_hwb_at'] = $energyPass->getHeatingDemandValue();
            $result['ea_fgee_klasse_at'] = $energyPass->getEnergyEfficiencyClass();
            $result['ea_fgee_at'] = $energyPass->getEnergyEfficiencyValue();
            $result['energiepassJahrgang'] = $energyPass->getYear();
        }

        return $result;
    }

    private function mapEnergyCertificateType(EnergyPerformanceCertificate $energyPass): ?string
    {
        $epart = $energyPass->getEnergyCertificateType();
        $jahrgang = $energyPass->getYear();
        $buildingType = $energyPass->getBuildingType();

        return match ($jahrgang) {
            'ohne' => 'ohne Energieausweis',
            'nicht_noetig' => 'es besteht keine Pflicht!',
            'bei_besichtigung' => 'liegtZurBesichtigungVor',
            default => match (true) {
                $epart === 'BEDARF' && $buildingType === 'nichtwohn' => 'Bedarfsausweis Gewerbe',
                $epart === 'VERBRAUCH' && $buildingType === 'nichtwohn' => 'Verbrauchsausweis Gewerbe',
                $epart === 'BEDARF' => 'Endenergiebedarf',
                $epart === 'VERBRAUCH' => 'Energieverbrauchskennwert',
                default => null,
            },
        };
    }

    private function mapEnergySource(string $source): string
    {
        return match ($source) {
            'FERN' => 'fernwaerme',
            default => strtolower($source),
        };
    }
}
