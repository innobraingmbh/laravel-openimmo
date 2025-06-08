<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

trait Prices
{
    public function convertPrices(): array
    {
        $prices = getPrices($this->openImmo);

        return [
            'kaufpreis' => $this->parseFloat($prices->getPurchasePrice()?->getValue()),
            'kaltmiete' => $this->parseFloat($prices->getColdRent()),
            'heizkosten' => $this->parseFloat($prices->getHeatingCosts()),
            'waehrung' => $prices->getCurrency()?->getIsoCurrency(),
            'kaufpreis_pro_qm' => $this->parseFloat($prices->getPurchasePricePerSqm()),
            'freitext_preis' => $prices->getFreeTextPrice(),
            'innen_courtage' => $prices->getInternalCommission()?->getValue(),
            'aussen_courtage' => $prices->getExternalCommission()?->getValue(),
            'erschliessungskosten' => $prices->getDevelopmentCosts(),
            'abstand' => $this->parseFloat($prices->getDistance()),
            'pacht' => $this->parseFloat($prices->getLease()),
            'erbpacht' => $this->parseFloat($prices->getLeasehold()),
            'hausgeld' => $this->parseFloat($prices->getMaintenanceFee()),
            'freiplatz_anzahl' => (string) $prices->getParkingOutdoor()?->getQuantity(),
            'kaufpreis_exkl_ust' => $this->parseFloat($prices->getPurchasePriceNet()?->getValue()),
            'nettokaltmiete' => $this->parseFloat($prices->getNetColdRent()),
            'mietzuschlaege' => $this->parseFloat($prices->getRentSurcharges()),
            'evbnetto' => $this->parseFloat($prices->getNetUnitValue()?->getValue()),
            'sonstige_kosten' => $this->parseFloat($prices->getOtherCostsNet()?->getValue()),
            'ust_satz_bk' => '10',
            'ust_satz_heizkosten' => '20',
            'hauptmiete_exkl_ust' => $this->parseFloat($prices->getNetMainRent()?->getValue()),
            'nebenkosten' => $this->parseFloat($prices->getNetOperatingCosts()?->getValue()),
            'heizkosten_exkl_ust' => $this->parseFloat($prices->getNetHeatingCosts()?->getValue()),
            'gesamtbelastung_exkl_ust' => $this->parseFloat($prices->getTotalCostNet()?->getValue()),
            'warmmiete' => $this->parseFloat($prices->getTotalCostGross()),
            'gesamtmiete_ohk_netto' => $this->parseFloat($prices->getTotalRentNet()?->getValue()),
            'gesamtmiete_ohk_brutto' => $this->parseFloat($prices->getTotalRentGross()),
        ];
    }
}
