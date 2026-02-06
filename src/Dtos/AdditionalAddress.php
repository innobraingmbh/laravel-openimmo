<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AdditionalAddress
 */
#[XmlRoot(name: 'weitere_adresse')]
class AdditionalAddress
{
    public function __construct(
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('adressart')]
        protected string $addressType = '',
        #[Type('string')]
        #[SerializedName('vorname')]
        protected ?string $firstName = null,
        #[Type('string')]
        #[SerializedName('name')]
        protected ?string $name = null,
        #[Type('string')]
        #[SerializedName('titel')]
        protected ?string $title = null,
        #[Type('string')]
        #[SerializedName('anrede')]
        protected ?string $salutation = null,
        #[Type('string')]
        #[SerializedName('anrede_brief')]
        protected ?string $letterSalutation = null,
        #[Type('string')]
        #[SerializedName('firma')]
        protected ?string $company = null,
        #[Type('string')]
        #[SerializedName('zusatzfeld')]
        protected ?string $additionalField = null,
        #[Type('string')]
        #[SerializedName('strasse')]
        protected ?string $street = null,
        #[Type('string')]
        #[SerializedName('hausnummer')]
        protected ?string $houseNumber = null,
        #[Type('string')]
        #[SerializedName('plz')]
        protected ?string $postalCode = null,
        #[Type('string')]
        #[SerializedName('ort')]
        protected ?string $city = null,
        #[Type('string')]
        #[SerializedName('postfach')]
        protected ?string $poBox = null,
        #[Type('string')]
        #[SerializedName('postf_plz')]
        protected ?string $poBoxPostalCode = null,
        #[Type('string')]
        #[SerializedName('postf_ort')]
        protected ?string $poBoxCity = null,
        #[Type("Innobrain\OpenImmo\Dtos\Country")]
        #[SerializedName('land')]
        protected ?Country $country = null,
        #[Type('string')]
        #[SerializedName('email_zentrale')]
        protected ?string $centralEmail = null,
        #[Type('string')]
        #[SerializedName('email_direkt')]
        protected ?string $directEmail = null,
        #[Type('string')]
        #[SerializedName('email_privat')]
        protected ?string $privateEmail = null,
        #[XmlList(inline: true, entry: 'email_sonstige')]
        #[Type("array<Innobrain\OpenImmo\Dtos\OtherEmail>")]
        #[SkipWhenEmpty]
        #[SerializedName('email_sonstige')]
        protected array $otherEmail = [],
        #[Type('string')]
        #[SerializedName('tel_durchw')]
        protected ?string $phoneExtension = null,
        #[Type('string')]
        #[SerializedName('tel_zentrale')]
        protected ?string $centralPhoneNumber = null,
        #[Type('string')]
        #[SerializedName('tel_handy')]
        protected ?string $mobileNumber = null,
        #[Type('string')]
        #[SerializedName('tel_fax')]
        protected ?string $faxNumber = null,
        #[Type('string')]
        #[SerializedName('tel_privat')]
        protected ?string $privatePhoneNumber = null,
        #[XmlList(inline: true, entry: 'tel_sonstige')]
        #[Type("array<Innobrain\OpenImmo\Dtos\OtherPhone>")]
        #[SkipWhenEmpty]
        #[SerializedName('tel_sonstige')]
        protected array $otherPhoneNumber = [],
        #[Type('string')]
        #[SerializedName('url')]
        protected ?string $url = null,
        #[Type('bool')]
        #[SerializedName('adressfreigabe')]
        protected ?bool $addressRelease = null,
        #[Type('string')]
        #[SerializedName('personennummer')]
        protected ?string $personNumber = null,
        #[Type('string')]
        #[SerializedName('freitextfeld')]
        protected ?string $freeTextField = null,
        #[XmlList(inline: true, entry: 'user_defined_simplefield')]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(inline: true, entry: 'user_defined_anyfield')]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(inline: true, entry: 'user_defined_extend')]
        #[Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getAddressType(): string
    {
        return $this->addressType;
    }

