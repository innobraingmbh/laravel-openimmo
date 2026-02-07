<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geo
 */
#[XmlRoot(name: 'geo')]
class Geo
{
    public function __construct(
        #[Type('string')]
        #[SerializedName('plz')]
        protected ?string $plz = null,
        #[Type('string')]
        #[SerializedName('ort')]
        protected ?string $ort = null,
        #[Type(Geokoordinaten::class)]
        #[SerializedName('geokoordinaten')]
        protected ?Geokoordinaten $geokoordinaten = null,
        #[Type('string')]
        #[SerializedName('strasse')]
        protected ?string $strasse = null,
        #[Type('string')]
        #[SerializedName('hausnummer')]
        protected ?string $hausnummer = null,
        #[Type('string')]
        #[SerializedName('bundesland')]
        protected ?string $bundesland = null,
        #[Type(Land::class)]
        #[SerializedName('land')]
        protected ?Land $land = null,
        #[Type('string')]
        #[SerializedName('gemeindecode')]
        protected ?string $gemeindecode = null,
        #[Type('string')]
        #[SerializedName('flur')]
        protected ?string $flur = null,
        #[Type('string')]
        #[SerializedName('flurstueck')]
        protected ?string $flurstueck = null,
        #[Type('string')]
        #[SerializedName('gemarkung')]
        protected ?string $gemarkung = null,
        /**
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[SerializedName('etage')]
        protected ?int $etage = null,
        /**
         * Minimum value (inclusive): -2147483648
         * Maximum value (inclusive): 2147483647
         */
        #[Type('int')]
        #[SerializedName('anzahl_etagen')]
        protected ?int $anzahlEtagen = null,
        #[Type(LageImBau::class)]
        #[SerializedName('lage_im_bau')]
        protected ?LageImBau $lageImBau = null,
        #[Type('string')]
        #[SerializedName('wohnungsnr')]
        protected ?string $wohnungsnr = null,
        #[Type(LageGebiet::class)]
        #[SerializedName('lage_gebiet')]
        protected ?LageGebiet $lageGebiet = null,
        #[Type('string')]
        #[SerializedName('regionaler_zusatz')]
        protected ?string $regionalerZusatz = null,
        #[Type('bool')]
        #[SerializedName('karten_makro')]
        protected ?bool $kartenMakro = null,
        #[Type('bool')]
        #[SerializedName('karten_mikro')]
        protected ?bool $kartenMikro = null,
        #[Type('bool')]
        #[SerializedName('virtuelletour')]
        protected ?bool $virtuelletour = null,
        #[Type('bool')]
        #[SerializedName('luftbildern')]
        protected ?bool $luftbildern = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): Geo
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): Geo
    {
        $this->ort = $ort;

        return $this;
    }

    public function getGeokoordinaten(): ?Geokoordinaten
    {
        return $this->geokoordinaten;
    }

    public function setGeokoordinaten(?Geokoordinaten $geokoordinaten): Geo
    {
        $this->geokoordinaten = $geokoordinaten;

        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): Geo
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getHausnummer(): ?string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(?string $hausnummer): Geo
    {
        $this->hausnummer = $hausnummer;

        return $this;
    }

    public function getBundesland(): ?string
    {
        return $this->bundesland;
    }

    public function setBundesland(?string $bundesland): Geo
    {
        $this->bundesland = $bundesland;

        return $this;
    }

    public function getLand(): ?Land
    {
        return $this->land;
    }

    public function setLand(?Land $land): Geo
    {
        $this->land = $land;

        return $this;
    }

    public function getGemeindecode(): ?string
    {
        return $this->gemeindecode;
    }

    public function setGemeindecode(?string $gemeindecode): Geo
    {
        $this->gemeindecode = $gemeindecode;

        return $this;
    }

    public function getFlur(): ?string
    {
        return $this->flur;
    }

    public function setFlur(?string $flur): Geo
    {
        $this->flur = $flur;

        return $this;
    }

    public function getFlurstueck(): ?string
    {
        return $this->flurstueck;
    }

    public function setFlurstueck(?string $flurstueck): Geo
    {
        $this->flurstueck = $flurstueck;

        return $this;
    }

    public function getGemarkung(): ?string
    {
        return $this->gemarkung;
    }

    public function setGemarkung(?string $gemarkung): Geo
    {
        $this->gemarkung = $gemarkung;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(?int $etage): Geo
    {
        $this->etage = $etage;

        return $this;
    }

    public function getAnzahlEtagen(): ?int
    {
        return $this->anzahlEtagen;
    }

    public function setAnzahlEtagen(?int $anzahlEtagen): Geo
    {
        $this->anzahlEtagen = $anzahlEtagen;

        return $this;
    }

    public function getLageImBau(): ?LageImBau
    {
        return $this->lageImBau;
    }

    public function setLageImBau(?LageImBau $lageImBau): Geo
    {
        $this->lageImBau = $lageImBau;

        return $this;
    }

    public function getWohnungsnr(): ?string
    {
        return $this->wohnungsnr;
    }

    public function setWohnungsnr(?string $wohnungsnr): Geo
    {
        $this->wohnungsnr = $wohnungsnr;

        return $this;
    }

    public function getLageGebiet(): ?LageGebiet
    {
        return $this->lageGebiet;
    }

    public function setLageGebiet(?LageGebiet $lageGebiet): Geo
    {
        $this->lageGebiet = $lageGebiet;

        return $this;
    }

    public function getRegionalerZusatz(): ?string
    {
        return $this->regionalerZusatz;
    }

    public function setRegionalerZusatz(?string $regionalerZusatz): Geo
    {
        $this->regionalerZusatz = $regionalerZusatz;

        return $this;
    }

    public function getKartenMakro(): ?bool
    {
        return $this->kartenMakro;
    }

    public function setKartenMakro(?bool $kartenMakro): Geo
    {
        $this->kartenMakro = $kartenMakro;

        return $this;
    }

    public function getKartenMikro(): ?bool
    {
        return $this->kartenMikro;
    }

    public function setKartenMikro(?bool $kartenMikro): Geo
    {
        $this->kartenMikro = $kartenMikro;

        return $this;
    }

    public function getVirtuelletour(): ?bool
    {
        return $this->virtuelletour;
    }

    public function setVirtuelletour(?bool $virtuelletour): Geo
    {
        $this->virtuelletour = $virtuelletour;

        return $this;
    }

    public function getLuftbildern(): ?bool
    {
        return $this->luftbildern;
    }

    public function setLuftbildern(?bool $luftbildern): Geo
    {
        $this->luftbildern = $luftbildern;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Geo
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Geo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Geo
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
