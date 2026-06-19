<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ZustandAngaben
 */
#[Description('Zustandsangaben der Immobilie (Baujahr, Modernisierung, Energieausweis)')]
#[XmlRoot(name: 'zustand_angaben')]
class ZustandAngaben
{
    public function __construct(
        #[Type('string')]
        #[Description('Baujahr der Immobilie')]
        #[SerializedName('baujahr')]
        protected ?string $baujahr = null,
        #[Type('string')]
        #[Description('Jahr der letzten Modernisierung')]
        #[SerializedName('letztemodernisierung')]
        protected ?string $letztemodernisierung = null,
        #[Type(Zustand::class)]
        #[Description('Zustand der Immobilie')]
        #[SerializedName('zustand')]
        protected ?Zustand $zustand = null,
        #[Type(Alter::class)]
        #[Description('Altersangabe der Immobilie')]
        #[SerializedName('alter')]
        protected ?Alter $alter = null,
        #[Type(BebaubarNach::class)]
        #[Description('Bebaubarkeit gemäß Baurecht')]
        #[SerializedName('bebaubar_nach')]
        protected ?BebaubarNach $bebaubarNach = null,
        #[Type(Erschliessung::class)]
        #[Description('Erschließungszustand des Grundstücks')]
        #[SerializedName('erschliessung')]
        protected ?Erschliessung $erschliessung = null,
        #[Type(ErschliessungUmfang::class)]
        #[Description('Umfang der Erschließung des Grundstücks')]
        #[SerializedName('erschliessung_umfang')]
        protected ?ErschliessungUmfang $erschliessungUmfang = null,
        #[Type('string')]
        #[Description('Bauzone des Grundstücks')]
        #[SerializedName('bauzone')]
        protected ?string $bauzone = null,
        #[Type('string')]
        #[Description('Altlasten des Grundstücks')]
        #[SerializedName('altlasten')]
        protected ?string $altlasten = null,
        #[XmlList(entry: 'energiepass', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Energiepass>')]
        #[SkipWhenEmpty]
        #[Description('Energieausweis der Immobilie')]
        #[SerializedName('energiepass')]
        protected array $energiepass = [],
        #[Type(Verkaufstatus::class)]
        #[Description('Verkaufsstatus der Immobilie')]
        #[SerializedName('verkaufstatus')]
        protected ?Verkaufstatus $verkaufstatus = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[Description('Benutzerdefiniertes einfaches Freifeld')]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[Description('Benutzerdefiniertes Freifeld mit beliebigem Inhalt')]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[Description('Benutzerdefinierte Erweiterung')]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getBaujahr(): ?string
    {
        return $this->baujahr;
    }

    public function setBaujahr(?string $baujahr): ZustandAngaben
    {
        $this->baujahr = $baujahr;

        return $this;
    }

    public function getLetztemodernisierung(): ?string
    {
        return $this->letztemodernisierung;
    }

    public function setLetztemodernisierung(?string $letztemodernisierung): ZustandAngaben
    {
        $this->letztemodernisierung = $letztemodernisierung;

        return $this;
    }

    public function getZustand(): ?Zustand
    {
        return $this->zustand;
    }

    public function setZustand(?Zustand $zustand): ZustandAngaben
    {
        $this->zustand = $zustand;

        return $this;
    }

    public function getAlter(): ?Alter
    {
        return $this->alter;
    }

    public function setAlter(?Alter $alter): ZustandAngaben
    {
        $this->alter = $alter;

        return $this;
    }

    public function getBebaubarNach(): ?BebaubarNach
    {
        return $this->bebaubarNach;
    }

    public function setBebaubarNach(?BebaubarNach $bebaubarNach): ZustandAngaben
    {
        $this->bebaubarNach = $bebaubarNach;

        return $this;
    }

    public function getErschliessung(): ?Erschliessung
    {
        return $this->erschliessung;
    }

    public function setErschliessung(?Erschliessung $erschliessung): ZustandAngaben
    {
        $this->erschliessung = $erschliessung;

        return $this;
    }

    public function getErschliessungUmfang(): ?ErschliessungUmfang
    {
        return $this->erschliessungUmfang;
    }

    public function setErschliessungUmfang(?ErschliessungUmfang $erschliessungUmfang): ZustandAngaben
    {
        $this->erschliessungUmfang = $erschliessungUmfang;

        return $this;
    }

    public function getBauzone(): ?string
    {
        return $this->bauzone;
    }

    public function setBauzone(?string $bauzone): ZustandAngaben
    {
        $this->bauzone = $bauzone;

        return $this;
    }

    public function getAltlasten(): ?string
    {
        return $this->altlasten;
    }

    public function setAltlasten(?string $altlasten): ZustandAngaben
    {
        $this->altlasten = $altlasten;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEnergiepass(): array
    {
        return $this->energiepass;
    }

    public function setEnergiepass(array $energiepass): ZustandAngaben
    {
        $this->energiepass = $energiepass;

        return $this;
    }

    public function getVerkaufstatus(): ?Verkaufstatus
    {
        return $this->verkaufstatus;
    }

    public function setVerkaufstatus(?Verkaufstatus $verkaufstatus): ZustandAngaben
    {
        $this->verkaufstatus = $verkaufstatus;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): ZustandAngaben
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): ZustandAngaben
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

    public function setUserDefinedExtend(array $userDefinedExtend): ZustandAngaben
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
