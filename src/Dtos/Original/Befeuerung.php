<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Befeuerung
 * Welche Befeuerungsarten sind vorhanden, Optionen kombinierbar
 *
 * @description Befeuerungsart des Heizsystems (Energieträger)
 */
#[XmlRoot(name: 'befeuerung')]
class Befeuerung
{
    public function __construct(
        /**
         * optional
         *
         * @description Öl als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OEL')]
        protected ?bool $oel = null,
        /**
         * optional
         *
         * @description Gas als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GAS')]
        protected ?bool $gas = null,
        /**
         * optional
         *
         * @description Elektrische Heizung vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ELEKTRO')]
        protected ?bool $elektro = null,
        /**
         * optional
         *
         * @description Alternative Angabe
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ALTERNATIV')]
        protected ?bool $alternativ = null,
        /**
         * optional
         *
         * @description Solarenergie als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SOLAR')]
        protected ?bool $solar = null,
        /**
         * optional
         *
         * @description Geothermie als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERDWAERME')]
        protected ?bool $erdwaerme = null,
        /**
         * optional
         *
         * @description Luftwärmepumpe als Heizsystem vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LUFTWP')]
        protected ?bool $luftwp = null,
        /**
         * optional
         *
         * @description Abgelegene Lage der Immobilie
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERN')]
        protected ?bool $fern = null,
        /**
         * optional
         *
         * @description Blockheizung vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BLOCK')]
        protected ?bool $block = null,
        /**
         * optional
         *
         * @description Wassererwärmung elektrisch
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WASSER-ELEKTRO')]
        protected ?bool $wasserElektro = null,
        /**
         * optional
         *
         * @description Holzpellets als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PELLET')]
        protected ?bool $pellet = null,
        /**
         * optional
         *
         * @description Kohle als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KOHLE')]
        protected ?bool $kohle = null,
        /**
         * optional
         *
         * @description Holz als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('HOLZ')]
        protected ?bool $holz = null,
        /**
         * optional
         *
         * @description Flüssiggas als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FLUESSIGGAS')]
        protected ?bool $fluessiggas = null,
        /**
         * optional
         *
         * @description Leichtes Erdgas als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERDGAS_LEICHT')]
        protected ?bool $erdgasLeicht = null,
        /**
         * optional
         *
         * @description Schweres Erdgas als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERDGAS_SCHWER')]
        protected ?bool $erdgasSchwer = null,
        /**
         * optional
         *
         * @description Fernwärme (Dampf) als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('FERNWAERME_DAMPF')]
        protected ?bool $fernwaermeDampf = null,
        /**
         * optional
         *
         * @description Einzelraumheizung (Etagenheizung) vorhanden
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('NAHWAERME')]
        protected ?bool $nahwaerme = null,
        /**
         * optional
         *
         * @description Wärmeversorgungsart der Immobilie
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WAERMELIEFERUNG')]
        protected ?bool $waermelieferung = null,
        /**
         * optional
         *
         * @description Bioenergie als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BIOENERGIE')]
        protected ?bool $bioenergie = null,
        /**
         * optional
         *
         * @description Windenergie als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WINDENERGIE')]
        protected ?bool $windenergie = null,
        /**
         * optional
         *
         * @description Wasserenergie als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WASSERENERGIE')]
        protected ?bool $wasserenergie = null,
        /**
         * optional
         *
         * @description Umweltwärme als Heizenergiequelle
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('UMWELTWAERME')]
        protected ?bool $umweltwaerme = null,
        /**
         * optional
         *
         * @description Blockheizkraftwerk mit fossilem Brennstoff
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_FOSSIL')]
        protected ?bool $kwkFossil = null,
        /**
         * optional
         *
         * @description Blockheizkraftwerk mit erneuerbarem Brennstoff
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_ERNEUERBAR')]
        protected ?bool $kwkErneuerbar = null,
        /**
         * optional
         *
         * @description Blockheizkraftwerk mit regenerativem Brennstoff
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_REGENERATIV')]
        protected ?bool $kwkRegenerativ = null,
        /**
         * optional
         *
         * @description Blockheizkraftwerk mit Bio-Brennstoff
         */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KWK_BIO')]
        protected ?bool $kwkBio = null
    ) {}

    public function getOel(): ?bool
    {
        return $this->oel;
    }

    public function setOel(?bool $oel): Befeuerung
    {
        $this->oel = $oel;

        return $this;
    }

    public function getGas(): ?bool
    {
        return $this->gas;
    }

    public function setGas(?bool $gas): Befeuerung
    {
        $this->gas = $gas;

        return $this;
    }

    public function getElektro(): ?bool
    {
        return $this->elektro;
    }

    public function setElektro(?bool $elektro): Befeuerung
    {
        $this->elektro = $elektro;

        return $this;
    }

    public function getAlternativ(): ?bool
    {
        return $this->alternativ;
    }

    public function setAlternativ(?bool $alternativ): Befeuerung
    {
        $this->alternativ = $alternativ;

        return $this;
    }

    public function getSolar(): ?bool
    {
        return $this->solar;
    }

    public function setSolar(?bool $solar): Befeuerung
    {
        $this->solar = $solar;

        return $this;
    }

