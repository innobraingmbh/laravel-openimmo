<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Preise
 */
#[XmlRoot(name: 'preise')]
class Preise
{
    public function __construct(
        #[Type(Kaufpreis::class)]
        #[SerializedName('kaufpreis')]
        protected ?Kaufpreis $kaufpreis = null,
        #[Type(Kaufpreisnetto::class)]
        #[SerializedName('kaufpreisnetto')]
        protected ?Kaufpreisnetto $kaufpreisnetto = null,
        #[Type('float')]
        #[SerializedName('kaufpreisbrutto')]
        protected ?float $kaufpreisbrutto = null,
        #[Type('float')]
        #[SerializedName('nettokaltmiete')]
        protected ?float $nettokaltmiete = null,
        #[Type('float')]
        #[SerializedName('kaltmiete')]
        protected ?float $kaltmiete = null,
        #[Type('float')]
        #[SerializedName('warmmiete')]
        protected ?float $warmmiete = null,
        #[Type('float')]
        #[SerializedName('nebenkosten')]
        protected ?float $nebenkosten = null,
        #[Type('bool')]
        #[SerializedName('heizkosten_enthalten')]
        protected ?bool $heizkostenEnthalten = null,
        #[Type('float')]
        #[SerializedName('heizkosten')]
        protected ?float $heizkosten = null,
        #[Type('bool')]
        #[SerializedName('zzg_mehrwertsteuer')]
        protected ?bool $zzgMehrwertsteuer = null,
        #[Type('float')]
        #[SerializedName('mietzuschlaege')]
        protected ?float $mietzuschlaege = null,
        #[Type(Hauptmietzinsnetto::class)]
        #[SerializedName('hauptmietzinsnetto')]
        protected ?Hauptmietzinsnetto $hauptmietzinsnetto = null,
        #[Type('float')]
        #[SerializedName('pauschalmiete')]
        protected ?float $pauschalmiete = null,
        #[Type(Betriebskostennetto::class)]
        #[SerializedName('betriebskostennetto')]
        protected ?Betriebskostennetto $betriebskostennetto = null,
        #[Type(Evbnetto::class)]
        #[SerializedName('evbnetto')]
        protected ?Evbnetto $evbnetto = null,
        #[Type(Gesamtmietenetto::class)]
        #[SerializedName('gesamtmietenetto')]
        protected ?Gesamtmietenetto $gesamtmietenetto = null,
        #[Type('float')]
        #[SerializedName('gesamtmietebrutto')]
        protected ?float $gesamtmietebrutto = null,
        #[Type(Gesamtbelastungnetto::class)]
        #[SerializedName('gesamtbelastungnetto')]
        protected ?Gesamtbelastungnetto $gesamtbelastungnetto = null,
        #[Type('float')]
        #[SerializedName('gesamtbelastungbrutto')]
        protected ?float $gesamtbelastungbrutto = null,
        #[Type(Gesamtkostenprom2von::class)]
        #[SerializedName('gesamtkostenprom2von')]
        protected ?Gesamtkostenprom2von $gesamtkostenprom2von = null,
        #[Type(Heizkostennetto::class)]
        #[SerializedName('heizkostennetto')]
        protected ?Heizkostennetto $heizkostennetto = null,
        #[Type(Monatlichekostennetto::class)]
        #[SerializedName('monatlichekostennetto')]
        protected ?Monatlichekostennetto $monatlichekostennetto = null,
        #[Type('float')]
        #[SerializedName('monatlichekostenbrutto')]
        protected ?float $monatlichekostenbrutto = null,
        #[Type(Nebenkostenprom2von::class)]
        #[SerializedName('nebenkostenprom2von')]
        protected ?Nebenkostenprom2von $nebenkostenprom2von = null,
        #[Type(Ruecklagenetto::class)]
        #[SerializedName('ruecklagenetto')]
        protected ?Ruecklagenetto $ruecklagenetto = null,
        #[Type(Sonstigekostennetto::class)]
        #[SerializedName('sonstigekostennetto')]
        protected ?Sonstigekostennetto $sonstigekostennetto = null,
        #[Type(Sonstigemietenetto::class)]
        #[SerializedName('sonstigemietenetto')]
        protected ?Sonstigemietenetto $sonstigemietenetto = null,
        #[Type(Summemietenetto::class)]
        #[SerializedName('summemietenetto')]
        protected ?Summemietenetto $summemietenetto = null,
        #[Type(Nettomieteprom2von::class)]
        #[SerializedName('nettomieteprom2von')]
        protected ?Nettomieteprom2von $nettomieteprom2von = null,
        #[Type('float')]
        #[SerializedName('pacht')]
        protected ?float $pacht = null,
        #[Type('float')]
        #[SerializedName('erbpacht')]
        protected ?float $erbpacht = null,
        #[Type('float')]
        #[SerializedName('hausgeld')]
        protected ?float $hausgeld = null,
        #[Type('float')]
        #[SerializedName('abstand')]
        protected ?float $abstand = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('preis_zeitraum_von')]
        protected ?DateTime $preisZeitraumVon = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('preis_zeitraum_bis')]
        protected ?DateTime $preisZeitraumBis = null,
        #[Type(PreisZeiteinheit::class)]
        #[SerializedName('preis_zeiteinheit')]
        protected ?PreisZeiteinheit $preisZeiteinheit = null,
        #[Type('float')]
        #[SerializedName('mietpreis_pro_qm')]
        protected ?float $mietpreisProQm = null,
        #[Type('float')]
        #[SerializedName('kaufpreis_pro_qm')]
        protected ?float $kaufpreisProQm = null,
        #[Type('bool')]
        #[SerializedName('provisionspflichtig')]
        protected ?bool $provisionspflichtig = null,
        #[Type(ProvisionTeilen::class)]
        #[SerializedName('provision_teilen')]
        protected ?ProvisionTeilen $provisionTeilen = null,
        #[Type(InnenCourtage::class)]
        #[SerializedName('innen_courtage')]
        protected ?InnenCourtage $innenCourtage = null,
        #[Type(AussenCourtage::class)]
        #[SerializedName('aussen_courtage')]
        protected ?AussenCourtage $aussenCourtage = null,
        #[Type('string')]
        #[SerializedName('courtage_hinweis')]
        protected ?string $courtageHinweis = null,
        #[Type(Provisionnetto::class)]
        #[SerializedName('provisionnetto')]
        protected ?Provisionnetto $provisionnetto = null,
        #[Type('float')]
        #[SerializedName('provisionbrutto')]
        protected ?float $provisionbrutto = null,
        #[Type(Waehrung::class)]
        #[SerializedName('waehrung')]
        protected ?Waehrung $waehrung = null,
        /**
         * Maximum precision: 2
         * Minimum value (inclusive): 0
         */
        #[Type('float')]
        #[SerializedName('mwst_satz')]
        protected ?float $mwstSatz = null,
        /**
         * Maximum precision: 2
         * Minimum value (inclusive): 0
         */
        #[Type('float')]
        #[SerializedName('mwst_gesamt')]
        protected ?float $mwstGesamt = null,
        #[Type('string')]
        #[SerializedName('freitext_preis')]
        protected ?string $freitextPreis = null,
        #[Type('string')]
        #[SerializedName('x_fache')]
        protected ?string $xFache = null,
        #[Type('float')]
        #[SerializedName('nettorendite')]
        protected ?float $nettorendite = null,
        #[Type('float')]
        #[SerializedName('nettorendite_soll')]
        protected ?float $nettorenditeSoll = null,
        #[Type('float')]
        #[SerializedName('nettorendite_ist')]
        protected ?float $nettorenditeIst = null,
        #[Type(MieteinnahmenIst::class)]
        #[SerializedName('mieteinnahmen_ist')]
        protected ?MieteinnahmenIst $mieteinnahmenIst = null,
        #[Type(MieteinnahmenSoll::class)]
        #[SerializedName('mieteinnahmen_soll')]
        protected ?MieteinnahmenSoll $mieteinnahmenSoll = null,
        #[Type('float')]
        #[SerializedName('erschliessungskosten')]
        protected ?float $erschliessungskosten = null,
        #[Type('float')]
        #[SerializedName('kaution')]
        protected ?float $kaution = null,
        #[Type('string')]
        #[SerializedName('kaution_text')]
        protected ?string $kautionText = null,
        #[Type('float')]
        #[SerializedName('geschaeftsguthaben')]
        protected ?float $geschaeftsguthaben = null,
        #[Type(StpCarport::class)]
        #[SerializedName('stp_carport')]
        protected ?StpCarport $stpCarport = null,
        #[Type(StpDuplex::class)]
        #[SerializedName('stp_duplex')]
        protected ?StpDuplex $stpDuplex = null,
        #[Type(StpFreiplatz::class)]
        #[SerializedName('stp_freiplatz')]
        protected ?StpFreiplatz $stpFreiplatz = null,
        #[Type(StpGarage::class)]
        #[SerializedName('stp_garage')]
        protected ?StpGarage $stpGarage = null,
        #[Type(StpParkhaus::class)]
        #[SerializedName('stp_parkhaus')]
        protected ?StpParkhaus $stpParkhaus = null,
        #[Type(StpTiefgarage::class)]
        #[SerializedName('stp_tiefgarage')]
        protected ?StpTiefgarage $stpTiefgarage = null,
        #[XmlList(entry: 'stp_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\StpSonstige>')]
        #[SkipWhenEmpty]
        #[SerializedName('stp_sonstige')]
        protected array $stpSonstige = [],
        #[Type('float')]
        #[SerializedName('richtpreis')]
        protected ?float $richtpreis = null,
        #[Type('float')]
        #[SerializedName('richtpreisprom2')]
        protected ?float $richtpreisprom2 = null,
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

    public function getKaufpreis(): ?Kaufpreis
    {
        return $this->kaufpreis;
    }

    public function setKaufpreis(?Kaufpreis $kaufpreis): Preise
    {
        $this->kaufpreis = $kaufpreis;

        return $this;
    }

    public function getKaufpreisnetto(): ?Kaufpreisnetto
    {
        return $this->kaufpreisnetto;
    }

    public function setKaufpreisnetto(?Kaufpreisnetto $kaufpreisnetto): Preise
    {
        $this->kaufpreisnetto = $kaufpreisnetto;

        return $this;
    }

    public function getKaufpreisbrutto(): ?float
    {
        return $this->kaufpreisbrutto;
    }

    public function setKaufpreisbrutto(?float $kaufpreisbrutto): Preise
    {
        $this->kaufpreisbrutto = $kaufpreisbrutto;

        return $this;
    }

    public function getNettokaltmiete(): ?float
    {
        return $this->nettokaltmiete;
    }

    public function setNettokaltmiete(?float $nettokaltmiete): Preise
    {
        $this->nettokaltmiete = $nettokaltmiete;

        return $this;
    }

    public function getKaltmiete(): ?float
    {
        return $this->kaltmiete;
    }

    public function setKaltmiete(?float $kaltmiete): Preise
    {
        $this->kaltmiete = $kaltmiete;

        return $this;
    }

    public function getWarmmiete(): ?float
    {
        return $this->warmmiete;
    }

    public function setWarmmiete(?float $warmmiete): Preise
    {
        $this->warmmiete = $warmmiete;

        return $this;
    }

    public function getNebenkosten(): ?float
    {
        return $this->nebenkosten;
    }

    public function setNebenkosten(?float $nebenkosten): Preise
    {
        $this->nebenkosten = $nebenkosten;

        return $this;
    }

    public function getHeizkostenEnthalten(): ?bool
    {
        return $this->heizkostenEnthalten;
    }

    public function setHeizkostenEnthalten(?bool $heizkostenEnthalten): Preise
    {
        $this->heizkostenEnthalten = $heizkostenEnthalten;

        return $this;
    }

    public function getHeizkosten(): ?float
    {
        return $this->heizkosten;
    }

    public function setHeizkosten(?float $heizkosten): Preise
    {
        $this->heizkosten = $heizkosten;

        return $this;
    }

    public function getZzgMehrwertsteuer(): ?bool
    {
        return $this->zzgMehrwertsteuer;
    }

    public function setZzgMehrwertsteuer(?bool $zzgMehrwertsteuer): Preise
    {
        $this->zzgMehrwertsteuer = $zzgMehrwertsteuer;

        return $this;
    }

    public function getMietzuschlaege(): ?float
    {
        return $this->mietzuschlaege;
    }

    public function setMietzuschlaege(?float $mietzuschlaege): Preise
    {
        $this->mietzuschlaege = $mietzuschlaege;

        return $this;
    }

    public function getHauptmietzinsnetto(): ?Hauptmietzinsnetto
    {
        return $this->hauptmietzinsnetto;
    }

    public function setHauptmietzinsnetto(?Hauptmietzinsnetto $hauptmietzinsnetto): Preise
    {
        $this->hauptmietzinsnetto = $hauptmietzinsnetto;

        return $this;
    }

    public function getPauschalmiete(): ?float
    {
        return $this->pauschalmiete;
    }

    public function setPauschalmiete(?float $pauschalmiete): Preise
    {
        $this->pauschalmiete = $pauschalmiete;

        return $this;
    }

    public function getBetriebskostennetto(): ?Betriebskostennetto
    {
        return $this->betriebskostennetto;
    }

    public function setBetriebskostennetto(?Betriebskostennetto $betriebskostennetto): Preise
    {
        $this->betriebskostennetto = $betriebskostennetto;

        return $this;
    }

    public function getEvbnetto(): ?Evbnetto
    {
        return $this->evbnetto;
    }

    public function setEvbnetto(?Evbnetto $evbnetto): Preise
    {
        $this->evbnetto = $evbnetto;

        return $this;
    }

    public function getGesamtmietenetto(): ?Gesamtmietenetto
    {
        return $this->gesamtmietenetto;
    }

    public function setGesamtmietenetto(?Gesamtmietenetto $gesamtmietenetto): Preise
    {
        $this->gesamtmietenetto = $gesamtmietenetto;

        return $this;
    }

    public function getGesamtmietebrutto(): ?float
    {
        return $this->gesamtmietebrutto;
    }

    public function setGesamtmietebrutto(?float $gesamtmietebrutto): Preise
    {
        $this->gesamtmietebrutto = $gesamtmietebrutto;

        return $this;
    }

    public function getGesamtbelastungnetto(): ?Gesamtbelastungnetto
    {
        return $this->gesamtbelastungnetto;
    }

    public function setGesamtbelastungnetto(?Gesamtbelastungnetto $gesamtbelastungnetto): Preise
    {
        $this->gesamtbelastungnetto = $gesamtbelastungnetto;

        return $this;
    }

    public function getGesamtbelastungbrutto(): ?float
    {
        return $this->gesamtbelastungbrutto;
    }

    public function setGesamtbelastungbrutto(?float $gesamtbelastungbrutto): Preise
    {
        $this->gesamtbelastungbrutto = $gesamtbelastungbrutto;

        return $this;
    }

    public function getGesamtkostenprom2von(): ?Gesamtkostenprom2von
    {
        return $this->gesamtkostenprom2von;
    }

    public function setGesamtkostenprom2von(?Gesamtkostenprom2von $gesamtkostenprom2von): Preise
    {
        $this->gesamtkostenprom2von = $gesamtkostenprom2von;

        return $this;
    }

    public function getHeizkostennetto(): ?Heizkostennetto
    {
        return $this->heizkostennetto;
    }

    public function setHeizkostennetto(?Heizkostennetto $heizkostennetto): Preise
    {
        $this->heizkostennetto = $heizkostennetto;

        return $this;
    }

    public function getMonatlichekostennetto(): ?Monatlichekostennetto
    {
        return $this->monatlichekostennetto;
    }

    public function setMonatlichekostennetto(?Monatlichekostennetto $monatlichekostennetto): Preise
    {
        $this->monatlichekostennetto = $monatlichekostennetto;

        return $this;
    }

    public function getMonatlichekostenbrutto(): ?float
    {
        return $this->monatlichekostenbrutto;
    }

    public function setMonatlichekostenbrutto(?float $monatlichekostenbrutto): Preise
    {
        $this->monatlichekostenbrutto = $monatlichekostenbrutto;

        return $this;
    }

    public function getNebenkostenprom2von(): ?Nebenkostenprom2von
    {
        return $this->nebenkostenprom2von;
    }

    public function setNebenkostenprom2von(?Nebenkostenprom2von $nebenkostenprom2von): Preise
    {
        $this->nebenkostenprom2von = $nebenkostenprom2von;

        return $this;
    }

    public function getRuecklagenetto(): ?Ruecklagenetto
    {
        return $this->ruecklagenetto;
    }

    public function setRuecklagenetto(?Ruecklagenetto $ruecklagenetto): Preise
    {
        $this->ruecklagenetto = $ruecklagenetto;

        return $this;
    }

    public function getSonstigekostennetto(): ?Sonstigekostennetto
    {
        return $this->sonstigekostennetto;
    }

    public function setSonstigekostennetto(?Sonstigekostennetto $sonstigekostennetto): Preise
    {
        $this->sonstigekostennetto = $sonstigekostennetto;

        return $this;
    }

    public function getSonstigemietenetto(): ?Sonstigemietenetto
    {
        return $this->sonstigemietenetto;
    }

    public function setSonstigemietenetto(?Sonstigemietenetto $sonstigemietenetto): Preise
    {
        $this->sonstigemietenetto = $sonstigemietenetto;

        return $this;
    }

    public function getSummemietenetto(): ?Summemietenetto
    {
        return $this->summemietenetto;
    }

    public function setSummemietenetto(?Summemietenetto $summemietenetto): Preise
    {
        $this->summemietenetto = $summemietenetto;

        return $this;
    }

    public function getNettomieteprom2von(): ?Nettomieteprom2von
    {
        return $this->nettomieteprom2von;
    }

    public function setNettomieteprom2von(?Nettomieteprom2von $nettomieteprom2von): Preise
    {
        $this->nettomieteprom2von = $nettomieteprom2von;

        return $this;
    }

    public function getPacht(): ?float
    {
        return $this->pacht;
    }

    public function setPacht(?float $pacht): Preise
    {
        $this->pacht = $pacht;

        return $this;
    }

    public function getErbpacht(): ?float
    {
        return $this->erbpacht;
    }

    public function setErbpacht(?float $erbpacht): Preise
    {
        $this->erbpacht = $erbpacht;

        return $this;
    }

    public function getHausgeld(): ?float
    {
        return $this->hausgeld;
    }

    public function setHausgeld(?float $hausgeld): Preise
    {
        $this->hausgeld = $hausgeld;

        return $this;
    }

    public function getAbstand(): ?float
    {
        return $this->abstand;
    }

    public function setAbstand(?float $abstand): Preise
    {
        $this->abstand = $abstand;

        return $this;
    }

    public function getPreisZeitraumVon(): ?DateTime
    {
        return $this->preisZeitraumVon;
    }

    public function setPreisZeitraumVon(?DateTime $preisZeitraumVon): Preise
    {
        $this->preisZeitraumVon = $preisZeitraumVon;

        return $this;
    }

    public function getPreisZeitraumBis(): ?DateTime
    {
        return $this->preisZeitraumBis;
    }

    public function setPreisZeitraumBis(?DateTime $preisZeitraumBis): Preise
    {
        $this->preisZeitraumBis = $preisZeitraumBis;

        return $this;
    }

    public function getPreisZeiteinheit(): ?PreisZeiteinheit
    {
        return $this->preisZeiteinheit;
    }

    public function setPreisZeiteinheit(?PreisZeiteinheit $preisZeiteinheit): Preise
    {
        $this->preisZeiteinheit = $preisZeiteinheit;

        return $this;
    }

    public function getMietpreisProQm(): ?float
    {
        return $this->mietpreisProQm;
    }

    public function setMietpreisProQm(?float $mietpreisProQm): Preise
    {
        $this->mietpreisProQm = $mietpreisProQm;

        return $this;
    }

    public function getKaufpreisProQm(): ?float
    {
        return $this->kaufpreisProQm;
    }

    public function setKaufpreisProQm(?float $kaufpreisProQm): Preise
    {
        $this->kaufpreisProQm = $kaufpreisProQm;

        return $this;
    }

    public function getProvisionspflichtig(): ?bool
    {
        return $this->provisionspflichtig;
    }

    public function setProvisionspflichtig(?bool $provisionspflichtig): Preise
    {
        $this->provisionspflichtig = $provisionspflichtig;

        return $this;
    }

    public function getProvisionTeilen(): ?ProvisionTeilen
    {
        return $this->provisionTeilen;
    }

    public function setProvisionTeilen(?ProvisionTeilen $provisionTeilen): Preise
    {
        $this->provisionTeilen = $provisionTeilen;

        return $this;
    }

    public function getInnenCourtage(): ?InnenCourtage
    {
        return $this->innenCourtage;
    }

    public function setInnenCourtage(?InnenCourtage $innenCourtage): Preise
    {
        $this->innenCourtage = $innenCourtage;

        return $this;
    }

    public function getAussenCourtage(): ?AussenCourtage
    {
        return $this->aussenCourtage;
    }

    public function setAussenCourtage(?AussenCourtage $aussenCourtage): Preise
    {
        $this->aussenCourtage = $aussenCourtage;

        return $this;
    }

    public function getCourtageHinweis(): ?string
    {
        return $this->courtageHinweis;
    }

    public function setCourtageHinweis(?string $courtageHinweis): Preise
    {
        $this->courtageHinweis = $courtageHinweis;

        return $this;
    }

    public function getProvisionnetto(): ?Provisionnetto
    {
        return $this->provisionnetto;
    }

    public function setProvisionnetto(?Provisionnetto $provisionnetto): Preise
    {
        $this->provisionnetto = $provisionnetto;

        return $this;
    }

    public function getProvisionbrutto(): ?float
    {
        return $this->provisionbrutto;
    }

    public function setProvisionbrutto(?float $provisionbrutto): Preise
    {
        $this->provisionbrutto = $provisionbrutto;

        return $this;
    }

    public function getWaehrung(): ?Waehrung
    {
        return $this->waehrung;
    }

    public function setWaehrung(?Waehrung $waehrung): Preise
    {
        $this->waehrung = $waehrung;

        return $this;
    }

    public function getMwstSatz(): ?float
    {
        return $this->mwstSatz;
    }

    public function setMwstSatz(?float $mwstSatz): Preise
    {
        $this->mwstSatz = $mwstSatz;

        return $this;
    }

    public function getMwstGesamt(): ?float
    {
        return $this->mwstGesamt;
    }

    public function setMwstGesamt(?float $mwstGesamt): Preise
    {
        $this->mwstGesamt = $mwstGesamt;

        return $this;
    }

    public function getFreitextPreis(): ?string
    {
        return $this->freitextPreis;
    }

    public function setFreitextPreis(?string $freitextPreis): Preise
    {
        $this->freitextPreis = $freitextPreis;

        return $this;
    }

    public function getXFache(): ?string
    {
        return $this->xFache;
    }

    public function setXFache(?string $xFache): Preise
    {
        $this->xFache = $xFache;

        return $this;
    }

    public function getNettorendite(): ?float
    {
        return $this->nettorendite;
    }

    public function setNettorendite(?float $nettorendite): Preise
    {
        $this->nettorendite = $nettorendite;

        return $this;
    }

    public function getNettorenditeSoll(): ?float
    {
        return $this->nettorenditeSoll;
    }

    public function setNettorenditeSoll(?float $nettorenditeSoll): Preise
    {
        $this->nettorenditeSoll = $nettorenditeSoll;

        return $this;
    }

    public function getNettorenditeIst(): ?float
    {
        return $this->nettorenditeIst;
    }

    public function setNettorenditeIst(?float $nettorenditeIst): Preise
    {
        $this->nettorenditeIst = $nettorenditeIst;

        return $this;
    }

    public function getMieteinnahmenIst(): ?MieteinnahmenIst
    {
        return $this->mieteinnahmenIst;
    }

    public function setMieteinnahmenIst(?MieteinnahmenIst $mieteinnahmenIst): Preise
    {
        $this->mieteinnahmenIst = $mieteinnahmenIst;

        return $this;
    }

    public function getMieteinnahmenSoll(): ?MieteinnahmenSoll
    {
        return $this->mieteinnahmenSoll;
    }

    public function setMieteinnahmenSoll(?MieteinnahmenSoll $mieteinnahmenSoll): Preise
    {
        $this->mieteinnahmenSoll = $mieteinnahmenSoll;

        return $this;
    }

    public function getErschliessungskosten(): ?float
    {
        return $this->erschliessungskosten;
    }

    public function setErschliessungskosten(?float $erschliessungskosten): Preise
    {
        $this->erschliessungskosten = $erschliessungskosten;

        return $this;
    }

    public function getKaution(): ?float
    {
        return $this->kaution;
    }

    public function setKaution(?float $kaution): Preise
    {
        $this->kaution = $kaution;

        return $this;
    }

    public function getKautionText(): ?string
    {
        return $this->kautionText;
    }

    public function setKautionText(?string $kautionText): Preise
    {
        $this->kautionText = $kautionText;

        return $this;
    }

    public function getGeschaeftsguthaben(): ?float
    {
        return $this->geschaeftsguthaben;
    }

    public function setGeschaeftsguthaben(?float $geschaeftsguthaben): Preise
    {
        $this->geschaeftsguthaben = $geschaeftsguthaben;

        return $this;
    }

    public function getStpCarport(): ?StpCarport
    {
        return $this->stpCarport;
    }

    public function setStpCarport(?StpCarport $stpCarport): Preise
    {
        $this->stpCarport = $stpCarport;

        return $this;
    }

    public function getStpDuplex(): ?StpDuplex
    {
        return $this->stpDuplex;
    }

    public function setStpDuplex(?StpDuplex $stpDuplex): Preise
    {
        $this->stpDuplex = $stpDuplex;

        return $this;
    }

    public function getStpFreiplatz(): ?StpFreiplatz
    {
        return $this->stpFreiplatz;
    }

    public function setStpFreiplatz(?StpFreiplatz $stpFreiplatz): Preise
    {
        $this->stpFreiplatz = $stpFreiplatz;

        return $this;
    }

    public function getStpGarage(): ?StpGarage
    {
        return $this->stpGarage;
    }

    public function setStpGarage(?StpGarage $stpGarage): Preise
    {
        $this->stpGarage = $stpGarage;

        return $this;
    }

    public function getStpParkhaus(): ?StpParkhaus
    {
        return $this->stpParkhaus;
    }

    public function setStpParkhaus(?StpParkhaus $stpParkhaus): Preise
    {
        $this->stpParkhaus = $stpParkhaus;

        return $this;
    }

    public function getStpTiefgarage(): ?StpTiefgarage
    {
        return $this->stpTiefgarage;
    }

    public function setStpTiefgarage(?StpTiefgarage $stpTiefgarage): Preise
    {
        $this->stpTiefgarage = $stpTiefgarage;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getStpSonstige(): array
    {
        return $this->stpSonstige;
    }

    public function setStpSonstige(array $stpSonstige): Preise
    {
        $this->stpSonstige = $stpSonstige;

        return $this;
    }

    public function getRichtpreis(): ?float
    {
        return $this->richtpreis;
    }

    public function setRichtpreis(?float $richtpreis): Preise
    {
        $this->richtpreis = $richtpreis;

        return $this;
    }

    public function getRichtpreisprom2(): ?float
    {
        return $this->richtpreisprom2;
    }

    public function setRichtpreisprom2(?float $richtpreisprom2): Preise
    {
        $this->richtpreisprom2 = $richtpreisprom2;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Preise
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Preise
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

    public function setUserDefinedExtend(array $userDefinedExtend): Preise
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
