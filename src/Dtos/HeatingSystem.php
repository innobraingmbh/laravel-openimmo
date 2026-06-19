<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class HeatingSystem
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 */
#[Description('Heating fuel type of the heating system (energy source)')]
#[XmlRoot(name: 'befeuerung')]
class HeatingSystem
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OEL')]
        #[Description('Oil as heating energy source')]
        protected ?bool $oil = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GAS')]
        #[Description('Gas as heating energy source')]
        protected ?bool $gas = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ELEKTRO')]
        #[Description('Electric heating available')]
        protected ?bool $electric = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ALTERNATIV')]
        #[Description('Alternative value')]
        protected ?bool $alternative = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SOLAR')]
        #[Description('Solar energy as heating energy source')]
        protected ?bool $solar = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERDWAERME')]
        #[Description('Geothermal energy as heating energy source')]
        protected ?bool $geothermal = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LUFTWP')]
        #[Description('Air heat pump as heating system available')]
        protected ?bool $airHeatPump = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERN')]
        #[Description('Remote location of the property')]
        protected ?bool $remote = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BLOCK')]
        #[Description('Block heating available')]
        protected ?bool $block = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WASSER-ELEKTRO')]
        #[Description('Electric water heating')]
        protected ?bool $waterElectric = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PELLET')]
        #[Description('Wood pellets as heating energy source')]
        protected ?bool $pellet = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KOHLE')]
        #[Description('Coal as heating energy source')]
        protected ?bool $coal = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HOLZ')]
        #[Description('Wood as heating energy source')]
        protected ?bool $wood = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FLUESSIGGAS')]
        #[Description('Liquid gas as heating energy source')]
        protected ?bool $liquidGas = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERDGAS_LEICHT')]
        #[Description('Light natural gas as heating energy source')]
        protected ?bool $lightNaturalGas = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERDGAS_SCHWER')]
        #[Description('Heavy natural gas as heating energy source')]
        protected ?bool $heavyNaturalGas = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERNWAERME_DAMPF')]
        #[Description('District heating (steam) as heating energy source')]
        protected ?bool $districtHeatingVapor = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NAHWAERME')]
        #[Description('Local (floor-by-floor) heating available')]
        protected ?bool $localHeating = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WAERMELIEFERUNG')]
        #[Description('Heat supply type of the property')]
        protected ?bool $heatSupply = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BIOENERGIE')]
        #[Description('Bio energy as heating energy source')]
        protected ?bool $bioEnergy = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WINDENERGIE')]
        #[Description('Wind energy as heating energy source')]
        protected ?bool $windEnergy = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WASSERENERGIE')]
        #[Description('Water energy as heating energy source')]
        protected ?bool $waterEnergy = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('UMWELTWAERME')]
        #[Description('Environmental heat as heating energy source')]
        protected ?bool $environmentalHeat = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_FOSSIL')]
        #[Description('Combined heat and power with fossil fuel')]
        protected ?bool $chpFossil = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_ERNEUERBAR')]
        #[Description('Combined heat and power with renewable fuel')]
        protected ?bool $chpRenewable = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_REGENERATIV')]
        #[Description('Combined heat and power with regenerative fuel')]
        protected ?bool $chpRegenerative = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_BIO')]
        #[Description('Combined heat and power with bio fuel')]
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
