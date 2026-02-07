<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Immobilie
 * Angaben einer einzelnen Immobile
 */
#[XmlRoot(name: 'immobilie')]
class Immobilie
{
    public function __construct(
        #[Type(Objektkategorie::class)]
        #[SerializedName('objektkategorie')]
        protected ?Objektkategorie $objektkategorie = null,
        #[Type(Geo::class)]
        #[SerializedName('geo')]
        protected ?Geo $geo = null,
        #[Type(Kontaktperson::class)]
        #[SerializedName('kontaktperson')]
        protected ?Kontaktperson $kontaktperson = null,
        #[XmlList(entry: 'weitere_adresse', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\WeitereAdresse>')]
        #[SkipWhenEmpty]
        #[SerializedName('weitere_adresse')]
        protected array $weitereAdresse = [],
        #[Type(Preise::class)]
        #[SerializedName('preise')]
        protected ?Preise $preise = null,
        #[Type(Bieterverfahren::class)]
        #[SerializedName('bieterverfahren')]
        protected ?Bieterverfahren $bieterverfahren = null,
        #[Type(Versteigerung::class)]
        #[SerializedName('versteigerung')]
        protected ?Versteigerung $versteigerung = null,
        #[Type(Flaechen::class)]
        #[SerializedName('flaechen')]
        protected ?Flaechen $flaechen = null,
        #[Type(Ausstattung::class)]
        #[SerializedName('ausstattung')]
        protected ?Ausstattung $ausstattung = null,
        #[Type(ZustandAngaben::class)]
        #[SerializedName('zustand_angaben')]
        protected ?ZustandAngaben $zustandAngaben = null,
        #[Type(Bewertung::class)]
        #[SerializedName('bewertung')]
        protected ?Bewertung $bewertung = null,
        #[Type(Infrastruktur::class)]
        #[SerializedName('infrastruktur')]
        protected ?Infrastruktur $infrastruktur = null,
        #[Type(Freitexte::class)]
        #[SerializedName('freitexte')]
        protected ?Freitexte $freitexte = null,
        #[Type(Anhaenge::class)]
        #[SerializedName('anhaenge')]
        protected ?Anhaenge $anhaenge = null,
        #[Type(VerwaltungObjekt::class)]
        #[SerializedName('verwaltung_objekt')]
        protected ?VerwaltungObjekt $verwaltungObjekt = null,
        #[Type(VerwaltungTechn::class)]
        #[SerializedName('verwaltung_techn')]
        protected ?VerwaltungTechn $verwaltungTechn = null,
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

    public function getObjektkategorie(): ?Objektkategorie
    {
        return $this->objektkategorie;
    }

    public function setObjektkategorie(?Objektkategorie $objektkategorie): Immobilie
    {
        $this->objektkategorie = $objektkategorie;

        return $this;
    }

    public function getGeo(): ?Geo
    {
        return $this->geo;
    }

    public function setGeo(?Geo $geo): Immobilie
    {
        $this->geo = $geo;

        return $this;
    }

    public function getKontaktperson(): ?Kontaktperson
    {
        return $this->kontaktperson;
    }

    public function setKontaktperson(?Kontaktperson $kontaktperson): Immobilie
    {
        $this->kontaktperson = $kontaktperson;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getWeitereAdresse(): array
    {
        return $this->weitereAdresse;
    }

    public function setWeitereAdresse(array $weitereAdresse): Immobilie
    {
        $this->weitereAdresse = $weitereAdresse;

        return $this;
    }

    public function getPreise(): ?Preise
    {
        return $this->preise;
    }

    public function setPreise(?Preise $preise): Immobilie
    {
        $this->preise = $preise;

        return $this;
    }

    public function getBieterverfahren(): ?Bieterverfahren
    {
        return $this->bieterverfahren;
    }

    public function setBieterverfahren(?Bieterverfahren $bieterverfahren): Immobilie
    {
        $this->bieterverfahren = $bieterverfahren;

        return $this;
    }

    public function getVersteigerung(): ?Versteigerung
    {
        return $this->versteigerung;
    }

    public function setVersteigerung(?Versteigerung $versteigerung): Immobilie
    {
        $this->versteigerung = $versteigerung;

        return $this;
    }

    public function getFlaechen(): ?Flaechen
    {
        return $this->flaechen;
    }

    public function setFlaechen(?Flaechen $flaechen): Immobilie
    {
        $this->flaechen = $flaechen;

        return $this;
    }

    public function getAusstattung(): ?Ausstattung
    {
        return $this->ausstattung;
    }

    public function setAusstattung(?Ausstattung $ausstattung): Immobilie
    {
        $this->ausstattung = $ausstattung;

        return $this;
    }

    public function getZustandAngaben(): ?ZustandAngaben
    {
        return $this->zustandAngaben;
    }

    public function setZustandAngaben(?ZustandAngaben $zustandAngaben): Immobilie
    {
        $this->zustandAngaben = $zustandAngaben;

        return $this;
    }

    public function getBewertung(): ?Bewertung
    {
        return $this->bewertung;
    }

    public function setBewertung(?Bewertung $bewertung): Immobilie
    {
        $this->bewertung = $bewertung;

        return $this;
    }

    public function getInfrastruktur(): ?Infrastruktur
    {
        return $this->infrastruktur;
    }

    public function setInfrastruktur(?Infrastruktur $infrastruktur): Immobilie
    {
        $this->infrastruktur = $infrastruktur;

        return $this;
    }

    public function getFreitexte(): ?Freitexte
    {
        return $this->freitexte;
    }

    public function setFreitexte(?Freitexte $freitexte): Immobilie
    {
        $this->freitexte = $freitexte;

        return $this;
    }

    public function getAnhaenge(): ?Anhaenge
    {
        return $this->anhaenge;
    }

    public function setAnhaenge(?Anhaenge $anhaenge): Immobilie
    {
        $this->anhaenge = $anhaenge;

        return $this;
    }

    public function getVerwaltungObjekt(): ?VerwaltungObjekt
    {
        return $this->verwaltungObjekt;
    }

    public function setVerwaltungObjekt(?VerwaltungObjekt $verwaltungObjekt): Immobilie
    {
        $this->verwaltungObjekt = $verwaltungObjekt;

        return $this;
    }

    public function getVerwaltungTechn(): ?VerwaltungTechn
    {
        return $this->verwaltungTechn;
    }

    public function setVerwaltungTechn(?VerwaltungTechn $verwaltungTechn): Immobilie
    {
        $this->verwaltungTechn = $verwaltungTechn;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Immobilie
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Immobilie
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

    public function setUserDefinedExtend(array $userDefinedExtend): Immobilie
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
