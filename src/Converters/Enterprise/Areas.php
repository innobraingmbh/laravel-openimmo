<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Converters\Enterprise;

trait Areas
{
    public function convertAreas(): array
    {
        $areas = getAreas($this->openImmo);

        return [
            'wohnflaeche' => $this->parseFloat($areas->getLivingArea()),
            'wohnfnutzflaechelaeche' => $this->parseFloat($areas->getUsableArea()),
            'gesamtflaeche' => $this->parseFloat($areas->getTotalArea()),
            'ladenflaeche' => $this->parseFloat($areas->getShopArea()),
            'lagerflaeche' => $this->parseFloat($areas->getStorageArea()),
            'verkaufsflaeche' => $this->parseFloat($areas->getSalesArea()),
            'freiflaeche' => $this->parseFloat($areas->getOpenSpace()),
            'bueroflaeche' => $this->parseFloat($areas->getOfficeArea()),
            'bueroteilflaeche' => $this->parseFloat($areas->getPartialOfficeArea()),
            'fensterfront' => $this->parseFloat($areas->getWindowFront()),
            'verwaltungsflaeche' => $this->parseFloat($areas->getAdministrativeArea()),
            'gastroflaeche' => $this->parseFloat($areas->getGastronomyArea()),
            'anzahl_terrassen' => $this->parseFloat($areas->getNumberOfTerraces()),
            'grz' => $this->parseFloat($areas->getSiteOccupancyIndex()),
            'gfz' => $this->parseFloat($areas->getFloorAreaRatio()),
            'bmz' => $this->parseFloat($areas->getFloorAreaRatio()),
            'bgf' => $this->parseFloat($areas->getGrossFloorArea()),
            'grundstuecksflaeche' => $this->parseFloat($areas->getPlotArea()),
            'sonstflaeche' => $this->parseFloat($areas->getOtherArea()),
            'anzahl_zimmer' => $this->parseFloat($areas->getNumberOfRooms()),
            'anzahl_schlafzimmer' => $this->parseFloat($areas->getNumberOfBedrooms()),
            'anzahl_sep_wc' => $this->parseFloat($areas->getNumberOfSeparateToilets()),
            'anzahl_wohn_schlafzimmer' => $this->parseFloat($areas->getNumberOfLivingBedrooms()),
            'anzahl_badezimmer' => $this->parseFloat($areas->getNumberOfBathrooms()),
            'gartenflaeche' => $this->parseFloat($areas->getGardenArea()),
            'kellerflaeche' => $this->parseFloat($areas->getBasementArea()),
            'fensterfront_qm' => $this->parseFloat($areas->getWindowFront()),
            'grundstuecksfront' => $this->parseFloat($areas->getPlotFront()),
            'dachbodenflaeche' => $this->parseFloat($areas->getAtticArea()),
            'teilbar_ab' => $this->parseFloat($areas->getDivisibleFrom()),
            'beheizbare_flaeche' => $this->parseFloat($areas->getHeatedArea()),
            'anzahl_stellplaetze' => $this->parseFloat($areas->getNumberOfParkingSpaces()),
            'plaetze_gastraum' => $this->parseFloat($areas->getDiningRoomSeats()),
            'anzahl_betten' => $this->parseFloat($areas->getNumberOfBeds()),
            'anzahl_tagungsraeume' => $this->parseFloat($areas->getNumberOfMeetingRooms()),
            'vermietbare_flaeche' => $this->parseFloat($areas->getRentableArea()),
            'anzahl_wohneinheiten' => $this->parseFloat($areas->getNumberOfResidentialUnits()),
            'anzahl_gewerbeeinheiten' => $this->parseFloat($areas->getNumberOfCommercialUnits()),
        ];
    }
}
