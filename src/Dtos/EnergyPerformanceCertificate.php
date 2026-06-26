<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class EnergyPerformanceCertificate
 * Energiepass/Ausweis ab 7/2008 vorgeschrieben
 */
#[Description('Energy performance certificate of the property')]
#[XmlRoot(name: 'energiepass')]
class EnergyPerformanceCertificate
{
    public const string PARTITION_DEMAND = 'BEDARF';

    public const string PARTITION_CONSUMPTION = 'VERBRAUCH';

    public const string VINTAGE_2008 = '2008';

    public const string VINTAGE_2014 = '2014';

    public const string VINTAGE_WITHOUT = 'ohne';

    public const string VINTAGE_NOT_NECESSARY = 'nicht_noetig';

    public const string VINTAGE_ON_INSPECTION = 'bei_besichtigung';

    public const string BUILDING_TYPE_RESIDENTIAL = 'wohn';

    public const string BUILDING_TYPE_NON_RESIDENTIAL = 'nichtwohn';

    public function __construct(
        /** @see PARTITION_* constants */
        #[Type('string')]
        #[Description('Type of energy certificate (demand or consumption certificate)')]
        #[SerializedName('epart')]
        protected string $energyCertificateType = '',
        #[Type('string')]
        #[Description('Validity date of the energy performance certificate')]
        #[SerializedName('gueltig_bis')]
        protected ?string $validUntil = null,
        #[Type('string')]
        #[Description('Energy consumption characteristic value in kWh/(m²·a)')]
        #[SerializedName('energieverbrauchkennwert')]
        protected ?string $energyConsumptionValue = null,
        #[Type('bool')]
        #[Description('Hot water included in the energy consumption value')]
        #[SerializedName('mitwarmwasser')]
        protected ?bool $withHotWater = null,
        #[Type('string')]
        #[Description('Final energy demand in kWh/(m²·a)')]
        #[SerializedName('endenergiebedarf')]
        protected ?string $finalEnergyDemand = null,
        #[Type('string')]
        #[Description('Primary energy source from the energy certificate')]
        #[SerializedName('primaerenergietraeger')]
        protected ?string $primaryEnergySource = null,
        #[Type('string')]
        #[Description('Electricity consumption value from the energy certificate')]
        #[SerializedName('stromwert')]
        protected ?string $electricityValue = null,
        #[Type('string')]
        #[Description('Heat consumption value from the energy certificate')]
        #[SerializedName('waermewert')]
        protected ?string $heatValue = null,
        #[Type('string')]
        #[Description('Value class of the energy performance certificate')]
        #[SerializedName('wertklasse')]
        protected ?string $valueClass = null,
        #[Type('string')]
        #[Description('Year of construction of the property')]
        #[SerializedName('baujahr')]
        protected ?string $yearOfConstruction = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Issue date of the energy performance certificate')]
        #[SerializedName('ausstelldatum')]
        protected ?DateTime $issueDate = null,
        /** @see VINTAGE_* constants */
        #[Type('string')]
        #[Description('Vintage year of the energy performance certificate')]
        #[SerializedName('jahrgang')]
        protected string $year = '',
        /** @see BUILDING_TYPE_* constants */
        #[Type('string')]
        #[Description('Building type (residential or non-residential)')]
        #[SerializedName('gebaeudeart')]
        protected string $buildingType = '',
        #[Type('string')]
        #[Description('Free text about the energy performance certificate')]
        #[SerializedName('epasstext')]
        protected ?string $energyCertificateText = null,
        #[Type('string')]
        #[Description('Information on the Building Energy Act 2018 (GEG)')]
        #[SerializedName('geg2018')]
        protected ?string $buildingEnergyAct2018 = null,
        #[Type('string')]
        #[Description('Heating demand value (HWB) in kWh/(m²·a)')]
        #[SerializedName('hwbwert')]
        protected ?string $heatingDemandValue = null,
        #[Type('string')]
        #[Description('Heating demand class (HWB class)')]
        #[SerializedName('hwbklasse')]
        protected ?string $heatingDemandClass = null,
        #[Type('string')]
        #[Description('Energy efficiency value (fGEE value)')]
        #[SerializedName('fgeewert')]
        protected ?string $energyEfficiencyValue = null,
        #[Type('string')]
        #[Description('Energy efficiency class (A+ to H)')]
        #[SerializedName('fgeeklasse')]
        protected ?string $energyEfficiencyClass = null
    ) {}

    public function getEnergyCertificateType(): ?string
    {
        return $this->energyCertificateType;
    }

