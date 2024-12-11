<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provider
 * Anbieterangaben
 *
 * @XmlRoot("anbieter")
 */
class Provider
{
    /**
     * @Type("string")
     *
     * @SerializedName("anbieternr")
     */
    protected ?string $providerNumber = null;

    /**
     * @Type("string")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("firma")
     */
    protected string $company = '';

    /**
     * @Type("string")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("openimmo_anid")
     */
    protected string $openImmoAnid = '';

    /**
     * @Type("string")
     *
     * @SerializedName("lizenzkennung")
     */
    protected ?string $licenseIdentifier = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\Attachment")
     *
     * @SerializedName("anhang")
     */
    protected ?Attachment $attachment = null;

    /**
     * @XmlList(inline = true, entry = "immobilie")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\RealEstate>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("immobilie")
     */
    protected array $realEstate = [];

    /**
     * @Type("string")
     *
     * @SerializedName("impressum")
     */
    protected ?string $imprint = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\ImprintStructure")
     *
     * @SerializedName("impressum_strukt")
     */
    protected ?ImprintStructure $imprintStructure = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedSimplefield>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_simplefield")
     */
    protected array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedAnyfield>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_anyfield")
     */
    protected array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedExtend>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_extend")
     */
    protected array $userDefinedExtend = [];

    public function __construct(
        ?string $providerNumber = null,
        string $company = '',
        string $openImmoAnid = '',
        ?string $licenseIdentifier = null,
        ?Attachment $attachment = null,
        array $realEstate = [],
        ?string $imprint = null,
        ?ImprintStructure $imprintStructure = null,
        array $userDefinedSimplefield = [],
        array $userDefinedAnyfield = [],
        array $userDefinedExtend = [],
    ) {
        $this->providerNumber = $providerNumber;
        $this->company = $company;
        $this->openImmoAnid = $openImmoAnid;
        $this->licenseIdentifier = $licenseIdentifier;
        $this->attachment = $attachment;
        $this->realEstate = $realEstate;
        $this->imprint = $imprint;
        $this->imprintStructure = $imprintStructure;
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        $this->userDefinedExtend = $userDefinedExtend;
    }

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
        return $this->realEstate ?? [];
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
        return $this->userDefinedSimplefield ?? [];
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
        return $this->userDefinedAnyfield ?? [];
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
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Provider
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
