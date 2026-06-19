<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Prices
 */
#[Description('Price information of the property (purchase, rent, additional costs, commission)')]
#[XmlRoot(name: 'preise')]
class Prices
{
    public function __construct(
        #[Type(PurchasePrice::class)]
        #[Description('Purchase price of the property')]
        #[SerializedName('kaufpreis')]
        protected ?PurchasePrice $purchasePrice = null,
        #[Type(NetPurchasePrice::class)]
        #[Description('Net purchase price (excluding VAT)')]
        #[SerializedName('kaufpreisnetto')]
        protected ?NetPurchasePrice $purchasePriceNet = null,
        #[Type('float')]
        #[Description('Gross purchase price (including VAT)')]
        #[SerializedName('kaufpreisbrutto')]
        protected ?float $purchasePriceGross = null,
        #[Type('float')]
        #[Description('Net cold rent (excluding VAT)')]
        #[SerializedName('nettokaltmiete')]
        protected ?float $netColdRent = null,
        #[Type('float')]
        #[Description('Cold rent (base rent without utilities) of the property')]
        #[SerializedName('kaltmiete')]
        protected ?float $coldRent = null,
        #[Type('float')]
        #[Description('Warm rent (cold rent including utilities)')]
        #[SerializedName('warmmiete')]
        protected ?float $warmRent = null,
        #[Type('float')]
        #[Description('Additional costs (service charges) of the property')]
        #[SerializedName('nebenkosten')]
        protected ?float $additionalCosts = null,
        #[Type('bool')]
        #[Description('Heating costs are included in the additional costs')]
        #[SerializedName('heizkosten_enthalten')]
        protected ?bool $heatingCostsIncluded = null,
        #[Type('float')]
        #[Description('Heating costs of the property')]
        #[SerializedName('heizkosten')]
        protected ?float $heatingCosts = null,
        #[Type('bool')]
        #[Description('Price plus VAT')]
        #[SerializedName('zzg_mehrwertsteuer')]
        protected ?bool $plusVAT = null,
        #[Type('float')]
        #[Description('Rent surcharges')]
        #[SerializedName('mietzuschlaege')]
        protected ?float $rentSurcharges = null,
        #[Type(NetMainRent::class)]
        #[Description('Net main rent (excluding VAT)')]
        #[SerializedName('hauptmietzinsnetto')]
        protected ?NetMainRent $netMainRent = null,
        #[Type('float')]
        #[Description('Flat rent (all-inclusive rent)')]
        #[SerializedName('pauschalmiete')]
        protected ?float $flatRent = null,
        #[Type(NetOperatingCosts::class)]
        #[Description('Net operating costs (excluding VAT)')]
        #[SerializedName('betriebskostennetto')]
        protected ?NetOperatingCosts $netOperatingCosts = null,
        #[Type(NetEVB::class)]
        #[Description('Net unit value (EVB value)')]
        #[SerializedName('evbnetto')]
        protected ?NetEVB $netUnitValue = null,
        #[Type(NetTotalRent::class)]
        #[Description('Net total rent (excluding VAT)')]
        #[SerializedName('gesamtmietenetto')]
        protected ?NetTotalRent $totalRentNet = null,
        #[Type('float')]
        #[Description('Gross total rent (including VAT)')]
        #[SerializedName('gesamtmietebrutto')]
        protected ?float $totalRentGross = null,
        #[Type(NetTotalCost::class)]
        #[Description('Net total cost burden (excluding VAT)')]
        #[SerializedName('gesamtbelastungnetto')]
        protected ?NetTotalCost $totalCostNet = null,
        #[Type('float')]
        #[Description('Gross total cost burden (including VAT)')]
        #[SerializedName('gesamtbelastungbrutto')]
        protected ?float $totalCostGross = null,
        #[Type(TotalCostsPerSqmFrom::class)]
        #[Description('Total costs per square meter starting from a minimum value')]
        #[SerializedName('gesamtkostenprom2von')]
        protected ?TotalCostsPerSqmFrom $totalCostsPerSqmFrom = null,
        #[Type(NetHeatingCosts::class)]
        #[Description('Net heating costs (excluding VAT)')]
        #[SerializedName('heizkostennetto')]
        protected ?NetHeatingCosts $netHeatingCosts = null,
        #[Type(NetMonthlyCosts::class)]
        #[Description('Monthly net total costs (excluding VAT)')]
        #[SerializedName('monatlichekostennetto')]
        protected ?NetMonthlyCosts $monthlyCostsNet = null,
        #[Type('float')]
        #[Description('Monthly gross total costs (including VAT)')]
        #[SerializedName('monatlichekostenbrutto')]
        protected ?float $monthlyCostsGross = null,
        #[Type(AdditionalCostsPerSqmFrom::class)]
        #[Description('Additional costs per square meter starting from a minimum value')]
        #[SerializedName('nebenkostenprom2von')]
        protected ?AdditionalCostsPerSqmFrom $additionalCostsPerSqmFrom = null,
        #[Type(NetReserves::class)]
        #[Description('Net maintenance reserves (excluding VAT)')]
        #[SerializedName('ruecklagenetto')]
        protected ?NetReserves $reservesNet = null,
        #[Type(NetOtherCosts::class)]
        #[Description('Other net costs (excluding VAT)')]
        #[SerializedName('sonstigekostennetto')]
        protected ?NetOtherCosts $otherCostsNet = null,
        #[Type(NetOtherRent::class)]
        #[Description('Other net rent (excluding VAT)')]
        #[SerializedName('sonstigemietenetto')]
        protected ?NetOtherRent $otherRentNet = null,
        #[Type(NetRentPerSqmFrom::class)]
        #[Description('Net rent per square meter starting from a minimum value')]
        #[SerializedName('nettomieteprom2von')]
        protected ?NetRentPerSqmFrom $netRentPerSqmFrom = null,
        #[Type('float')]
        #[Description('Lease amount of the property')]
        #[SerializedName('pacht')]
        protected ?float $lease = null,
        #[Type('float')]
        #[Description('Leasehold amount of the property')]
        #[SerializedName('erbpacht')]
        protected ?float $leasehold = null,
        #[Type('float')]
        #[Description('Maintenance fee (monthly homeowner association fee)')]
        #[SerializedName('hausgeld')]
        protected ?float $maintenanceFee = null,
        #[Type('float')]
        #[Description('Distance value')]
        #[SerializedName('abstand')]
        protected ?float $distance = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Start date of the price time range')]
        #[SerializedName('preis_zeitraum_von')]
        protected ?DateTime $priceTimeRangeFrom = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('End date of the price time range')]
        #[SerializedName('preis_zeitraum_bis')]
        protected ?DateTime $priceTimeRangeTo = null,
        #[Type(PriceTimeUnit::class)]
        #[Description('Time unit for the price value')]
        #[SerializedName('preis_zeiteinheit')]
        protected ?PriceTimeUnit $priceTimeUnit = null,
        #[Type('float')]
        #[Description('Rent price per square meter')]
        #[SerializedName('mietpreis_pro_qm')]
        protected ?float $rentPricePerSqm = null,
        #[Type('float')]
        #[Description('Purchase price per square meter')]
        #[SerializedName('kaufpreis_pro_qm')]
        protected ?float $purchasePricePerSqm = null,
        #[Type('bool')]
        #[Description('Broker commission is charged')]
        #[SerializedName('provisionspflichtig')]
        protected ?bool $commissionRequired = null,
        #[Type(CommissionSplit::class)]
        #[Description('Split of the broker commission')]
        #[SerializedName('provision_teilen')]
        protected ?CommissionSplit $commissionSplit = null,
        #[Type(InternalCommission::class)]
        #[Description("Internal commission (seller's commission)")]
        #[SerializedName('innen_courtage')]
        protected ?InternalCommission $internalCommission = null,
        #[Type(ExternalCommission::class)]
        #[Description("External commission (buyer's commission)")]
        #[SerializedName('aussen_courtage')]
        protected ?ExternalCommission $externalCommission = null,
        #[Type('string')]
        #[Description('Note on the broker commission')]
        #[SerializedName('courtage_hinweis')]
        protected ?string $commissionNote = null,
        #[Type(NetCommission::class)]
        #[Description('Net broker commission (excluding VAT)')]
        #[SerializedName('provisionnetto')]
        protected ?NetCommission $commissionNet = null,
        #[Type('float')]
        #[Description('Gross broker commission (including VAT)')]
        #[SerializedName('provisionbrutto')]
        protected ?float $commissionGross = null,
        #[Type(Currency::class)]
        #[Description('Currency of the price values')]
        #[SerializedName('waehrung')]
        protected ?Currency $currency = null,
        /**
         * Maximum precision: 2
         * Minimum value (inclusive): 0
         */
        #[Type('float')]
        #[Description('VAT rate')]
        #[SerializedName('mwst_satz')]
        protected ?float $vatRate = null,
        /**
         * Maximum precision: 2
         * Minimum value (inclusive): 0
         */
        #[Type('float')]
        #[Description('Total VAT amount')]
        #[SerializedName('mwst_gesamt')]
        protected ?float $totalVAT = null,
        #[Type('string')]
        #[Description('Price as free text')]
        #[SerializedName('freitext_preis')]
        protected ?string $freeTextPrice = null,
        #[Type('string')]
        #[Description('Multiplier (x times annual rent) as price specification')]
        #[SerializedName('x_fache')]
        protected ?string $xTimes = null,
        #[Type('float')]
        #[Description('Net yield of the property')]
        #[SerializedName('nettorendite')]
        protected ?float $netYield = null,
        #[Type('float')]
        #[Description('Target net yield of the property')]
        #[SerializedName('nettorendite_soll')]
        protected ?float $targetNetYield = null,
        #[Type('float')]
        #[Description('Actual net yield of the property')]
        #[SerializedName('nettorendite_ist')]
        protected ?float $actualNetYield = null,
        #[Type(ActualRentalIncome::class)]
        #[Description('Actual rental income')]
        #[SerializedName('mieteinnahmen_ist')]
        protected ?ActualRentalIncome $actualRentalIncome = null,
        #[Type(TargetRentalIncome::class)]
        #[Description('Target rental income of the property')]
        #[SerializedName('mieteinnahmen_soll')]
        protected ?TargetRentalIncome $targetRentalIncome = null,
        #[Type('float')]
        #[Description('Development costs of the plot')]
        #[SerializedName('erschliessungskosten')]
        protected ?float $developmentCosts = null,
        #[Type('float')]
        #[Description('Security deposit')]
        #[SerializedName('kaution')]
        protected ?float $deposit = null,
        #[Type('string')]
        #[Description('Free text describing the security deposit')]
        #[SerializedName('kaution_text')]
        protected ?string $depositText = null,
        #[Type('float')]
        #[Description('Business assets (cooperative share)')]
        #[SerializedName('geschaeftsguthaben')]
        protected ?float $businessAssets = null,
        #[Type(ParkingCarport::class)]
        #[Description('Carport parking space')]
        #[SerializedName('stp_carport')]
        protected ?ParkingCarport $parkingCarport = null,
        #[Type(ParkingDuplex::class)]
        #[Description('Duplex parking space')]
        #[SerializedName('stp_duplex')]
        protected ?ParkingDuplex $parkingDuplex = null,
        #[Type(ParkingOutdoor::class)]
        #[Description('Outdoor parking space')]
        #[SerializedName('stp_freiplatz')]
        protected ?ParkingOutdoor $parkingOutdoor = null,
        #[Type(ParkingGarage::class)]
        #[Description('Garage parking space')]
        #[SerializedName('stp_garage')]
        protected ?ParkingGarage $parkingGarage = null,
        #[Type(ParkingMultiStorey::class)]
        #[Description('Multi-storey car park space')]
        #[SerializedName('stp_parkhaus')]
        protected ?ParkingMultiStorey $parkingMultiStorey = null,
        #[Type(ParkingUnderground::class)]
        #[Description('Underground garage parking space')]
        #[SerializedName('stp_tiefgarage')]
        protected ?ParkingUnderground $parkingUnderground = null,
        #[XmlList(entry: 'stp_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\ParkingOther>')]
        #[SkipWhenEmpty]
        #[Description('Other parking space')]
        #[SerializedName('stp_sonstige')]
        protected array $parkingOther = [],
        #[Type('float')]
        #[Description('Guide price of the property')]
        #[SerializedName('richtpreis')]
        protected ?float $guidePrice = null,
        #[Type('float')]
        #[Description('Guide price per square meter')]
        #[SerializedName('richtpreisprom2')]
        protected ?float $guidePricePerSqm = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[Description('User-defined simple free field')]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[Description('User-defined free field with arbitrary content')]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[Description('User-defined extension')]
        #[SerializedName('user_defined_extend')]
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
        return $this->parkingOther;
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
        return $this->userDefinedSimplefield;
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
        return $this->userDefinedAnyfield;
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
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Prices
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
