<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anbieter
 * Anbieterangaben
 *
 * @description Anbieter (Makler oder Eigentümer) der Immobilie
 */
#[XmlRoot(name: 'anbieter')]
class Anbieter
{
    public function __construct(
        /** @description Anbieternummer */
        #[Type('string')]
        #[SerializedName('anbieternr')]
        protected ?string $anbieternr = null,
        /** @description Firmenname des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('firma')]
        protected string $firma = '',
        /** @description OpenImmo-Anbieternummer (ANID) */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('openimmo_anid')]
        protected string $openimmoAnid = '',
        /** @description Lizenznummer des Anbieters */
        #[Type('string')]
        #[SerializedName('lizenzkennung')]
        protected ?string $lizenzkennung = null,
        /** @description Anhang (Datei) der Immobilie */
        #[Type(Anhang::class)]
        #[SerializedName('anhang')]
        protected ?Anhang $anhang = null,
        /** @description Einzelne Immobilie */
        #[XmlList(entry: 'immobilie', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Immobilie>')]
        #[SkipWhenEmpty]
        #[SerializedName('immobilie')]
        protected array $immobilie = [],
        /** @description Impressum des Anbieters */
        #[Type('string')]
        #[SerializedName('impressum')]
        protected ?string $impressum = null,
        /** @description Strukturiertes Impressum des Anbieters */
        #[Type(ImpressumStrukt::class)]
        #[SerializedName('impressum_strukt')]
        protected ?ImpressumStrukt $impressumStrukt = null,
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

    public function getAnbieternr(): ?string
    {
        return $this->anbieternr;
    }

    public function setAnbieternr(?string $anbieternr): Anbieter
    {
        $this->anbieternr = $anbieternr;

        return $this;
    }

    public function getFirma(): string
    {
        return $this->firma;
    }

    public function setFirma(string $firma): Anbieter
    {
        $this->firma = $firma;

        return $this;
    }

    public function getOpenimmoAnid(): string
    {
        return $this->openimmoAnid;
    }

    public function setOpenimmoAnid(string $openimmoAnid): Anbieter
    {
        $this->openimmoAnid = $openimmoAnid;

        return $this;
    }

    public function getLizenzkennung(): ?string
    {
        return $this->lizenzkennung;
    }

    public function setLizenzkennung(?string $lizenzkennung): Anbieter
    {
        $this->lizenzkennung = $lizenzkennung;

        return $this;
    }

    public function getAnhang(): ?Anhang
    {
        return $this->anhang;
    }

    public function setAnhang(?Anhang $anhang): Anbieter
    {
        $this->anhang = $anhang;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getImmobilie(): array
    {
        return $this->immobilie;
    }

    public function setImmobilie(array $immobilie): Anbieter
    {
        $this->immobilie = $immobilie;

        return $this;
    }

    public function getImpressum(): ?string
    {
        return $this->impressum;
    }

    public function setImpressum(?string $impressum): Anbieter
    {
        $this->impressum = $impressum;

        return $this;
    }

    public function getImpressumStrukt(): ?ImpressumStrukt
    {
        return $this->impressumStrukt;
    }

    public function setImpressumStrukt(?ImpressumStrukt $impressumStrukt): Anbieter
    {
        $this->impressumStrukt = $impressumStrukt;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Anbieter
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Anbieter
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

    public function setUserDefinedExtend(array $userDefinedExtend): Anbieter
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
