<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Prices
 *
 * @XmlRoot("preise")
 */
class Prices
{
    public function __construct(
        /**
         * @Type("Innobrain\OpenImmo\Dtos\PurchasePrice")
         *
         * @SerializedName("kaufpreis")
         */
        protected ?PurchasePrice $purchasePrice = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetPurchasePrice")
         *
         * @SerializedName("kaufpreisnetto")
         */
        protected ?NetPurchasePrice $purchasePriceNet = null,
        /**
         * @Type("float")
         *
         * @SerializedName("kaufpreisbrutto")
         */
        protected ?float $purchasePriceGross = null,
        /**
         * @Type("float")
         *
         * @SerializedName("nettokaltmiete")
         */
        protected ?float $netColdRent = null,
        /**
         * @Type("float")
         *
         * @SerializedName("kaltmiete")
         */
        protected ?float $coldRent = null,
        /**
         * @Type("float")
         *
         * @SerializedName("warmmiete")
         */
        protected ?float $warmRent = null,
        /**
         * @Type("float")
         *
         * @SerializedName("nebenkosten")
         */
        protected ?float $additionalCosts = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("heizkosten_enthalten")
         */
        protected ?bool $heatingCostsIncluded = null,
        /**
         * @Type("float")
         *
         * @SerializedName("heizkosten")
         */
        protected ?float $heatingCosts = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("zzg_mehrwertsteuer")
         */
        protected ?bool $plusVAT = null,
        /**
         * @Type("float")
         *
         * @SerializedName("mietzuschlaege")
         */
        protected ?float $rentSurcharges = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetMainRent")
         *
         * @SerializedName("hauptmietzinsnetto")
         */
        protected ?NetMainRent $netMainRent = null,
        /**
         * @Type("float")
         *
         * @SerializedName("pauschalmiete")
         */
        protected ?float $flatRent = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetOperatingCosts")
         *
         * @SerializedName("betriebskostennetto")
         */
        protected ?NetOperatingCosts $netOperatingCosts = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetEVB")
         *
         * @SerializedName("evbnetto")
         */
        protected ?NetEVB $netUnitValue = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetTotalRent")
         *
         * @SerializedName("gesamtmietenetto")
         */
        protected ?NetTotalRent $totalRentNet = null,
        /**
         * @Type("float")
         *
         * @SerializedName("gesamtmietebrutto")
         */
        protected ?float $totalRentGross = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetTotalCost")
         *
         * @SerializedName("gesamtbelastungnetto")
         */
        protected ?NetTotalCost $totalCostNet = null,
        /**
         * @Type("float")
         *
         * @SerializedName("gesamtbelastungbrutto")
         */
        protected ?float $totalCostGross = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\TotalCostsPerSqmFrom")
         *
         * @SerializedName("gesamtkostenprom2von")
         */
        protected ?TotalCostsPerSqmFrom $totalCostsPerSqmFrom = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetHeatingCosts")
         *
         * @SerializedName("heizkostennetto")
         */
        protected ?NetHeatingCosts $netHeatingCosts = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetMonthlyCosts")
         *
         * @SerializedName("monatlichekostennetto")
         */
        protected ?NetMonthlyCosts $monthlyCostsNet = null,
        /**
         * @Type("float")
         *
         * @SerializedName("monatlichekostenbrutto")
         */
        protected ?float $monthlyCostsGross = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\AdditionalCostsPerSqmFrom")
         *
         * @SerializedName("nebenkostenprom2von")
         */
        protected ?AdditionalCostsPerSqmFrom $additionalCostsPerSqmFrom = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetReserves")
         *
         * @SerializedName("ruecklagenetto")
         */
        protected ?NetReserves $reservesNet = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetOtherCosts")
         *
         * @SerializedName("sonstigekostennetto")
         */
        protected ?NetOtherCosts $otherCostsNet = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetOtherRent")
         *
         * @SerializedName("sonstigemietenetto")
         */
        protected ?NetOtherRent $otherRentNet = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetRentPerSqmFrom")
         *
         * @SerializedName("nettomieteprom2von")
         */
        protected ?NetRentPerSqmFrom $netRentPerSqmFrom = null,
        /**
         * @Type("float")
         *
         * @SerializedName("pacht")
         */
        protected ?float $lease = null,
        /**
         * @Type("float")
         *
         * @SerializedName("erbpacht")
         */
        protected ?float $leasehold = null,
        /**
         * @Type("float")
         *
         * @SerializedName("hausgeld")
         */
        protected ?float $maintenanceFee = null,
        /**
         * @Type("float")
         *
         * @SerializedName("abstand")
         */
        protected ?float $distance = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("preis_zeitraum_von")
         */
        protected ?DateTime $priceTimeRangeFrom = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("preis_zeitraum_bis")
         */
        protected ?DateTime $priceTimeRangeTo = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\PriceTimeUnit")
         *
         * @SerializedName("preis_zeiteinheit")
         */
        protected ?PriceTimeUnit $priceTimeUnit = null,
        /**
         * @Type("float")
         *
         * @SerializedName("mietpreis_pro_qm")
         */
        protected ?float $rentPricePerSqm = null,
        /**
         * @Type("float")
         *
         * @SerializedName("kaufpreis_pro_qm")
         */
        protected ?float $purchasePricePerSqm = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("provisionspflichtig")
         */
        protected ?bool $commissionRequired = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\CommissionSplit")
         *
         * @SerializedName("provision_teilen")
         */
        protected ?CommissionSplit $commissionSplit = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\InternalCommission")
         *
         * @SerializedName("innen_courtage")
         */
        protected ?InternalCommission $internalCommission = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ExternalCommission")
         *
         * @SerializedName("aussen_courtage")
         */
        protected ?ExternalCommission $externalCommission = null,
        /**
         * @Type("string")
         *
         * @SerializedName("courtage_hinweis")
         */
        protected ?string $commissionNote = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\NetCommission")
         *
         * @SerializedName("provisionnetto")
         */
        protected ?NetCommission $commissionNet = null,
        /**
         * @Type("float")
         *
         * @SerializedName("provisionbrutto")
         */
        protected ?float $commissionGross = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\Currency")
         *
         * @SerializedName("waehrung")
         */
        protected ?Currency $currency = null,
        /**
         * @Type("float")
         * Maximum precision: 2
         * Minimum value (inclusive): 0
         *
         * @SerializedName("mwst_satz")
         */
        protected ?float $vatRate = null,
        /**
         * @Type("float")
         * Maximum precision: 2
         * Minimum value (inclusive): 0
         *
         * @SerializedName("mwst_gesamt")
         */
        protected ?float $totalVAT = null,
        /**
         * @Type("string")
         *
         * @SerializedName("freitext_preis")
         */
        protected ?string $freeTextPrice = null,
        /**
         * @Type("string")
         *
         * @SerializedName("x_fache")
         */
        protected ?string $xTimes = null,
        /**
         * @Type("float")
         *
         * @SerializedName("nettorendite")
         */
        protected ?float $netYield = null,
        /**
         * @Type("float")
         *
         * @SerializedName("nettorendite_soll")
         */
        protected ?float $targetNetYield = null,
        /**
         * @Type("float")
         *
         * @SerializedName("nettorendite_ist")
         */
        protected ?float $actualNetYield = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ActualRentalIncome")
         *
         * @SerializedName("mieteinnahmen_ist")
         */
        protected ?ActualRentalIncome $actualRentalIncome = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\TargetRentalIncome")
         *
         * @SerializedName("mieteinnahmen_soll")
         */
        protected ?TargetRentalIncome $targetRentalIncome = null,
        /**
         * @Type("float")
         *
         * @SerializedName("erschliessungskosten")
         */
        protected ?float $developmentCosts = null,
        /**
         * @Type("float")
         *
         * @SerializedName("kaution")
         */
        protected ?float $deposit = null,
        /**
         * @Type("string")
         *
         * @SerializedName("kaution_text")
         */
        protected ?string $depositText = null,
        /**
         * @Type("float")
         *
         * @SerializedName("geschaeftsguthaben")
         */
        protected ?float $businessAssets = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ParkingCarport")
         *
         * @SerializedName("stp_carport")
         */
        protected ?ParkingCarport $parkingCarport = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ParkingDuplex")
         *
         * @SerializedName("stp_duplex")
         */
        protected ?ParkingDuplex $parkingDuplex = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ParkingOutdoor")
         *
         * @SerializedName("stp_freiplatz")
         */
        protected ?ParkingOutdoor $parkingOutdoor = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ParkingGarage")
         *
         * @SerializedName("stp_garage")
         */
        protected ?ParkingGarage $parkingGarage = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ParkingMultiStorey")
         *
         * @SerializedName("stp_parkhaus")
         */
        protected ?ParkingMultiStorey $parkingMultiStorey = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\ParkingUnderground")
         *
         * @SerializedName("stp_tiefgarage")
         */
        protected ?ParkingUnderground $parkingUnderground = null,
        /**
         * @XmlList(inline = true, entry = "stp_sonstige")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\ParkingOther>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("stp_sonstige")
         */
        protected array $parkingOther = [],
        /**
         * @Type("float")
         *
         * @SerializedName("richtpreis")
         */
        protected ?float $guidePrice = null,
        /**
         * @Type("float")
         *
         * @SerializedName("richtpreisprom2")
         */
        protected ?float $guidePricePerSqm = null,
        /**
         * @XmlList(inline = true, entry = "user_defined_simplefield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_simplefield")
         */
        protected array $userDefinedSimplefield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_anyfield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_anyfield")
         */
        protected array $userDefinedAnyfield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_extend")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_extend")
         */
        protected array $userDefinedExtend = []
    ) {}

    public function getPurchasePrice(): ?PurchasePrice
    {
        return $this->purchasePrice;
    }

    public function setPurchasePrice(?PurchasePrice $purchasePrice): Prices
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    public function getPurchasePriceNet(): ?NetPurchasePrice
    {
        return $this->purchasePriceNet;
    }

    public function setPurchasePriceNet(?NetPurchasePrice $purchasePriceNet): Prices
    {
        $this->purchasePriceNet = $purchasePriceNet;

        return $this;
    }

    public function getPurchasePriceGross(): ?float
    {
        return $this->purchasePriceGross;
    }

    public function setPurchasePriceGross(?float $purchasePriceGross): Prices
    {
        $this->purchasePriceGross = $purchasePriceGross;

        return $this;
    }

    public function getNetColdRent(): ?float
    {
        return $this->netColdRent;
    }

    public function setNetColdRent(?float $netColdRent): Prices
    {
        $this->netColdRent = $netColdRent;

        return $this;
    }

    public function getColdRent(): ?float
    {
        return $this->coldRent;
    }

    public function setColdRent(?float $coldRent): Prices
    {
        $this->coldRent = $coldRent;

        return $this;
    }

    public function getWarmRent(): ?float
    {
        return $this->warmRent;
    }

    public function setWarmRent(?float $warmRent): Prices
    {
        $this->warmRent = $warmRent;

        return $this;
    }

    public function getAdditionalCosts(): ?float
    {
        return $this->additionalCosts;
    }

    public function setAdditionalCosts(?float $additionalCosts): Prices
    {
        $this->additionalCosts = $additionalCosts;

        return $this;
    }

    public function getHeatingCostsIncluded(): ?bool
    {
        return $this->heatingCostsIncluded;
    }

    public function setHeatingCostsIncluded(?bool $heatingCostsIncluded): Prices
    {
        $this->heatingCostsIncluded = $heatingCostsIncluded;

        return $this;
    }

    public function getHeatingCosts(): ?float
    {
        return $this->heatingCosts;
    }

    public function setHeatingCosts(?float $heatingCosts): Prices
    {
        $this->heatingCosts = $heatingCosts;

        return $this;
    }

    public function getPlusVAT(): ?bool
    {
        return $this->plusVAT;
    }

    public function setPlusVAT(?bool $plusVAT): Prices
    {
        $this->plusVAT = $plusVAT;

        return $this;
    }

    public function getRentSurcharges(): ?float
    {
        return $this->rentSurcharges;
    }

    public function setRentSurcharges(?float $rentSurcharges): Prices
    {
        $this->rentSurcharges = $rentSurcharges;

        return $this;
    }

    public function getNetMainRent(): ?NetMainRent
    {
        return $this->netMainRent;
    }

    public function setNetMainRent(?NetMainRent $netMainRent): Prices
    {
        $this->netMainRent = $netMainRent;

        return $this;
    }

    public function getFlatRent(): ?float
    {
        return $this->flatRent;
    }

    public function setFlatRent(?float $flatRent): Prices
    {
        $this->flatRent = $flatRent;

        return $this;
    }

    public function getNetOperatingCosts(): ?NetOperatingCosts
    {
        return $this->netOperatingCosts;
    }

    public function setNetOperatingCosts(?NetOperatingCosts $netOperatingCosts): Prices
    {
        $this->netOperatingCosts = $netOperatingCosts;

        return $this;
    }

    public function getNetUnitValue(): ?NetEVB
    {
        return $this->netUnitValue;
    }

    public function setNetUnitValue(?NetEVB $netUnitValue): Prices
    {
        $this->netUnitValue = $netUnitValue;

        return $this;
    }

    public function getTotalRentNet(): ?NetTotalRent
    {
        return $this->totalRentNet;
    }

    public function setTotalRentNet(?NetTotalRent $totalRentNet): Prices
    {
        $this->totalRentNet = $totalRentNet;

        return $this;
    }

    public function getTotalRentGross(): ?float
    {
        return $this->totalRentGross;
    }

    public function setTotalRentGross(?float $totalRentGross): Prices
    {
        $this->totalRentGross = $totalRentGross;

        return $this;
    }

    public function getTotalCostNet(): ?NetTotalCost
    {
        return $this->totalCostNet;
    }

    public function setTotalCostNet(?NetTotalCost $totalCostNet): Prices
    {
        $this->totalCostNet = $totalCostNet;

        return $this;
    }

    public function getTotalCostGross(): ?float
    {
        return $this->totalCostGross;
    }

    public function setTotalCostGross(?float $totalCostGross): Prices
    {
        $this->totalCostGross = $totalCostGross;

        return $this;
    }

    public function getTotalCostsPerSqmFrom(): ?TotalCostsPerSqmFrom
    {
        return $this->totalCostsPerSqmFrom;
    }

    public function setTotalCostsPerSqmFrom(?TotalCostsPerSqmFrom $totalCostsPerSqmFrom): Prices
    {
        $this->totalCostsPerSqmFrom = $totalCostsPerSqmFrom;

        return $this;
    }

    public function getNetHeatingCosts(): ?NetHeatingCosts
    {
        return $this->netHeatingCosts;
    }

    public function setNetHeatingCosts(?NetHeatingCosts $netHeatingCosts): Prices
    {
        $this->netHeatingCosts = $netHeatingCosts;

        return $this;
    }

    public function getMonthlyCostsNet(): ?NetMonthlyCosts
    {
        return $this->monthlyCostsNet;
    }

    public function setMonthlyCostsNet(?NetMonthlyCosts $monthlyCostsNet): Prices
    {
        $this->monthlyCostsNet = $monthlyCostsNet;

        return $this;
    }

    public function getMonthlyCostsGross(): ?float
    {
        return $this->monthlyCostsGross;
    }

    public function setMonthlyCostsGross(?float $monthlyCostsGross): Prices
    {
        $this->monthlyCostsGross = $monthlyCostsGross;

        return $this;
    }

    public function getAdditionalCostsPerSqmFrom(): ?AdditionalCostsPerSqmFrom
    {
        return $this->additionalCostsPerSqmFrom;
    }

    public function setAdditionalCostsPerSqmFrom(?AdditionalCostsPerSqmFrom $additionalCostsPerSqmFrom): Prices
    {
        $this->additionalCostsPerSqmFrom = $additionalCostsPerSqmFrom;

        return $this;
    }

    public function getReservesNet(): ?NetReserves
    {
        return $this->reservesNet;
    }

    public function setReservesNet(?NetReserves $reservesNet): Prices
    {
        $this->reservesNet = $reservesNet;

        return $this;
    }

    public function getOtherCostsNet(): ?NetOtherCosts
    {
        return $this->otherCostsNet;
    }

    public function setOtherCostsNet(?NetOtherCosts $otherCostsNet): Prices
    {
        $this->otherCostsNet = $otherCostsNet;

        return $this;
    }

    public function getOtherRentNet(): ?NetOtherRent
    {
        return $this->otherRentNet;
    }

    public function setOtherRentNet(?NetOtherRent $otherRentNet): Prices
    {
        $this->otherRentNet = $otherRentNet;

        return $this;
    }

    public function getNetRentPerSqmFrom(): ?NetRentPerSqmFrom
    {
        return $this->netRentPerSqmFrom;
    }

    public function setNetRentPerSqmFrom(?NetRentPerSqmFrom $netRentPerSqmFrom): Prices
    {
        $this->netRentPerSqmFrom = $netRentPerSqmFrom;

        return $this;
    }

    public function getLease(): ?float
    {
        return $this->lease;
    }

    public function setLease(?float $lease): Prices
    {
        $this->lease = $lease;

        return $this;
    }

    public function getLeasehold(): ?float
    {
        return $this->leasehold;
    }

    public function setLeasehold(?float $leasehold): Prices
    {
        $this->leasehold = $leasehold;

        return $this;
    }

    public function getMaintenanceFee(): ?float
    {
        return $this->maintenanceFee;
    }

    public function setMaintenanceFee(?float $maintenanceFee): Prices
    {
        $this->maintenanceFee = $maintenanceFee;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): Prices
    {
        $this->distance = $distance;

        return $this;
    }

    public function getPriceTimeRangeFrom(): ?DateTime
    {
        return $this->priceTimeRangeFrom;
    }

    public function setPriceTimeRangeFrom(?DateTime $priceTimeRangeFrom): Prices
    {
        $this->priceTimeRangeFrom = $priceTimeRangeFrom;

        return $this;
    }

    public function getPriceTimeRangeTo(): ?DateTime
    {
        return $this->priceTimeRangeTo;
    }

    public function setPriceTimeRangeTo(?DateTime $priceTimeRangeTo): Prices
    {
        $this->priceTimeRangeTo = $priceTimeRangeTo;

        return $this;
    }

    public function getPriceTimeUnit(): ?PriceTimeUnit
    {
        return $this->priceTimeUnit;
    }

    public function setPriceTimeUnit(?PriceTimeUnit $priceTimeUnit): Prices
    {
        $this->priceTimeUnit = $priceTimeUnit;

        return $this;
    }

    public function getRentPricePerSqm(): ?float
    {
        return $this->rentPricePerSqm;
    }

    public function setRentPricePerSqm(?float $rentPricePerSqm): Prices
    {
        $this->rentPricePerSqm = $rentPricePerSqm;

        return $this;
    }

    public function getPurchasePricePerSqm(): ?float
    {
        return $this->purchasePricePerSqm;
    }

    public function setPurchasePricePerSqm(?float $purchasePricePerSqm): Prices
    {
        $this->purchasePricePerSqm = $purchasePricePerSqm;

        return $this;
    }

    public function getCommissionRequired(): ?bool
    {
        return $this->commissionRequired;
    }

    public function setCommissionRequired(?bool $commissionRequired): Prices
    {
        $this->commissionRequired = $commissionRequired;

        return $this;
    }

    public function getCommissionSplit(): ?CommissionSplit
    {
        return $this->commissionSplit;
    }

    public function setCommissionSplit(?CommissionSplit $commissionSplit): Prices
    {
        $this->commissionSplit = $commissionSplit;

        return $this;
    }

    public function getInternalCommission(): ?InternalCommission
    {
        return $this->internalCommission;
    }

    public function setInternalCommission(?InternalCommission $internalCommission): Prices
    {
        $this->internalCommission = $internalCommission;

        return $this;
    }

    public function getExternalCommission(): ?ExternalCommission
    {
        return $this->externalCommission;
    }

    public function setExternalCommission(?ExternalCommission $externalCommission): Prices
    {
        $this->externalCommission = $externalCommission;

        return $this;
    }

    public function getCommissionNote(): ?string
    {
        return $this->commissionNote;
    }

    public function setCommissionNote(?string $commissionNote): Prices
    {
        $this->commissionNote = $commissionNote;

        return $this;
    }

    public function getCommissionNet(): ?NetCommission
    {
        return $this->commissionNet;
    }

    public function setCommissionNet(?NetCommission $commissionNet): Prices
    {
        $this->commissionNet = $commissionNet;

        return $this;
    }

    public function getCommissionGross(): ?float
    {
        return $this->commissionGross;
    }

    public function setCommissionGross(?float $commissionGross): Prices
    {
        $this->commissionGross = $commissionGross;

        return $this;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): Prices
    {
        $this->currency = $currency;

        return $this;
    }

    public function getVatRate(): ?float
    {
        return $this->vatRate;
    }

    public function setVatRate(?float $vatRate): Prices
    {
        $this->vatRate = $vatRate;

        return $this;
    }

    public function getTotalVAT(): ?float
    {
        return $this->totalVAT;
    }

    public function setTotalVAT(?float $totalVAT): Prices
    {
        $this->totalVAT = $totalVAT;

        return $this;
    }

    public function getFreeTextPrice(): ?string
    {
        return $this->freeTextPrice;
    }

    public function setFreeTextPrice(?string $freeTextPrice): Prices
    {
        $this->freeTextPrice = $freeTextPrice;

        return $this;
    }

    public function getXTimes(): ?string
    {
        return $this->xTimes;
    }

    public function setXTimes(?string $xTimes): Prices
    {
        $this->xTimes = $xTimes;

        return $this;
    }

    public function getNetYield(): ?float
    {
        return $this->netYield;
    }

    public function setNetYield(?float $netYield): Prices
    {
        $this->netYield = $netYield;

        return $this;
    }

    public function getTargetNetYield(): ?float
    {
        return $this->targetNetYield;
    }

    public function setTargetNetYield(?float $targetNetYield): Prices
    {
        $this->targetNetYield = $targetNetYield;

        return $this;
    }

    public function getActualNetYield(): ?float
    {
        return $this->actualNetYield;
    }

    public function setActualNetYield(?float $actualNetYield): Prices
    {
        $this->actualNetYield = $actualNetYield;

        return $this;
    }

    public function getActualRentalIncome(): ?ActualRentalIncome
    {
        return $this->actualRentalIncome;
    }

    public function setActualRentalIncome(?ActualRentalIncome $actualRentalIncome): Prices
    {
        $this->actualRentalIncome = $actualRentalIncome;

        return $this;
    }

    public function getTargetRentalIncome(): ?TargetRentalIncome
    {
        return $this->targetRentalIncome;
    }

    public function setTargetRentalIncome(?TargetRentalIncome $targetRentalIncome): Prices
    {
        $this->targetRentalIncome = $targetRentalIncome;

        return $this;
    }

    public function getDevelopmentCosts(): ?float
    {
        return $this->developmentCosts;
    }

    public function setDevelopmentCosts(?float $developmentCosts): Prices
    {
        $this->developmentCosts = $developmentCosts;

        return $this;
    }

    public function getDeposit(): ?float
    {
        return $this->deposit;
    }

    public function setDeposit(?float $deposit): Prices
    {
        $this->deposit = $deposit;

        return $this;
    }

    public function getDepositText(): ?string
    {
        return $this->depositText;
    }

    public function setDepositText(?string $depositText): Prices
    {
        $this->depositText = $depositText;

        return $this;
    }

    public function getBusinessAssets(): ?float
    {
        return $this->businessAssets;
    }

    public function setBusinessAssets(?float $businessAssets): Prices
    {
        $this->businessAssets = $businessAssets;

        return $this;
    }

    public function getParkingCarport(): ?ParkingCarport
    {
        return $this->parkingCarport;
    }

    public function setParkingCarport(?ParkingCarport $parkingCarport): Prices
    {
        $this->parkingCarport = $parkingCarport;

        return $this;
    }

    public function getParkingDuplex(): ?ParkingDuplex
    {
        return $this->parkingDuplex;
    }

    public function setParkingDuplex(?ParkingDuplex $parkingDuplex): Prices
    {
        $this->parkingDuplex = $parkingDuplex;

        return $this;
    }

    public function getParkingOutdoor(): ?ParkingOutdoor
    {
        return $this->parkingOutdoor;
    }

    public function setParkingOutdoor(?ParkingOutdoor $parkingOutdoor): Prices
    {
        $this->parkingOutdoor = $parkingOutdoor;

        return $this;
    }

    public function getParkingGarage(): ?ParkingGarage
    {
        return $this->parkingGarage;
    }

    public function setParkingGarage(?ParkingGarage $parkingGarage): Prices
    {
        $this->parkingGarage = $parkingGarage;

        return $this;
    }

    public function getParkingMultiStorey(): ?ParkingMultiStorey
    {
        return $this->parkingMultiStorey;
    }

    public function setParkingMultiStorey(?ParkingMultiStorey $parkingMultiStorey): Prices
    {
        $this->parkingMultiStorey = $parkingMultiStorey;

        return $this;
    }

    public function getParkingUnderground(): ?ParkingUnderground
    {
        return $this->parkingUnderground;
    }

    public function setParkingUnderground(?ParkingUnderground $parkingUnderground): Prices
    {
        $this->parkingUnderground = $parkingUnderground;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getParkingOther(): array
    {
        return $this->parkingOther ?? [];
    }

    public function setParkingOther(array $parkingOther): Prices
    {
        $this->parkingOther = $parkingOther;

        return $this;
    }

    public function getGuidePrice(): ?float
    {
        return $this->guidePrice;
    }

    public function setGuidePrice(?float $guidePrice): Prices
    {
        $this->guidePrice = $guidePrice;

        return $this;
    }

    public function getGuidePricePerSqm(): ?float
    {
        return $this->guidePricePerSqm;
    }

    public function setGuidePricePerSqm(?float $guidePricePerSqm): Prices
    {
        $this->guidePricePerSqm = $guidePricePerSqm;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield ?? [];
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Prices
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield ?? [];
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Prices
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Prices
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
