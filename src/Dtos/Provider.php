<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provider
 * Anbieterangaben
 *
 * @description Provider (agent or owner) of the property
 */
#[XmlRoot(name: 'anbieter')]
class Provider
{
    public function __construct(
        /** @description Provider number */
        #[Type('string')]
        #[SerializedName('anbieternr')]
        protected ?string $providerNumber = null,
        /** @description Company name of the provider */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('firma')]
        protected string $company = '',
        /** @description OpenImmo provider identifier (ANID) */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('openimmo_anid')]
        protected string $openImmoAnid = '',
        /** @description License identifier of the provider */
        #[Type('string')]
        #[SerializedName('lizenzkennung')]
        protected ?string $licenseIdentifier = null,
        /** @description Attachment (file) of the property */
        #[Type(Attachment::class)]
        #[SerializedName('anhang')]
        protected ?Attachment $attachment = null,
        /** @description Single real estate property */
        #[XmlList(entry: 'immobilie', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\RealEstate>')]
        #[SkipWhenEmpty]
        #[SerializedName('immobilie')]
        protected array $realEstate = [],
        /** @description Imprint of the provider */
        #[Type('string')]
        #[SerializedName('impressum')]
        protected ?string $imprint = null,
        /** @description Structured imprint of the provider */
        #[Type(ImprintStructure::class)]
        #[SerializedName('impressum_strukt')]
        protected ?ImprintStructure $imprintStructure = null,
        /** @description User-defined simple free field */
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        /** @description User-defined free field with arbitrary content */
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        /** @description User-defined extension */
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getProviderNumber(): ?string
    {
        return $this->providerNumber;
    }

    public function setProviderNumber(?string $providerNumber): Provider
    {
        $this->providerNumber = $providerNumber;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): Provider
    {
        $this->company = $company;

        return $this;
    }

    public function getOpenImmoAnid(): string
    {
        return $this->openImmoAnid;
    }

    public function setOpenImmoAnid(string $openImmoAnid): Provider
    {
        $this->openImmoAnid = $openImmoAnid;

        return $this;
    }

    public function getLicenseIdentifier(): ?string
    {
        return $this->licenseIdentifier;
    }

    public function setLicenseIdentifier(?string $licenseIdentifier): Provider
    {
        $this->licenseIdentifier = $licenseIdentifier;

        return $this;
    }

    public function getAttachment(): ?Attachment
    {
        return $this->attachment;
    }

    public function setAttachment(?Attachment $attachment): Provider
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getRealEstate(): array
    {
        return $this->realEstate;
    }

    public function setRealEstate(array $realEstate): Provider
    {
        $this->realEstate = $realEstate;

        return $this;
    }

    public function getImprint(): ?string
    {
        return $this->imprint;
    }

    public function setImprint(?string $imprint): Provider
    {
        $this->imprint = $imprint;

        return $this;
    }

    public function getImprintStructure(): ?ImprintStructure
    {
        return $this->imprintStructure;
    }

    public function setImprintStructure(?ImprintStructure $imprintStructure): Provider
    {
        $this->imprintStructure = $imprintStructure;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Provider
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Provider
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

    public function setUserDefinedExtend(array $userDefinedExtend): Provider
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
