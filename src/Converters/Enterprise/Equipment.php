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
            'wg_geeignet' => $equipment->getSuitableForSharedFlat() === true ? 1 : 0,
            'raeume_veraenderbar' => $equipment->getRoomsModifiable() === true ? 1 : 0,
            'kamin' => $equipment->getFireplace() === true ? 1 : 0,
            'klimatisiert' => $equipment->getAirConditioned() === true ? 1 : 0,
            'fahrstuhl' => $equipment->getElevator() instanceof Elevator ? 1 : 0,
            'gartennutzung' => $equipment->getGardenUse() === true ? 1 : 0,
            'bad' => $this->convertBathroom(),
            'kueche' => $this->convertKitchen(),
            'boden' => $this->convertFloor(),
            'heizungsart' => $this->convertHeatingType(),
            'befeuerung' => $this->convertHeating(),
            'ausricht_balkon_terrasse' => $this->convertBalconyTerraceOrientation(),
            'rollstuhlgerecht' => $equipment->getWheelchairAccessible() === true ? 1 : 0,
            'kabel_sat_tv' => $equipment->getCableSatelliteTV() === true ? 1 : 0,
            'barrierefrei' => $equipment->getBarrierFree() === true ? 1 : 0,
            'sauna' => $equipment->getSauna() === true ? 1 : 0,
            'swimmingpool' => $equipment->getSwimmingpool() === true ? 1 : 0,
            'wasch_trockenraum' => $equipment->getLaundryDryingRoom() === true ? 1 : 0,
            'angeschl_gastronomie' => $equipment->getAttachedGastronomy() instanceof AttachedGastronomy ? 1 : 0,
            'serviceleistungen' => $equipment->getServices() !== [] ? 1 : 0,
            'sicherheitstechnik' => $equipment->getSecurityTechnology() instanceof SecurityTechnology ? 1 : 0,
            'unterkellert' => $this->convertBasement(),
            'gaesteWc' => $equipment->getGuestToilet() === true ? 1 : 0,
            'moebliert' => $this->convertFurnished(),
            'abstellraum' => $equipment->getStorageRoom() === true ? 1 : 0,
            'fahrradraum' => $equipment->getBicycleRoom() === true ? 1 : 0,
            'wintergarten' => $equipment->getWinterGarden() === true ? 1 : 0,
        ];
    }

    private function convertBathroom(): array
    {
        $bathroom = getBathroom($this->openImmo);

        $result = [];

        if ($bathroom->getBidet() === true) {
            $result[] = 'bidet';
        }
        if ($bathroom->getShower() === true) {
            $result[] = 'dusche';
        }
        if ($bathroom->getWindow() === true) {
            $result[] = 'fenster';
        }
        if ($bathroom->getUrinal() === true) {
            $result[] = 'pissoir';
        }
        if ($bathroom->getBathtub() === true) {
            $result[] = 'wanne';
        }

        return $result;
    }

    private function convertKitchen(): array
    {
        $kitchen = getKitchen($this->openImmo);

        $result = [];

        if ($kitchen->getBuiltInKitchen() === true) {
            $result[] = 'ebk';
        }
        if ($kitchen->getOpen() === true) {
            $result[] = 'offen';
        }
        if ($kitchen->getPantry() === true) {
            $result[] = 'pantry';
        }

        return $result;
    }

    private function convertFloor(): array
    {
        $floor = getFloor($this->openImmo);

        $result = [];

        if ($floor->getMarble() === true) {
            $result[] = 'marmor';
        }
        if ($floor->getTiles() === true) {
            $result[] = 'fliesen';
        }
        if ($floor->getStone() === true) {
            $result[] = 'stein';
        }
        if ($floor->getCarpet() === true) {
            $result[] = 'teppichboden';
        }
        if ($floor->getParquet() === true) {
            $result[] = 'parkett';
        }
        if ($floor->getFinishedParquet() === true) {
            $result[] = 'fertigparkett';
        }
        if ($floor->getLaminate() === true) {
            $result[] = 'laminat';
        }
        if ($floor->getPlastic() === true) {
            $result[] = 'pvc';
        }
        if ($floor->getScreed() === true) {
            $result[] = 'estrich';
        }
        if ($floor->getRaisedFloor() === true) {
            $result[] = 'doppelboden';
        }
        if ($floor->getLinoleum() === true) {
            $result[] = 'linoleum';
        }
        if ($floor->getTerracotta() === true) {
            $result[] = 'terrakotta';
        }
        if ($floor->getGranite() === true) {
            $result[] = 'granit';
        }

        return $result;
    }

    private function convertHeatingType(): array
    {
        $heatingType = getHeatingType($this->openImmo);

        $result = [];

        if ($heatingType->getStove() === true) {
            $result[] = 'ofen';
        }
        if ($heatingType->getFloor() === true) {
            $result[] = 'etage';
        }
        if ($heatingType->getCentral() === true) {
            $result[] = 'zentral';
        }
        if ($heatingType->getRemote() === true) {
            $result[] = 'fern';
        }
        if ($heatingType->getFlooring() === true) {
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

        if ($heating->getOil() === true) {
            $result[] = 'oel';
        }
        if ($heating->getGas() === true) {
            $result[] = 'gas';
        }
        if ($heating->getElectric() === true) {
            $result[] = 'strom';
        }
        if ($heating->getAlternative() === true) {
            $result[] = 'alternativ';
        }
        if ($heating->getSolar() === true) {
            $result[] = 'solar';
        }
        if ($heating->getGeothermal() === true) {
            $result[] = 'erdwaerme';
        }
        if ($heating->getAirHeatPump() === true) {
            $result[] = 'luftwp';
        }
        if ($heating->getBlock() === true) {
            $result[] = 'block';
        }
        if ($heating->getWaterElectric() === true) {
            $result[] = 'wasser-elektro';
        }
        if ($heating->getPellet() === true) {
            $result[] = 'pellet';
        }
        if ($heating->getCoal() === true) {
            $result[] = 'kohle';
        }
        if ($heating->getWood() === true) {
            $result[] = 'holz';
        }
        if ($heating->getLiquidGas() === true) {
            $result[] = 'fluessiggas';
        }

        return $result;
    }

    private function convertBalconyTerraceOrientation(): array
    {
        $balconyTerraceOrientation = getBalconyTerraceOrientation($this->openImmo);

        $result = [];
        if ($balconyTerraceOrientation->getNorth() === true) {
            $result[] = 'nord';
        }
        if ($balconyTerraceOrientation->getNorthEast() === true) {
            $result[] = 'nordost';
        }
        if ($balconyTerraceOrientation->getEast() === true) {
            $result[] = 'ost';
        }
        if ($balconyTerraceOrientation->getSouthEast() === true) {
            $result[] = 'suedost';
        }
        if ($balconyTerraceOrientation->getSouth() === true) {
            $result[] = 'sued';
        }
        if ($balconyTerraceOrientation->getSouthWest() === true) {
            $result[] = 'suedwest';
        }
        if ($balconyTerraceOrientation->getWest() === true) {
            $result[] = 'west';
        }
        if ($balconyTerraceOrientation->getNorthWest() === true) {
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
