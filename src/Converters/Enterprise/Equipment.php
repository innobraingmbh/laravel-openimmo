<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use Innobrain\OpenImmo\Dtos\AttachedGastronomy;
use Innobrain\OpenImmo\Dtos\Elevator;
use Innobrain\OpenImmo\Dtos\HeatingSystem;
use Innobrain\OpenImmo\Dtos\SecurityTechnology;

trait Equipment
{
    public function convertEquipment(): array
    {
        $equipment = getEquipment($this->openImmo);

        return [
            'wg_geeignet' => $equipment->getSuitableForSharedFlat() ? 1 : 0,
            'raeume_veraenderbar' => $equipment->getRoomsModifiable() ? 1 : 0,
            'kamin' => $equipment->getFireplace() ? 1 : 0,
            'klimatisiert' => $equipment->getAirConditioned() ? 1 : 0,
            'fahrstuhl' => $equipment->getElevator() instanceof Elevator ? 1 : 0,
            'gartennutzung' => $equipment->getGardenUse() ? 1 : 0,
            'bad' => $this->convertBathroom(),
            'kueche' => $this->convertKitchen(),
            'boden' => $this->convertFloor(),
            'heizungsart' => $this->convertHeatingType(),
            'befeuerung' => $this->convertHeating(),
            'ausricht_balkon_terrasse' => $this->convertBalconyTerraceOrientation(),
            'rollstuhlgerecht' => $equipment->getWheelchairAccessible() ? 1 : 0,
            'kabel_sat_tv' => $equipment->getCableSatelliteTV() ? 1 : 0,
            'barrierefrei' => $equipment->getBarrierFree() ? 1 : 0,
            'sauna' => $equipment->getSauna() ? 1 : 0,
            'swimmingpool' => $equipment->getSwimmingpool() ? 1 : 0,
            'wasch_trockenraum' => $equipment->getLaundryDryingRoom() ? 1 : 0,
            'angeschl_gastronomie' => $equipment->getAttachedGastronomy() instanceof AttachedGastronomy ? 1 : 0,
            'serviceleistungen' => $equipment->getServices() ? 1 : 0,
            'sicherheitstechnik' => $equipment->getSecurityTechnology() instanceof SecurityTechnology ? 1 : 0,
            'unterkellert' => $this->convertBasement(),
            'gaesteWc' => $equipment->getGuestToilet() ? 1 : 0,
            'moebliert' => $this->convertFurnished(),
            'abstellraum' => $equipment->getStorageRoom() ? 1 : 0,
            'fahrradraum' => $equipment->getBicycleRoom() ? 1 : 0,
            'wintergarten' => $equipment->getWinterGarden() ? 1 : 0,
        ];
    }

    private function convertBathroom(): array
    {
        $bathroom = getBathroom($this->openImmo);

        $result = [];

        if ($bathroom->getBidet()) {
            $result[] = 'bidet';
        }
        if ($bathroom->getShower()) {
            $result[] = 'dusche';
        }
        if ($bathroom->getWindow()) {
            $result[] = 'fenster';
        }
        if ($bathroom->getUrinal()) {
            $result[] = 'pissoir';
        }
        if ($bathroom->getBathtub()) {
            $result[] = 'wanne';
        }

        return $result;
    }

    private function convertKitchen(): array
    {
        $kitchen = getKitchen($this->openImmo);

        $result = [];

        if ($kitchen->getBuiltInKitchen()) {
            $result[] = 'ebk';
        }
        if ($kitchen->getOpen()) {
            $result[] = 'offen';
        }
        if ($kitchen->getPantry()) {
            $result[] = 'pantry';
        }

        return $result;
    }

