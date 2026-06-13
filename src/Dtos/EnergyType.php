<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class EnergyType
 *
 * @description Energy efficiency type of the property (e.g. low-energy, passive house)
 */
#[XmlRoot(name: 'energietyp')]
class EnergyType
{
    public function __construct(
        /**
         * optional
         *
         * @description Passive house standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PASSIVHAUS')]
        protected ?bool $passiveHouse = null,
        /**
         * optional
         *
         * @description Low-energy house standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NIEDRIGENERGIE')]
        protected ?bool $lowEnergy = null,
        /**
         * optional
         *
         * @description New building standard of the property
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NEUBAUSTANDARD')]
        protected ?bool $newBuildingStandard = null,
        /**
         * optional
         *
         * @description KfW-40 standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KFW40')]
        protected ?bool $kfw40 = null,
        /**
         * optional
         *
         * @description KfW-60 standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KFW60')]
        protected ?bool $kfw60 = null,
        /**
         * optional
         *
         * @description KfW-55 standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KFW55')]
        protected ?bool $kfw55 = null,
        /**
         * optional
         *
         * @description KfW-70 standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KFW70')]
        protected ?bool $kfw70 = null,
        /**
         * optional
         *
         * @description MinEnergie construction standard fulfilled
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MINERGIEBAUWEISE')]
        protected ?bool $minEnergieConstruction = null,
        /**
         * optional
         *
         * @description MinEnergie certification available
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MINERGIE_ZERTIFIZIERT')]
        protected ?bool $minEnergieCertified = null
    ) {}

    public function getPassiveHouse(): ?bool
    {
        return $this->passiveHouse;
    }

    public function setPassiveHouse(?bool $passiveHouse): EnergyType
    {
        $this->passiveHouse = $passiveHouse;

        return $this;
    }

    public function getLowEnergy(): ?bool
    {
        return $this->lowEnergy;
    }

    public function setLowEnergy(?bool $lowEnergy): EnergyType
    {
        $this->lowEnergy = $lowEnergy;

        return $this;
    }

    public function getNewBuildingStandard(): ?bool
    {
        return $this->newBuildingStandard;
    }

    public function setNewBuildingStandard(?bool $newBuildingStandard): EnergyType
    {
        $this->newBuildingStandard = $newBuildingStandard;

        return $this;
    }

    public function getKfw40(): ?bool
    {
        return $this->kfw40;
    }

    public function setKfw40(?bool $kfw40): EnergyType
    {
        $this->kfw40 = $kfw40;

        return $this;
    }

    public function getKfw60(): ?bool
    {
        return $this->kfw60;
    }

    public function setKfw60(?bool $kfw60): EnergyType
    {
        $this->kfw60 = $kfw60;

        return $this;
    }

    public function getKfw55(): ?bool
    {
        return $this->kfw55;
    }

    public function setKfw55(?bool $kfw55): EnergyType
    {
        $this->kfw55 = $kfw55;

        return $this;
    }

    public function getKfw70(): ?bool
    {
        return $this->kfw70;
    }

    public function setKfw70(?bool $kfw70): EnergyType
    {
        $this->kfw70 = $kfw70;

        return $this;
    }

    public function getMinEnergieConstruction(): ?bool
    {
        return $this->minEnergieConstruction;
    }

    public function setMinEnergieConstruction(?bool $minEnergieConstruction): EnergyType
    {
        $this->minEnergieConstruction = $minEnergieConstruction;

        return $this;
    }

    public function getMinEnergieCertified(): ?bool
    {
        return $this->minEnergieCertified;
    }

    public function setMinEnergieCertified(?bool $minEnergieCertified): EnergyType
    {
        $this->minEnergieCertified = $minEnergieCertified;

        return $this;
    }
}
