<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektart
 * Objektarten
 *
 * @description Immobilientyp mit Untertyp-Angabe
 */
#[XmlRoot(name: 'objektart')]
class Objektart
{
    public function __construct(
        /** @description Zimmeranzahl der Immobilie */
        #[XmlList(entry: 'zimmer', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Zimmer>')]
        #[SkipWhenEmpty]
        #[SerializedName('zimmer')]
        protected array $zimmer = [],
        /** @description Wohnungsobjekt */
        #[XmlList(entry: 'wohnung', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Wohnung>')]
        #[SkipWhenEmpty]
        #[SerializedName('wohnung')]
        protected array $wohnung = [],
        /** @description Hausobjekt */
        #[XmlList(entry: 'haus', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Haus>')]
        #[SkipWhenEmpty]
        #[SerializedName('haus')]
        protected array $haus = [],
        /** @description Grundstücksobjekt */
        #[XmlList(entry: 'grundstueck', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Grundstueck>')]
        #[SkipWhenEmpty]
        #[SerializedName('grundstueck')]
        protected array $grundstueck = [],
        /** @description Büro- oder Praxisobjekt */
        #[XmlList(entry: 'buero_praxen', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\BueroPraxen>')]
        #[SkipWhenEmpty]
        #[SerializedName('buero_praxen')]
        protected array $bueroPraxen = [],
        /** @description Einzelhandelsobjekt */
        #[XmlList(entry: 'einzelhandel', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Einzelhandel>')]
        #[SkipWhenEmpty]
        #[SerializedName('einzelhandel')]
        protected array $einzelhandel = [],
        /** @description Gastronomie- oder Beherbergungsobjekt */
        #[XmlList(entry: 'gastgewerbe', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Gastgewerbe>')]
        #[SkipWhenEmpty]
        #[SerializedName('gastgewerbe')]
        protected array $gastgewerbe = [],
        /** @description Hallen-, Lager- oder Produktionsobjekt */
        #[XmlList(entry: 'hallen_lager_prod', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\HallenLagerProd>')]
        #[SkipWhenEmpty]
        #[SerializedName('hallen_lager_prod')]
        protected array $hallenLagerProd = [],
        /** @description Land- und forstwirtschaftliches Objekt */
        #[XmlList(entry: 'land_und_forstwirtschaft', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\LandUndForstwirtschaft>')]
        #[SkipWhenEmpty]
        #[SerializedName('land_und_forstwirtschaft')]
        protected array $landUndForstwirtschaft = [],
        /** @description Stellplatz oder Parkfläche */
        #[XmlList(entry: 'parken', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Parken>')]
        #[SkipWhenEmpty]
        #[SerializedName('parken')]
        protected array $parken = [],
        /** @description Sonstige Angabe */
        #[XmlList(entry: 'sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Sonstige>')]
        #[SkipWhenEmpty]
        #[SerializedName('sonstige')]
        protected array $sonstige = [],
        /** @description Gewerbliches Freizeitobjekt */
        #[XmlList(entry: 'freizeitimmobilie_gewerblich', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\FreizeitimmobilieGewerblich>')]
        #[SkipWhenEmpty]
        #[SerializedName('freizeitimmobilie_gewerblich')]
        protected array $freizeitimmobilieGewerblich = [],
        /** @description Mehrfamilienhaus als Anlageobjekt */
        #[XmlList(entry: 'zinshaus_renditeobjekt', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\ZinshausRenditeobjekt>')]
        #[SkipWhenEmpty]
        #[SerializedName('zinshaus_renditeobjekt')]
        protected array $zinshausRenditeobjekt = [],
        /** @description Ergänzende Typangabe zur Immobilie */
        #[XmlList(entry: 'objektart_zusatz', inline: true)]
        #[Type('array<string>')]
        #[SkipWhenEmpty]
        #[SerializedName('objektart_zusatz')]
        protected array $objektartZusatz = []
    ) {}

    /**
     * Returns array of array
     */
    public function getZimmer(): array
    {
        return $this->zimmer;
    }

    public function setZimmer(array $zimmer): Objektart
    {
        $this->zimmer = $zimmer;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getWohnung(): array
    {
        return $this->wohnung;
    }

    public function setWohnung(array $wohnung): Objektart
    {
        $this->wohnung = $wohnung;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHaus(): array
    {
        return $this->haus;
    }

    public function setHaus(array $haus): Objektart
    {
        $this->haus = $haus;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getGrundstueck(): array
    {
        return $this->grundstueck;
    }

    public function setGrundstueck(array $grundstueck): Objektart
    {
        $this->grundstueck = $grundstueck;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getBueroPraxen(): array
    {
        return $this->bueroPraxen;
    }

    public function setBueroPraxen(array $bueroPraxen): Objektart
    {
        $this->bueroPraxen = $bueroPraxen;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEinzelhandel(): array
    {
        return $this->einzelhandel;
    }

    public function setEinzelhandel(array $einzelhandel): Objektart
    {
        $this->einzelhandel = $einzelhandel;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getGastgewerbe(): array
    {
        return $this->gastgewerbe;
    }

    public function setGastgewerbe(array $gastgewerbe): Objektart
    {
        $this->gastgewerbe = $gastgewerbe;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getHallenLagerProd(): array
    {
        return $this->hallenLagerProd;
    }

    public function setHallenLagerProd(array $hallenLagerProd): Objektart
    {
        $this->hallenLagerProd = $hallenLagerProd;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getLandUndForstwirtschaft(): array
    {
        return $this->landUndForstwirtschaft;
    }

    public function setLandUndForstwirtschaft(array $landUndForstwirtschaft): Objektart
    {
        $this->landUndForstwirtschaft = $landUndForstwirtschaft;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getParken(): array
    {
        return $this->parken;
    }

    public function setParken(array $parken): Objektart
    {
        $this->parken = $parken;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getSonstige(): array
    {
        return $this->sonstige;
    }

    public function setSonstige(array $sonstige): Objektart
    {
        $this->sonstige = $sonstige;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getFreizeitimmobilieGewerblich(): array
    {
        return $this->freizeitimmobilieGewerblich;
    }

    public function setFreizeitimmobilieGewerblich(array $freizeitimmobilieGewerblich): Objektart
    {
        $this->freizeitimmobilieGewerblich = $freizeitimmobilieGewerblich;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getZinshausRenditeobjekt(): array
    {
        return $this->zinshausRenditeobjekt;
    }

    public function setZinshausRenditeobjekt(array $zinshausRenditeobjekt): Objektart
    {
        $this->zinshausRenditeobjekt = $zinshausRenditeobjekt;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getObjektartZusatz(): array
    {
        return $this->objektartZusatz;
    }

    public function setObjektartZusatz(array $objektartZusatz): Objektart
    {
        $this->objektartZusatz = $objektartZusatz;

        return $this;
    }
}