    public function setEnergyCertificateType(?string $energyCertificateType): EnergyPerformanceCertificate
    {
        $this->energyCertificateType = $energyCertificateType;

        return $this;
    }

    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }

    public function setValidUntil(?string $validUntil): EnergyPerformanceCertificate
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    public function getEnergyConsumptionValue(): ?string
    {
        return $this->energyConsumptionValue;
    }

    public function setEnergyConsumptionValue(?string $energyConsumptionValue): EnergyPerformanceCertificate
    {
        $this->energyConsumptionValue = $energyConsumptionValue;

        return $this;
    }

    public function getWithHotWater(): ?bool
    {
        return $this->withHotWater;
    }

    public function setWithHotWater(?bool $withHotWater): EnergyPerformanceCertificate
    {
        $this->withHotWater = $withHotWater;

        return $this;
    }

    public function getFinalEnergyDemand(): ?string
    {
        return $this->finalEnergyDemand;
    }

    public function setFinalEnergyDemand(?string $finalEnergyDemand): EnergyPerformanceCertificate
    {
        $this->finalEnergyDemand = $finalEnergyDemand;

        return $this;
    }

    public function getPrimaryEnergySource(): ?string
    {
        return $this->primaryEnergySource;
    }

    public function setPrimaryEnergySource(?string $primaryEnergySource): EnergyPerformanceCertificate
    {
        $this->primaryEnergySource = $primaryEnergySource;

        return $this;
    }

    public function getElectricityValue(): ?string
    {
        return $this->electricityValue;
    }

    public function setElectricityValue(?string $electricityValue): EnergyPerformanceCertificate
    {
        $this->electricityValue = $electricityValue;

        return $this;
    }

    public function getHeatValue(): ?string
    {
        return $this->heatValue;
    }

    public function setHeatValue(?string $heatValue): EnergyPerformanceCertificate
    {
        $this->heatValue = $heatValue;

        return $this;
    }

    public function getValueClass(): ?string
    {
        return $this->valueClass;
    }

    public function setValueClass(?string $valueClass): EnergyPerformanceCertificate
    {
        $this->valueClass = $valueClass;

        return $this;
    }

    public function getYearOfConstruction(): ?string
    {
        return $this->yearOfConstruction;
    }

    public function setYearOfConstruction(?string $yearOfConstruction): EnergyPerformanceCertificate
    {
        $this->yearOfConstruction = $yearOfConstruction;

        return $this;
    }

    public function getIssueDate(): ?DateTime
    {
        return $this->issueDate;
    }

    public function setIssueDate(?DateTime $issueDate): EnergyPerformanceCertificate
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): EnergyPerformanceCertificate
    {
        $this->year = $year;

        return $this;
    }

    public function getBuildingType(): ?string
    {
        return $this->buildingType;
    }

    public function setBuildingType(?string $buildingType): EnergyPerformanceCertificate
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    public function getEnergyCertificateText(): ?string
    {
        return $this->energyCertificateText;
    }

    public function setEnergyCertificateText(?string $energyCertificateText): EnergyPerformanceCertificate
    {
        $this->energyCertificateText = $energyCertificateText;

        return $this;
    }

    public function getBuildingEnergyAct2018(): ?string
    {
        return $this->buildingEnergyAct2018;
    }

    public function setBuildingEnergyAct2018(?string $buildingEnergyAct2018): EnergyPerformanceCertificate
    {
        $this->buildingEnergyAct2018 = $buildingEnergyAct2018;

        return $this;
    }

    public function getHeatingDemandValue(): ?string
    {
        return $this->heatingDemandValue;
    }

    public function setHeatingDemandValue(?string $heatingDemandValue): EnergyPerformanceCertificate
    {
        $this->heatingDemandValue = $heatingDemandValue;

        return $this;
    }

    public function getHeatingDemandClass(): ?string
    {
        return $this->heatingDemandClass;
    }

    public function setHeatingDemandClass(?string $heatingDemandClass): EnergyPerformanceCertificate
    {
        $this->heatingDemandClass = $heatingDemandClass;

        return $this;
    }

    public function getEnergyEfficiencyValue(): ?string
    {
        return $this->energyEfficiencyValue;
    }

    public function setEnergyEfficiencyValue(?string $energyEfficiencyValue): EnergyPerformanceCertificate
    {
        $this->energyEfficiencyValue = $energyEfficiencyValue;

        return $this;
    }

    public function getEnergyEfficiencyClass(): ?string
    {
        return $this->energyEfficiencyClass;
    }

    public function setEnergyEfficiencyClass(?string $energyEfficiencyClass): EnergyPerformanceCertificate
    {
        $this->energyEfficiencyClass = $energyEfficiencyClass;

        return $this;
    }
}
