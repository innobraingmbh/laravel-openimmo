<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use function Innobrain\OpenImmo\Helpers\getAreas;

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
            'grz' => $areas->getSiteOccupancyIndex(),
            'gfz' => $areas->getFloorAreaRatio(),
            'bmz' => $areas->getFloorAreaRatio(),
            'bgf' => $areas->getGrossFloorArea(),
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
            'anzahl_balkone' => $this->parseFloat($areas->getNumberOfBalconies()),
            'balkon' => $areas->getNumberOfBalconies() > 0 ? 1 : 0,
            'terrasse' => $areas->getNumberOfTerraces() > 0 ? 1 : 0,
        ];
    }
}
