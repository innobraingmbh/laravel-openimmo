<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektkategorie
 */
#[XmlRoot(name: 'objektkategorie')]
class Objektkategorie
{
    public function __construct(
        #[Type(Nutzungsart::class)]
        #[SerializedName('nutzungsart')]
        protected ?Nutzungsart $nutzungsart = null,
        #[Type(Vermarktungsart::class)]
        #[SerializedName('vermarktungsart')]
        protected ?Vermarktungsart $vermarktungsart = null,
        #[Type(Objektart::class)]
        #[SerializedName('objektart')]
        protected ?Objektart $objektart = null,
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

    public function getNutzungsart(): ?Nutzungsart
    {
        return $this->nutzungsart;
    }

    public function setNutzungsart(?Nutzungsart $nutzungsart): Objektkategorie
    {
        $this->nutzungsart = $nutzungsart;

        return $this;
    }

    public function getVermarktungsart(): ?Vermarktungsart
    {
        return $this->vermarktungsart;
    }

    public function setVermarktungsart(?Vermarktungsart $vermarktungsart): Objektkategorie
    {
        $this->vermarktungsart = $vermarktungsart;

        return $this;
    }

    public function getObjektart(): ?Objektart
    {
        return $this->objektart;
    }

    public function setObjektart(?Objektart $objektart): Objektkategorie
    {
        $this->objektart = $objektart;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Objektkategorie
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Objektkategorie
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

    public function setUserDefinedExtend(array $userDefinedExtend): Objektkategorie
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