    private function convertFloor(): array
    {
        $floor = getFloor($this->openImmo);

        $result = [];

        if ($floor->getMarble()) {
            $result[] = 'marmor';
        }
        if ($floor->getTiles()) {
            $result[] = 'fliesen';
        }
        if ($floor->getStone()) {
            $result[] = 'stein';
        }
        if ($floor->getCarpet()) {
            $result[] = 'teppichboden';
        }
        if ($floor->getParquet()) {
            $result[] = 'parkett';
        }
        if ($floor->getFinishedParquet()) {
            $result[] = 'fertigparkett';
        }
        if ($floor->getLaminate()) {
            $result[] = 'laminat';
        }
        if ($floor->getPlastic()) {
            $result[] = 'pvc';
        }
        if ($floor->getScreed()) {
            $result[] = 'estrich';
        }
        if ($floor->getRaisedFloor()) {
            $result[] = 'doppelboden';
        }
        if ($floor->getLinoleum()) {
            $result[] = 'linoleum';
        }
        if ($floor->getTerracotta()) {
            $result[] = 'terrakotta';
        }
        if ($floor->getGranite()) {
            $result[] = 'granit';
        }

        return $result;
    }

    private function convertHeatingType(): array
    {
        $heatingType = getHeatingType($this->openImmo);

        $result = [];

        if ($heatingType->getStove()) {
            $result[] = 'ofen';
        }
        if ($heatingType->getFloor()) {
            $result[] = 'etage';
        }
        if ($heatingType->getCentral()) {
            $result[] = 'zentral';
        }
        if ($heatingType->getRemote()) {
            $result[] = 'fern';
        }
        if ($heatingType->getFlooring()) {
            $result[] = 'fussboden';
        }

        return $result;
    }

    private function convertHeating(): array
    {
        $equipment = getEquipment($this->openImmo);
        $heating = $equipment->getHeating();

        $result = [];
        if (! $heating instanceof HeatingSystem) {
            return $result;
        }

        if ($heating->getOil()) {
            $result[] = 'oel';
        }
        if ($heating->getGas()) {
            $result[] = 'gas';
        }
        if ($heating->getElectric()) {
            $result[] = 'strom';
        }
        if ($heating->getAlternative()) {
            $result[] = 'alternativ';
        }
        if ($heating->getSolar()) {
            $result[] = 'solar';
        }
        if ($heating->getGeothermal()) {
            $result[] = 'erdwaerme';
        }
        if ($heating->getAirHeatPump()) {
            $result[] = 'luftwp';
        }
        if ($heating->getBlock()) {
            $result[] = 'block';
        }
        if ($heating->getWaterElectric()) {
            $result[] = 'wasser-elektro';
        }
        if ($heating->getPellet()) {
            $result[] = 'pellet';
        }
        if ($heating->getCoal()) {
            $result[] = 'kohle';
        }
        if ($heating->getWood()) {
            $result[] = 'holz';
        }
        if ($heating->getLiquidGas()) {
            $result[] = 'fluessiggas';
        }

        return $result;
    }

    private function convertBalconyTerraceOrientation(): array
    {
        $balconyTerraceOrientation = getBalconyTerraceOrientation($this->openImmo);

        $result = [];
        if ($balconyTerraceOrientation->getNorth()) {
            $result[] = 'nord';
        }
        if ($balconyTerraceOrientation->getNorthEast()) {
            $result[] = 'nordost';
        }
        if ($balconyTerraceOrientation->getEast()) {
            $result[] = 'ost';
        }
        if ($balconyTerraceOrientation->getSouthEast()) {
            $result[] = 'suedost';
        }
        if ($balconyTerraceOrientation->getSouth()) {
            $result[] = 'sued';
        }
        if ($balconyTerraceOrientation->getSouthWest()) {
            $result[] = 'suedwest';
        }
        if ($balconyTerraceOrientation->getWest()) {
            $result[] = 'west';
        }
        if ($balconyTerraceOrientation->getNorthWest()) {
            $result[] = 'nordwest';
        }

        return $result;
    }

    private function convertBasement(): ?string
    {
        return getBasement($this->openImmo)->getBasement();
    }

    private function convertFurnished(): ?string
    {
        return getFurnished($this->openImmo)->getFurnished();
    }
}