    public function getErdwaerme(): ?bool
    {
        return $this->erdwaerme;
    }

    public function setErdwaerme(?bool $erdwaerme): Befeuerung
    {
        $this->erdwaerme = $erdwaerme;

        return $this;
    }

    public function getLuftwp(): ?bool
    {
        return $this->luftwp;
    }

    public function setLuftwp(?bool $luftwp): Befeuerung
    {
        $this->luftwp = $luftwp;

        return $this;
    }

    public function getFern(): ?bool
    {
        return $this->fern;
    }

    public function setFern(?bool $fern): Befeuerung
    {
        $this->fern = $fern;

        return $this;
    }

    public function getBlock(): ?bool
    {
        return $this->block;
    }

    public function setBlock(?bool $block): Befeuerung
    {
        $this->block = $block;

        return $this;
    }

    public function getWasserElektro(): ?bool
    {
        return $this->wasserElektro;
    }

    public function setWasserElektro(?bool $wasserElektro): Befeuerung
    {
        $this->wasserElektro = $wasserElektro;

        return $this;
    }

    public function getPellet(): ?bool
    {
        return $this->pellet;
    }

    public function setPellet(?bool $pellet): Befeuerung
    {
        $this->pellet = $pellet;

        return $this;
    }

    public function getKohle(): ?bool
    {
        return $this->kohle;
    }

    public function setKohle(?bool $kohle): Befeuerung
    {
        $this->kohle = $kohle;

        return $this;
    }

    public function getHolz(): ?bool
    {
        return $this->holz;
    }

    public function setHolz(?bool $holz): Befeuerung
    {
        $this->holz = $holz;

        return $this;
    }

    public function getFluessiggas(): ?bool
    {
        return $this->fluessiggas;
    }

    public function setFluessiggas(?bool $fluessiggas): Befeuerung
    {
        $this->fluessiggas = $fluessiggas;

        return $this;
    }

    public function getErdgasLeicht(): ?bool
    {
        return $this->erdgasLeicht;
    }

    public function setErdgasLeicht(?bool $erdgasLeicht): Befeuerung
    {
        $this->erdgasLeicht = $erdgasLeicht;

        return $this;
    }

    public function getErdgasSchwer(): ?bool
    {
        return $this->erdgasSchwer;
    }

    public function setErdgasSchwer(?bool $erdgasSchwer): Befeuerung
    {
        $this->erdgasSchwer = $erdgasSchwer;

        return $this;
    }

    public function getFernwaermeDampf(): ?bool
    {
        return $this->fernwaermeDampf;
    }

    public function setFernwaermeDampf(?bool $fernwaermeDampf): Befeuerung
    {
        $this->fernwaermeDampf = $fernwaermeDampf;

        return $this;
    }

    public function getNahwaerme(): ?bool
    {
        return $this->nahwaerme;
    }

    public function setNahwaerme(?bool $nahwaerme): Befeuerung
    {
        $this->nahwaerme = $nahwaerme;

        return $this;
    }

    public function getWaermelieferung(): ?bool
    {
        return $this->waermelieferung;
    }

    public function setWaermelieferung(?bool $waermelieferung): Befeuerung
    {
        $this->waermelieferung = $waermelieferung;

        return $this;
    }

    public function getBioenergie(): ?bool
    {
        return $this->bioenergie;
    }

    public function setBioenergie(?bool $bioenergie): Befeuerung
    {
        $this->bioenergie = $bioenergie;

        return $this;
    }

    public function getWindenergie(): ?bool
    {
        return $this->windenergie;
    }

    public function setWindenergie(?bool $windenergie): Befeuerung
    {
        $this->windenergie = $windenergie;

        return $this;
    }

    public function getWasserenergie(): ?bool
    {
        return $this->wasserenergie;
    }

    public function setWasserenergie(?bool $wasserenergie): Befeuerung
    {
        $this->wasserenergie = $wasserenergie;

        return $this;
    }

    public function getUmweltwaerme(): ?bool
    {
        return $this->umweltwaerme;
    }

    public function setUmweltwaerme(?bool $umweltwaerme): Befeuerung
    {
        $this->umweltwaerme = $umweltwaerme;

        return $this;
    }

    public function getKwkFossil(): ?bool
    {
        return $this->kwkFossil;
    }

    public function setKwkFossil(?bool $kwkFossil): Befeuerung
    {
        $this->kwkFossil = $kwkFossil;

        return $this;
    }

    public function getKwkErneuerbar(): ?bool
    {
        return $this->kwkErneuerbar;
    }

    public function setKwkErneuerbar(?bool $kwkErneuerbar): Befeuerung
    {
        $this->kwkErneuerbar = $kwkErneuerbar;

        return $this;
    }

    public function getKwkRegenerativ(): ?bool
    {
        return $this->kwkRegenerativ;
    }

    public function setKwkRegenerativ(?bool $kwkRegenerativ): Befeuerung
    {
        $this->kwkRegenerativ = $kwkRegenerativ;

        return $this;
    }

    public function getKwkBio(): ?bool
    {
        return $this->kwkBio;
    }

    public function setKwkBio(?bool $kwkBio): Befeuerung
    {
        $this->kwkBio = $kwkBio;

        return $this;
    }
}
