<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HeatingSystem
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 *
 */
#[XmlRoot(name: "befeuerung")]
class HeatingSystem
{
    public function __construct(
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("OEL")]
        protected ?bool $oil = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("GAS")]
        protected ?bool $gas = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ELEKTRO")]
        protected ?bool $electric = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ALTERNATIV")]
        protected ?bool $alternative = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("SOLAR")]
        protected ?bool $solar = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ERDWAERME")]
        protected ?bool $geothermal = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("LUFTWP")]
        protected ?bool $airHeatPump = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("FERN")]
        protected ?bool $remote = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("BLOCK")]
        protected ?bool $block = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("WASSER-ELEKTRO")]
        protected ?bool $waterElectric = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("PELLET")]
        protected ?bool $pellet = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("KOHLE")]
        protected ?bool $coal = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("HOLZ")]
        protected ?bool $wood = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("FLUESSIGGAS")]
        protected ?bool $liquidGas = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ERDGAS_LEICHT")]
        protected ?bool $lightNaturalGas = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("ERDGAS_SCHWER")]
        protected ?bool $heavyNaturalGas = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("FERNWAERME_DAMPF")]
        protected ?bool $districtHeatingVapor = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("NAHWAERME")]
        protected ?bool $localHeating = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("WAERMELIEFERUNG")]
        protected ?bool $heatSupply = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("BIOENERGIE")]
        protected ?bool $bioEnergy = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("WINDENERGIE")]
        protected ?bool $windEnergy = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("WASSERENERGIE")]
        protected ?bool $waterEnergy = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("UMWELTWAERME")]
        protected ?bool $environmentalHeat = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("KWK_FOSSIL")]
        protected ?bool $chpFossil = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("KWK_ERNEUERBAR")]
        protected ?bool $chpRenewable = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("KWK_REGENERATIV")]
        protected ?bool $chpRegenerative = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("KWK_BIO")]
        protected ?bool $chpBio = null
    ) {}

    public function getOil(): ?bool
    {
        return $this->oil;
    }

    public function setOil(?bool $oil): HeatingSystem
    {
        $this->oil = $oil;

        return $this;
    }

    public function getGas(): ?bool
    {
        return $this->gas;
    }

    public function setGas(?bool $gas): HeatingSystem
    {
        $this->gas = $gas;

        return $this;
    }

    public function getElectric(): ?bool
    {
        return $this->electric;
    }

    public function setElectric(?bool $electric): HeatingSystem
    {
        $this->electric = $electric;

        return $this;
    }

    public function getAlternative(): ?bool
    {
        return $this->alternative;
    }

    public function setAlternative(?bool $alternative): HeatingSystem
    {
        $this->alternative = $alternative;

        return $this;
    }

    public function getSolar(): ?bool
    {
        return $this->solar;
    }

    public function setSolar(?bool $solar): HeatingSystem
    {
        $this->solar = $solar;

        return $this;
    }

    public function getGeothermal(): ?bool
    {
        return $this->geothermal;
    }

    public function setGeothermal(?bool $geothermal): HeatingSystem
    {
        $this->geothermal = $geothermal;

        return $this;
    }

    public function getAirHeatPump(): ?bool
    {
        return $this->airHeatPump;
    }

    public function setAirHeatPump(?bool $airHeatPump): HeatingSystem
    {
        $this->airHeatPump = $airHeatPump;

        return $this;
    }

    public function getRemote(): ?bool
    {
        return $this->remote;
    }

    public function setRemote(?bool $remote): HeatingSystem
    {
        $this->remote = $remote;

        return $this;
    }

    public function getBlock(): ?bool
    {
        return $this->block;
    }

    public function setBlock(?bool $block): HeatingSystem
    {
        $this->block = $block;

        return $this;
    }

    public function getWaterElectric(): ?bool
    {
        return $this->waterElectric;
    }

    public function setWaterElectric(?bool $waterElectric): HeatingSystem
    {
        $this->waterElectric = $waterElectric;

        return $this;
    }

    public function getPellet(): ?bool
    {
        return $this->pellet;
    }

    public function setPellet(?bool $pellet): HeatingSystem
    {
        $this->pellet = $pellet;

        return $this;
    }

    public function getCoal(): ?bool
    {
        return $this->coal;
    }

    public function setCoal(?bool $coal): HeatingSystem
    {
        $this->coal = $coal;

        return $this;
    }

    public function getWood(): ?bool
    {
        return $this->wood;
    }

    public function setWood(?bool $wood): HeatingSystem
    {
        $this->wood = $wood;

        return $this;
    }

    public function getLiquidGas(): ?bool
    {
        return $this->liquidGas;
    }

    public function setLiquidGas(?bool $liquidGas): HeatingSystem
    {
        $this->liquidGas = $liquidGas;

        return $this;
    }

    public function getLightNaturalGas(): ?bool
    {
        return $this->lightNaturalGas;
    }

    public function setLightNaturalGas(?bool $lightNaturalGas): HeatingSystem
    {
        $this->lightNaturalGas = $lightNaturalGas;

        return $this;
    }

    public function getHeavyNaturalGas(): ?bool
    {
        return $this->heavyNaturalGas;
    }

    public function setHeavyNaturalGas(?bool $heavyNaturalGas): HeatingSystem
    {
        $this->heavyNaturalGas = $heavyNaturalGas;

        return $this;
    }

    public function getDistrictHeatingVapor(): ?bool
    {
        return $this->districtHeatingVapor;
    }

    public function setDistrictHeatingVapor(?bool $districtHeatingVapor): HeatingSystem
    {
        $this->districtHeatingVapor = $districtHeatingVapor;

        return $this;
    }

    public function getLocalHeating(): ?bool
    {
        return $this->localHeating;
    }

    public function setLocalHeating(?bool $localHeating): HeatingSystem
    {
        $this->localHeating = $localHeating;

        return $this;
    }

    public function getHeatSupply(): ?bool
    {
        return $this->heatSupply;
    }

    public function setHeatSupply(?bool $heatSupply): HeatingSystem
    {
        $this->heatSupply = $heatSupply;

        return $this;
    }

    public function getBioEnergy(): ?bool
    {
        return $this->bioEnergy;
    }

    public function setBioEnergy(?bool $bioEnergy): HeatingSystem
    {
        $this->bioEnergy = $bioEnergy;

        return $this;
    }

    public function getWindEnergy(): ?bool
    {
        return $this->windEnergy;
    }

    public function setWindEnergy(?bool $windEnergy): HeatingSystem
    {
        $this->windEnergy = $windEnergy;

        return $this;
    }

    public function getWaterEnergy(): ?bool
    {
        return $this->waterEnergy;
    }

    public function setWaterEnergy(?bool $waterEnergy): HeatingSystem
    {
        $this->waterEnergy = $waterEnergy;

        return $this;
    }

    public function getEnvironmentalHeat(): ?bool
    {
        return $this->environmentalHeat;
    }

    public function setEnvironmentalHeat(?bool $environmentalHeat): HeatingSystem
    {
        $this->environmentalHeat = $environmentalHeat;

        return $this;
    }

    public function getChpFossil(): ?bool
    {
        return $this->chpFossil;
    }

    public function setChpFossil(?bool $chpFossil): HeatingSystem
    {
        $this->chpFossil = $chpFossil;

        return $this;
    }

    public function getChpRenewable(): ?bool
    {
        return $this->chpRenewable;
    }

    public function setChpRenewable(?bool $chpRenewable): HeatingSystem
    {
        $this->chpRenewable = $chpRenewable;

        return $this;
    }

    public function getChpRegenerative(): ?bool
    {
        return $this->chpRegenerative;
    }

    public function setChpRegenerative(?bool $chpRegenerative): HeatingSystem
    {
        $this->chpRegenerative = $chpRegenerative;

        return $this;
    }

    public function getChpBio(): ?bool
    {
        return $this->chpBio;
    }

    public function setChpBio(?bool $chpBio): HeatingSystem
    {
        $this->chpBio = $chpBio;

        return $this;
    }
}