    public function setAddressType(string $addressType): AdditionalAddress
    {
        $this->addressType = $addressType;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): AdditionalAddress
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): AdditionalAddress
    {
        $this->name = $name;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): AdditionalAddress
    {
        $this->title = $title;

        return $this;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $salutation): AdditionalAddress
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getLetterSalutation(): ?string
    {
        return $this->letterSalutation;
    }

    public function setLetterSalutation(?string $letterSalutation): AdditionalAddress
    {
        $this->letterSalutation = $letterSalutation;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): AdditionalAddress
    {
        $this->company = $company;

        return $this;
    }

    public function getAdditionalField(): ?string
    {
        return $this->additionalField;
    }

    public function setAdditionalField(?string $additionalField): AdditionalAddress
    {
        $this->additionalField = $additionalField;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): AdditionalAddress
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): AdditionalAddress
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): AdditionalAddress
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): AdditionalAddress
    {
        $this->city = $city;

        return $this;
    }

    public function getPoBox(): ?string
    {
        return $this->poBox;
    }

    public function setPoBox(?string $poBox): AdditionalAddress
    {
        $this->poBox = $poBox;

        return $this;
    }

    public function getPoBoxPostalCode(): ?string
    {
        return $this->poBoxPostalCode;
    }

    public function setPoBoxPostalCode(?string $poBoxPostalCode): AdditionalAddress
    {
        $this->poBoxPostalCode = $poBoxPostalCode;

        return $this;
    }

    public function getPoBoxCity(): ?string
    {
        return $this->poBoxCity;
    }

    public function setPoBoxCity(?string $poBoxCity): AdditionalAddress
    {
        $this->poBoxCity = $poBoxCity;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): AdditionalAddress
    {
        $this->country = $country;

        return $this;
    }

    public function getCentralEmail(): ?string
    {
        return $this->centralEmail;
    }

    public function setCentralEmail(?string $centralEmail): AdditionalAddress
    {
        $this->centralEmail = $centralEmail;

        return $this;
    }

    public function getDirectEmail(): ?string
    {
        return $this->directEmail;
    }

    public function setDirectEmail(?string $directEmail): AdditionalAddress
    {
        $this->directEmail = $directEmail;

        return $this;
    }

    public function getPrivateEmail(): ?string
    {
        return $this->privateEmail;
    }

    public function setPrivateEmail(?string $privateEmail): AdditionalAddress
    {
        $this->privateEmail = $privateEmail;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getOtherEmail(): array
    {
        return $this->otherEmail;
    }

    public function setOtherEmail(array $otherEmail): AdditionalAddress
    {
        $this->otherEmail = $otherEmail;

        return $this;
    }

    public function getPhoneExtension(): ?string
    {
        return $this->phoneExtension;
    }

    public function setPhoneExtension(?string $phoneExtension): AdditionalAddress
    {
        $this->phoneExtension = $phoneExtension;

        return $this;
    }

    public function getCentralPhoneNumber(): ?string
    {
        return $this->centralPhoneNumber;
    }

    public function setCentralPhoneNumber(?string $centralPhoneNumber): AdditionalAddress
    {
        $this->centralPhoneNumber = $centralPhoneNumber;

        return $this;
    }

    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber(?string $mobileNumber): AdditionalAddress
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(?string $faxNumber): AdditionalAddress
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    public function getPrivatePhoneNumber(): ?string
    {
        return $this->privatePhoneNumber;
    }

    public function setPrivatePhoneNumber(?string $privatePhoneNumber): AdditionalAddress
    {
        $this->privatePhoneNumber = $privatePhoneNumber;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getOtherPhoneNumber(): array
    {
        return $this->otherPhoneNumber;
    }

    public function setOtherPhoneNumber(array $otherPhoneNumber): AdditionalAddress
    {
        $this->otherPhoneNumber = $otherPhoneNumber;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): AdditionalAddress
    {
        $this->url = $url;

        return $this;
    }

    public function getAddressRelease(): ?bool
    {
        return $this->addressRelease;
    }

    public function setAddressRelease(?bool $addressRelease): AdditionalAddress
    {
        $this->addressRelease = $addressRelease;

        return $this;
    }

    public function getPersonNumber(): ?string
    {
        return $this->personNumber;
    }

    public function setPersonNumber(?string $personNumber): AdditionalAddress
    {
        $this->personNumber = $personNumber;

        return $this;
    }

    public function getFreeTextField(): ?string
    {
        return $this->freeTextField;
    }

    public function setFreeTextField(?string $freeTextField): AdditionalAddress
    {
        $this->freeTextField = $freeTextField;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): AdditionalAddress
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): AdditionalAddress
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

    public function setUserDefinedExtend(array $userDefinedExtend): AdditionalAddress
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
