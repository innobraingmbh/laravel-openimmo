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
 * Class VerwaltungTechn
 *
 * @description Technische Verwaltungsangaben des Datentransfers
 */
#[XmlRoot(name: 'verwaltung_techn')]
class VerwaltungTechn
{
    public function __construct(
        /** @description Interne Objektnummer des Anbieters */
        #[Type('string')]
        #[SerializedName('objektnr_intern')]
        protected ?string $objektnrIntern = null,
        /** @description Externe Objektnummer des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('objektnr_extern')]
        protected string $objektnrExtern = '',
        /** @description Datentransferaktion (z.B. Anlegen, Ändern, Löschen) */
        #[Type(Aktion::class)]
        #[SerializedName('aktion')]
        protected ?Aktion $aktion = null,
        /** @description Datum, ab dem das Inserat aktiv ist */
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('aktiv_von')]
        protected ?DateTime $aktivVon = null,
        /** @description Datum, bis zu dem das Inserat aktiv ist */
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('aktiv_bis')]
        protected ?DateTime $aktivBis = null,
        /** @description OpenImmo-Objekt-ID */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('openimmo_obid')]
        protected string $openimmoObid = '',
        /** @description Herkunftskennung des Datensatzes */
        #[Type('string')]
        #[SerializedName('kennung_ursprung')]
        protected ?string $kennungUrsprung = null,
        /** @description Datum ab dem der Status gilt */
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('stand_vom')]
        protected ?DateTime $standVom = null,
        /** @description Allgemeine Weiterleitungseinstellung */
        #[Type('bool')]
        #[SerializedName('weitergabe_generell')]
        protected ?bool $weitergabeGenerell = null,
        /** @description Weiterleitungseinstellung bei positivem Ergebnis */
        #[Type('string')]
        #[SerializedName('weitergabe_positiv')]
        protected ?string $weitergabePositiv = null,
        /** @description Weiterleitungseinstellung bei negativem Ergebnis */
        #[Type('string')]
        #[SerializedName('weitergabe_negativ')]
        protected ?string $weitergabeNegativ = null,
        /** @description Bezeichner der Gruppe */
        #[Type('string')]
        #[SerializedName('gruppen_kennung')]
        protected ?string $gruppenKennung = null,
        /** @description Stammdaten des Datentransfers */
        #[Type(Master::class)]
        #[SerializedName('master')]
        protected ?Master $master = null,
        /** @description Sprache des Textes (ISO-Sprachcode) */
        #[Type('string')]
        #[SerializedName('sprache')]
        protected ?string $sprache = null,
        /** @description Benutzerdefiniertes einfaches Freifeld */
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        /** @description Benutzerdefiniertes Freifeld mit beliebigem Inhalt */
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        /** @description Benutzerdefinierte Erweiterung */
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getObjektnrIntern(): ?string
    {
        return $this->objektnrIntern;
    }

    public function setObjektnrIntern(?string $objektnrIntern): VerwaltungTechn
    {
        $this->objektnrIntern = $objektnrIntern;

        return $this;
    }

    public function getObjektnrExtern(): string
    {
        return $this->objektnrExtern;
    }

    public function setObjektnrExtern(string $objektnrExtern): VerwaltungTechn
    {
        $this->objektnrExtern = $objektnrExtern;

        return $this;
    }

    public function getAktion(): ?Aktion
    {
        return $this->aktion;
    }

    public function setAktion(?Aktion $aktion): VerwaltungTechn
    {
        $this->aktion = $aktion;

        return $this;
    }

    public function getAktivVon(): ?DateTime
    {
        return $this->aktivVon;
    }

    public function setAktivVon(?DateTime $aktivVon): VerwaltungTechn
    {
        $this->aktivVon = $aktivVon;

        return $this;
    }

    public function getAktivBis(): ?DateTime
    {
        return $this->aktivBis;
    }

    public function setAktivBis(?DateTime $aktivBis): VerwaltungTechn
    {
        $this->aktivBis = $aktivBis;

        return $this;
    }

    public function getOpenimmoObid(): string
    {
        return $this->openimmoObid;
    }

    public function setOpenimmoObid(string $openimmoObid): VerwaltungTechn
    {
        $this->openimmoObid = $openimmoObid;

        return $this;
    }

    public function getKennungUrsprung(): ?string
    {
        return $this->kennungUrsprung;
    }

    public function setKennungUrsprung(?string $kennungUrsprung): VerwaltungTechn
    {
        $this->kennungUrsprung = $kennungUrsprung;

        return $this;
    }

    public function getStandVom(): ?DateTime
    {
        return $this->standVom;
    }

    public function setStandVom(?DateTime $standVom): VerwaltungTechn
    {
        $this->standVom = $standVom;

        return $this;
    }

    public function getWeitergabeGenerell(): ?bool
    {
        return $this->weitergabeGenerell;
    }

    public function setWeitergabeGenerell(?bool $weitergabeGenerell): VerwaltungTechn
    {
        $this->weitergabeGenerell = $weitergabeGenerell;

        return $this;
    }

    public function getWeitergabePositiv(): ?string
    {
        return $this->weitergabePositiv;
    }

    public function setWeitergabePositiv(?string $weitergabePositiv): VerwaltungTechn
    {
        $this->weitergabePositiv = $weitergabePositiv;

        return $this;
    }

    public function getWeitergabeNegativ(): ?string
    {
        return $this->weitergabeNegativ;
    }

    public function setWeitergabeNegativ(?string $weitergabeNegativ): VerwaltungTechn
    {
        $this->weitergabeNegativ = $weitergabeNegativ;

        return $this;
    }

    public function getGruppenKennung(): ?string
    {
        return $this->gruppenKennung;
    }

    public function setGruppenKennung(?string $gruppenKennung): VerwaltungTechn
    {
        $this->gruppenKennung = $gruppenKennung;

        return $this;
    }

    public function getMaster(): ?Master
    {
        return $this->master;
    }

    public function setMaster(?Master $master): VerwaltungTechn
    {
        $this->master = $master;

        return $this;
    }

    public function getSprache(): ?string
    {
        return $this->sprache;
    }

    public function setSprache(?string $sprache): VerwaltungTechn
    {
        $this->sprache = $sprache;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): VerwaltungTechn
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): VerwaltungTechn
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

    public function setUserDefinedExtend(array $userDefinedExtend): VerwaltungTechn
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
