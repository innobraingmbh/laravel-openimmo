<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Flaechen
 */
#[XmlRoot(name: 'flaechen')]
class Flaechen
{
    public function __construct(
        #[Type('float')]
        #[SerializedName('wohnflaeche')]
        protected ?float $wohnflaeche = null,
        #[Type('float')]
        #[SerializedName('nutzflaeche')]
        protected ?float $nutzflaeche = null,
        #[Type('float')]
        #[SerializedName('gesamtflaeche')]
        protected ?float $gesamtflaeche = null,
        #[Type('float')]
        #[SerializedName('ladenflaeche')]
        protected ?float $ladenflaeche = null,
        #[Type('float')]
        #[SerializedName('lagerflaeche')]
        protected ?float $lagerflaeche = null,
        #[Type('float')]
        #[SerializedName('verkaufsflaeche')]
        protected ?float $verkaufsflaeche = null,
        #[Type('float')]
        #[SerializedName('freiflaeche')]
        protected ?float $freiflaeche = null,
        #[Type('float')]
        #[SerializedName('bueroflaeche')]
        protected ?float $bueroflaeche = null,
        #[Type('float')]
        #[SerializedName('bueroteilflaeche')]
        protected ?float $bueroteilflaeche = null,
        #[Type('float')]
        #[SerializedName('fensterfront')]
        protected ?float $fensterfront = null,
        #[Type('float')]
        #[SerializedName('verwaltungsflaeche')]
        protected ?float $verwaltungsflaeche = null,
        #[Type('float')]
        #[SerializedName('gastroflaeche')]
        protected ?float $gastroflaeche = null,
        #[Type('string')]
        #[SerializedName('grz')]
        protected ?string $grz = null,
        #[Type('string')]
        #[SerializedName('gfz')]
        protected ?string $gfz = null,
        #[Type('string')]
        #[SerializedName('bmz')]
        protected ?string $bmz = null,
        #[Type('string')]
        #[SerializedName('bgf')]
        protected ?string $bgf = null,
        #[Type('float')]
        #[SerializedName('grundstuecksflaeche')]
        protected ?float $grundstuecksflaeche = null,
        #[Type('float')]
        #[SerializedName('sonstflaeche')]
        protected ?float $sonstflaeche = null,
        #[Type('float')]
        #[SerializedName('anzahl_zimmer')]
        protected ?float $anzahlZimmer = null,
        #[Type('float')]
        #[SerializedName('anzahl_schlafzimmer')]
        protected ?float $anzahlSchlafzimmer = null,
        #[Type('float')]
        #[SerializedName('anzahl_badezimmer')]
        protected ?float $anzahlBadezimmer = null,
        #[Type('float')]
        #[SerializedName('anzahl_sep_wc')]
        protected ?float $anzahlSepWc = null,
        #[Type('float')]
        #[SerializedName('anzahl_balkone')]
        protected ?float $anzahlBalkone = null,
        #[Type('float')]
        #[SerializedName('anzahl_terrassen')]
        protected ?float $anzahlTerrassen = null,
        #[Type('float')]
        #[SerializedName('anzahl_logia')]
        protected ?float $anzahlLogia = null,
        #[Type('float')]
        #[SerializedName('balkon_terrasse_flaeche')]
        protected ?float $balkonTerrasseFlaeche = null,
        #[Type('float')]
        #[SerializedName('anzahl_wohn_schlafzimmer')]
        protected ?float $anzahlWohnSchlafzimmer = null,
        #[Type('float')]
        #[SerializedName('gartenflaeche')]
        protected ?float $gartenflaeche = null,
        #[Type('float')]
        #[SerializedName('kellerflaeche')]
        protected ?float $kellerflaeche = null,
        #[Type('float')]
        #[SerializedName('fensterfront_qm')]
        protected ?float $fensterfrontQm = null,
        #[Type('float')]
        #[SerializedName('grundstuecksfront')]
        protected ?float $grundstuecksfront = null,
        #[Type('float')]
        #[SerializedName('dachbodenflaeche')]
        protected ?float $dachbodenflaeche = null,
        #[Type('float')]
        #[SerializedName('teilbar_ab')]
        protected ?float $teilbarAb = null,
        #[Type('float')]
        #[SerializedName('beheizbare_flaeche')]
        protected ?float $beheizbareFlaeche = null,
        /** Minimum value (inclusive): 1 */
        #[Type('int')]
        #[SerializedName('anzahl_stellplaetze')]
        protected ?int $anzahlStellplaetze = null,
        #[Type('float')]
        #[SerializedName('plaetze_gastraum')]
        protected ?float $plaetzeGastraum = null,
        #[Type('float')]
        #[SerializedName('anzahl_betten')]
        protected ?float $anzahlBetten = null,
        #[Type('float')]
        #[SerializedName('anzahl_tagungsraeume')]
        protected ?float $anzahlTagungsraeume = null,
        #[Type('float')]
        #[SerializedName('vermietbare_flaeche')]
        protected ?float $vermietbareFlaeche = null,
        #[Type('float')]
        #[SerializedName('anzahl_wohneinheiten')]
        protected ?float $anzahlWohneinheiten = null,
        #[Type('float')]
        #[SerializedName('anzahl_gewerbeeinheiten')]
        protected ?float $anzahlGewerbeeinheiten = null,
        #[Type('bool')]
        #[SerializedName('einliegerwohnung')]
        protected ?bool $einliegerwohnung = null,
        #[Type('float')]
        #[SerializedName('kubatur')]
        protected ?float $kubatur = null,
        #[Type('float')]
        #[SerializedName('ausnuetzungsziffer')]
        protected ?float $ausnuetzungsziffer = null,
        #[Type('float')]
        #[SerializedName('flaechevon')]
        protected ?float $flaechevon = null,
        #[Type('float')]
        #[SerializedName('flaechebis')]
        protected ?float $flaechebis = null,
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

    public function getWohnflaeche(): ?float
    {
        return $this->wohnflaeche;
    }

    public function setWohnflaeche(?float $wohnflaeche): Flaechen
    {
        $this->wohnflaeche = $wohnflaeche;

        return $this;
    }

    public function getNutzflaeche(): ?float
    {
        return $this->nutzflaeche;
    }

    public function setNutzflaeche(?float $nutzflaeche): Flaechen
    {
        $this->nutzflaeche = $nutzflaeche;

        return $this;
    }

    public function getGesamtflaeche(): ?float
    {
        return $this->gesamtflaeche;
    }

    public function setGesamtflaeche(?float $gesamtflaeche): Flaechen
    {
        $this->gesamtflaeche = $gesamtflaeche;

        return $this;
    }

    public function getLadenflaeche(): ?float
    {
        return $this->ladenflaeche;
    }

    public function setLadenflaeche(?float $ladenflaeche): Flaechen
    {
        $this->ladenflaeche = $ladenflaeche;

        return $this;
    }

    public function getLagerflaeche(): ?float
    {
        return $this->lagerflaeche;
    }

    public function setLagerflaeche(?float $lagerflaeche): Flaechen
    {
        $this->lagerflaeche = $lagerflaeche;

        return $this;
    }

    public function getVerkaufsflaeche(): ?float
    {
        return $this->verkaufsflaeche;
    }

    public function setVerkaufsflaeche(?float $verkaufsflaeche): Flaechen
    {
        $this->verkaufsflaeche = $verkaufsflaeche;

        return $this;
    }

    public function getFreiflaeche(): ?float
    {
        return $this->freiflaeche;
    }

    public function setFreiflaeche(?float $freiflaeche): Flaechen
    {
        $this->freiflaeche = $freiflaeche;

        return $this;
    }

    public function getBueroflaeche(): ?float
    {
        return $this->bueroflaeche;
    }

    public function setBueroflaeche(?float $bueroflaeche): Flaechen
    {
        $this->bueroflaeche = $bueroflaeche;

        return $this;
    }

    public function getBueroteilflaeche(): ?float
    {
        return $this->bueroteilflaeche;
    }

    public function setBueroteilflaeche(?float $bueroteilflaeche): Flaechen
    {
        $this->bueroteilflaeche = $bueroteilflaeche;

        return $this;
    }

    public function getFensterfront(): ?float
    {
        return $this->fensterfront;
    }

    public function setFensterfront(?float $fensterfront): Flaechen
    {
        $this->fensterfront = $fensterfront;

        return $this;
    }

    public function getVerwaltungsflaeche(): ?float
    {
        return $this->verwaltungsflaeche;
    }

    public function setVerwaltungsflaeche(?float $verwaltungsflaeche): Flaechen
    {
        $this->verwaltungsflaeche = $verwaltungsflaeche;

        return $this;
    }

    public function getGastroflaeche(): ?float
    {
        return $this->gastroflaeche;
    }

    public function setGastroflaeche(?float $gastroflaeche): Flaechen
    {
        $this->gastroflaeche = $gastroflaeche;

        return $this;
    }

    public function getGrz(): ?string
    {
        return $this->grz;
    }

    public function setGrz(?string $grz): Flaechen
    {
        $this->grz = $grz;

        return $this;
    }

    public function getGfz(): ?string
    {
        return $this->gfz;
    }

    public function setGfz(?string $gfz): Flaechen
    {
        $this->gfz = $gfz;

        return $this;
    }

    public function getBmz(): ?string
    {
        return $this->bmz;
    }

    public function setBmz(?string $bmz): Flaechen
    {
        $this->bmz = $bmz;

        return $this;
    }

    public function getBgf(): ?string
    {
        return $this->bgf;
    }

    public function setBgf(?string $bgf): Flaechen
    {
        $this->bgf = $bgf;

        return $this;
    }

    public function getGrundstuecksflaeche(): ?float
    {
        return $this->grundstuecksflaeche;
    }

    public function setGrundstuecksflaeche(?float $grundstuecksflaeche): Flaechen
    {
        $this->grundstuecksflaeche = $grundstuecksflaeche;

        return $this;
    }

    public function getSonstflaeche(): ?float
    {
        return $this->sonstflaeche;
    }

    public function setSonstflaeche(?float $sonstflaeche): Flaechen
    {
        $this->sonstflaeche = $sonstflaeche;

        return $this;
    }

    public function getAnzahlZimmer(): ?float
    {
        return $this->anzahlZimmer;
    }

    public function setAnzahlZimmer(?float $anzahlZimmer): Flaechen
    {
        $this->anzahlZimmer = $anzahlZimmer;

        return $this;
    }

    public function getAnzahlSchlafzimmer(): ?float
    {
        return $this->anzahlSchlafzimmer;
    }

    public function setAnzahlSchlafzimmer(?float $anzahlSchlafzimmer): Flaechen
    {
        $this->anzahlSchlafzimmer = $anzahlSchlafzimmer;

        return $this;
    }

    public function getAnzahlBadezimmer(): ?float
    {
        return $this->anzahlBadezimmer;
    }

    public function setAnzahlBadezimmer(?float $anzahlBadezimmer): Flaechen
    {
        $this->anzahlBadezimmer = $anzahlBadezimmer;

        return $this;
    }

    public function getAnzahlSepWc(): ?float
    {
        return $this->anzahlSepWc;
    }

    public function setAnzahlSepWc(?float $anzahlSepWc): Flaechen
    {
        $this->anzahlSepWc = $anzahlSepWc;

        return $this;
    }

    public function getAnzahlBalkone(): ?float
    {
        return $this->anzahlBalkone;
    }

    public function setAnzahlBalkone(?float $anzahlBalkone): Flaechen
    {
        $this->anzahlBalkone = $anzahlBalkone;

        return $this;
    }

    public function getAnzahlTerrassen(): ?float
    {
        return $this->anzahlTerrassen;
    }

    public function setAnzahlTerrassen(?float $anzahlTerrassen): Flaechen
    {
        $this->anzahlTerrassen = $anzahlTerrassen;

        return $this;
    }

    public function getAnzahlLogia(): ?float
    {
        return $this->anzahlLogia;
    }

    public function setAnzahlLogia(?float $anzahlLogia): Flaechen
    {
        $this->anzahlLogia = $anzahlLogia;

        return $this;
    }

    public function getBalkonTerrasseFlaeche(): ?float
    {
        return $this->balkonTerrasseFlaeche;
    }

    public function setBalkonTerrasseFlaeche(?float $balkonTerrasseFlaeche): Flaechen
    {
        $this->balkonTerrasseFlaeche = $balkonTerrasseFlaeche;

        return $this;
    }

    public function getAnzahlWohnSchlafzimmer(): ?float
    {
        return $this->anzahlWohnSchlafzimmer;
    }

    public function setAnzahlWohnSchlafzimmer(?float $anzahlWohnSchlafzimmer): Flaechen
    {
        $this->anzahlWohnSchlafzimmer = $anzahlWohnSchlafzimmer;

        return $this;
    }

    public function getGartenflaeche(): ?float
    {
        return $this->gartenflaeche;
    }

    public function setGartenflaeche(?float $gartenflaeche): Flaechen
    {
        $this->gartenflaeche = $gartenflaeche;

        return $this;
    }

    public function getKellerflaeche(): ?float
    {
        return $this->kellerflaeche;
    }

    public function setKellerflaeche(?float $kellerflaeche): Flaechen
    {
        $this->kellerflaeche = $kellerflaeche;

        return $this;
    }

    public function getFensterfrontQm(): ?float
    {
        return $this->fensterfrontQm;
    }

    public function setFensterfrontQm(?float $fensterfrontQm): Flaechen
    {
        $this->fensterfrontQm = $fensterfrontQm;

        return $this;
    }

    public function getGrundstuecksfront(): ?float
    {
        return $this->grundstuecksfront;
    }

    public function setGrundstuecksfront(?float $grundstuecksfront): Flaechen
    {
        $this->grundstuecksfront = $grundstuecksfront;

        return $this;
    }

    public function getDachbodenflaeche(): ?float
    {
        return $this->dachbodenflaeche;
    }

    public function setDachbodenflaeche(?float $dachbodenflaeche): Flaechen
    {
        $this->dachbodenflaeche = $dachbodenflaeche;

        return $this;
    }

    public function getTeilbarAb(): ?float
    {
        return $this->teilbarAb;
    }

    public function setTeilbarAb(?float $teilbarAb): Flaechen
    {
        $this->teilbarAb = $teilbarAb;

        return $this;
    }

    public function getBeheizbareFlaeche(): ?float
    {
        return $this->beheizbareFlaeche;
    }

    public function setBeheizbareFlaeche(?float $beheizbareFlaeche): Flaechen
    {
        $this->beheizbareFlaeche = $beheizbareFlaeche;

        return $this;
    }

    public function getAnzahlStellplaetze(): ?int
    {
        return $this->anzahlStellplaetze;
    }

    public function setAnzahlStellplaetze(?int $anzahlStellplaetze): Flaechen
    {
        $this->anzahlStellplaetze = $anzahlStellplaetze;

        return $this;
    }

    public function getPlaetzeGastraum(): ?float
    {
        return $this->plaetzeGastraum;
    }

    public function setPlaetzeGastraum(?float $plaetzeGastraum): Flaechen
    {
        $this->plaetzeGastraum = $plaetzeGastraum;

        return $this;
    }

    public function getAnzahlBetten(): ?float
    {
        return $this->anzahlBetten;
    }

    public function setAnzahlBetten(?float $anzahlBetten): Flaechen
    {
        $this->anzahlBetten = $anzahlBetten;

        return $this;
    }

    public function getAnzahlTagungsraeume(): ?float
    {
        return $this->anzahlTagungsraeume;
    }

    public function setAnzahlTagungsraeume(?float $anzahlTagungsraeume): Flaechen
    {
        $this->anzahlTagungsraeume = $anzahlTagungsraeume;

        return $this;
    }

    public function getVermietbareFlaeche(): ?float
    {
        return $this->vermietbareFlaeche;
    }

    public function setVermietbareFlaeche(?float $vermietbareFlaeche): Flaechen
    {
        $this->vermietbareFlaeche = $vermietbareFlaeche;

        return $this;
    }

    public function getAnzahlWohneinheiten(): ?float
    {
        return $this->anzahlWohneinheiten;
    }

    public function setAnzahlWohneinheiten(?float $anzahlWohneinheiten): Flaechen
    {
        $this->anzahlWohneinheiten = $anzahlWohneinheiten;

        return $this;
    }

    public function getAnzahlGewerbeeinheiten(): ?float
    {
        return $this->anzahlGewerbeeinheiten;
    }

    public function setAnzahlGewerbeeinheiten(?float $anzahlGewerbeeinheiten): Flaechen
    {
        $this->anzahlGewerbeeinheiten = $anzahlGewerbeeinheiten;

        return $this;
    }

    public function getEinliegerwohnung(): ?bool
    {
        return $this->einliegerwohnung;
    }

    public function setEinliegerwohnung(?bool $einliegerwohnung): Flaechen
    {
        $this->einliegerwohnung = $einliegerwohnung;

        return $this;
    }

    public function getKubatur(): ?float
    {
        return $this->kubatur;
    }

    public function setKubatur(?float $kubatur): Flaechen
    {
        $this->kubatur = $kubatur;

        return $this;
    }

    public function getAusnuetzungsziffer(): ?float
    {
        return $this->ausnuetzungsziffer;
    }

    public function setAusnuetzungsziffer(?float $ausnuetzungsziffer): Flaechen
    {
        $this->ausnuetzungsziffer = $ausnuetzungsziffer;

        return $this;
    }

    public function getFlaechevon(): ?float
    {
        return $this->flaechevon;
    }

    public function setFlaechevon(?float $flaechevon): Flaechen
    {
        $this->flaechevon = $flaechevon;

        return $this;
    }

    public function getFlaechebis(): ?float
    {
        return $this->flaechebis;
    }

    public function setFlaechebis(?float $flaechebis): Flaechen
    {
        $this->flaechebis = $flaechebis;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Flaechen
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Flaechen
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

    public function setUserDefinedExtend(array $userDefinedExtend): Flaechen
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
