<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Boden
 * Welche Eigenschaft besitzt der Bodenbelag, Optionen kombinierbar
 *
 * @description Bodenbelagsangaben der Immobilie
 */
#[XmlRoot(name: 'boden')]
class Boden
{
    public function __construct(
        /**
         * optional
         *
         * @description Fliesen als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FLIESEN')]
        protected ?bool $fliesen = null,
        /**
         * optional
         *
         * @description Steinboden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('STEIN')]
        protected ?bool $stein = null,
        /**
         * optional
         *
         * @description Teppichboden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TEPPICH')]
        protected ?bool $teppich = null,
        /**
         * optional
         *
         * @description Parkett als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PARKETT')]
        protected ?bool $parkett = null,
        /**
         * optional
         *
         * @description Fertigparkett als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERTIGPARKETT')]
        protected ?bool $fertigparkett = null,
        /**
         * optional
         *
         * @description Laminat als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LAMINAT')]
        protected ?bool $laminat = null,
        /**
         * optional
         *
         * @description Dielenböden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DIELEN')]
        protected ?bool $dielen = null,
        /**
         * optional
         *
         * @description Kunststoffboden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KUNSTSTOFF')]
        protected ?bool $kunststoff = null,
        /**
         * optional
         *
         * @description Estrich als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ESTRICH')]
        protected ?bool $estrich = null,
        /**
         * optional
         *
         * @description Doppelboden vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('DOPPELBODEN')]
        protected ?bool $doppelboden = null,
        /**
         * optional
         *
         * @description Linoleum als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LINOLEUM')]
        protected ?bool $linoleum = null,
        /**
         * optional
         *
         * @description Marmorboden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MARMOR')]
        protected ?bool $marmor = null,
        /**
         * optional
         *
         * @description Terrakottaboden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('TERRAKOTTA')]
        protected ?bool $terrakotta = null,
        /**
         * optional
         *
         * @description Granitboden als Bodenbelag
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GRANIT')]
        protected ?bool $granit = null
    ) {}

    public function getFliesen(): ?bool
    {
        return $this->fliesen;
    }

    public function setFliesen(?bool $fliesen): Boden
    {
        $this->fliesen = $fliesen;

        return $this;
    }

    public function getStein(): ?bool
    {
        return $this->stein;
    }

    public function setStein(?bool $stein): Boden
    {
        $this->stein = $stein;

        return $this;
    }

    public function getTeppich(): ?bool
    {
        return $this->teppich;
    }

    public function setTeppich(?bool $teppich): Boden
    {
        $this->teppich = $teppich;

        return $this;
    }

    public function getParkett(): ?bool
    {
        return $this->parkett;
    }

    public function setParkett(?bool $parkett): Boden
    {
        $this->parkett = $parkett;

        return $this;
    }

    public function getFertigparkett(): ?bool
    {
        return $this->fertigparkett;
    }

    public function setFertigparkett(?bool $fertigparkett): Boden
    {
        $this->fertigparkett = $fertigparkett;

        return $this;
    }

    public function getLaminat(): ?bool
    {
        return $this->laminat;
    }

    public function setLaminat(?bool $laminat): Boden
    {
        $this->laminat = $laminat;

        return $this;
    }

    public function getDielen(): ?bool
    {
        return $this->dielen;
    }

    public function setDielen(?bool $dielen): Boden
    {
        $this->dielen = $dielen;

        return $this;
    }

    public function getKunststoff(): ?bool
    {
        return $this->kunststoff;
    }

    public function setKunststoff(?bool $kunststoff): Boden
    {
        $this->kunststoff = $kunststoff;

        return $this;
    }

    public function getEstrich(): ?bool
    {
        return $this->estrich;
    }

    public function setEstrich(?bool $estrich): Boden
    {
        $this->estrich = $estrich;

        return $this;
    }

    public function getDoppelboden(): ?bool
    {
        return $this->doppelboden;
    }

    public function setDoppelboden(?bool $doppelboden): Boden
    {
        $this->doppelboden = $doppelboden;

        return $this;
    }

    public function getLinoleum(): ?bool
    {
        return $this->linoleum;
    }

    public function setLinoleum(?bool $linoleum): Boden
    {
        $this->linoleum = $linoleum;

        return $this;
    }

    public function getMarmor(): ?bool
    {
        return $this->marmor;
    }

    public function setMarmor(?bool $marmor): Boden
    {
        $this->marmor = $marmor;

        return $this;
    }

    public function getTerrakotta(): ?bool
    {
        return $this->terrakotta;
    }

    public function setTerrakotta(?bool $terrakotta): Boden
    {
        $this->terrakotta = $terrakotta;

        return $this;
    }

    public function getGranit(): ?bool
    {
        return $this->granit;
    }

    public function setGranit(?bool $granit): Boden
    {
        $this->granit = $granit;

        return $this;
    }
}
