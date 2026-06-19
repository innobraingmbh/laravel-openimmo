<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ContactPerson
 */
#[Description('Contact person of the provider for the property')]
#[XmlRoot(name: 'kontaktperson')]
class ContactPerson
{
    public function __construct(
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Central email address of the provider')]
        #[SerializedName('email_zentrale')]
        protected ?string $centralEmail = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Direct email address of the contact person')]
        #[SerializedName('email_direkt')]
        protected ?string $directEmail = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Central phone number of the provider')]
        #[SerializedName('tel_zentrale')]
        protected ?string $centralPhoneNumber = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Phone extension of the contact person')]
        #[SerializedName('tel_durchw')]
        protected ?string $phoneExtension = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Fax number of the contact person')]
        #[SerializedName('tel_fax')]
        protected ?string $faxNumber = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Mobile phone number of the contact person')]
        #[SerializedName('tel_handy')]
        protected ?string $mobileNumber = null,
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Last name of the contact person')]
        #[SerializedName('name')]
        protected string $name = '',
        #[Type('string')]
        #[Description('First name of the contact person')]
        #[SerializedName('vorname')]
        protected ?string $firstName = null,
        #[Type('string')]
        #[Description('Title or academic degree of the contact person')]
        #[SerializedName('titel')]
        protected ?string $title = null,
        #[Type('string')]
        #[Description('Salutation of the contact person')]
        #[SerializedName('anrede')]
        protected ?string $salutation = null,
        #[Type('string')]
        #[Description('Position or job title of the contact person')]
        #[SerializedName('position')]
        protected ?string $position = null,
        #[Type('string')]
        #[Description('Letter salutation of the contact person')]
        #[SerializedName('anrede_brief')]
        protected ?string $letterSalutation = null,
        #[Type('string')]
        #[Description('Company name of the provider')]
        #[SerializedName('firma')]
        protected ?string $company = null,
        #[Type('string')]
        #[Description('Additional free-text field')]
        #[SerializedName('zusatzfeld')]
        protected ?string $additionalField = null,
        #[Type('string')]
        #[Description('Street of the property')]
        #[SerializedName('strasse')]
        protected ?string $street = null,
        #[Type('string')]
        #[Description('House number of the property')]
        #[SerializedName('hausnummer')]
        protected ?string $houseNumber = null,
        #[Type('string')]
        #[Description('Postal code of the property')]
        #[SerializedName('plz')]
        protected ?string $postalCode = null,
        #[Type('string')]
        #[Description('City or town of the property')]
        #[SerializedName('ort')]
        protected ?string $city = null,
        #[Type('string')]
        #[Description('PO box number')]
        #[SerializedName('postfach')]
        protected ?string $poBox = null,
        #[Type('string')]
        #[Description('Postal code of the PO box')]
        #[SerializedName('postf_plz')]
        protected ?string $poBoxPostalCode = null,
        #[Type('string')]
        #[Description('City of the PO box')]
        #[SerializedName('postf_ort')]
        protected ?string $poBoxCity = null,
        #[Type(Country::class)]
        #[Description('Country of the property')]
        #[SerializedName('land')]
        protected ?Country $country = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Private email address of the contact person')]
        #[SerializedName('email_privat')]
        protected ?string $privateEmail = null,
        #[XmlList(entry: 'email_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\OtherEmail>')]
        #[SkipWhenEmpty]
        #[Description('Other email address')]
        #[SerializedName('email_sonstige')]
        protected array $otherEmail = [],
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Email address for feedback')]
        #[SerializedName('email_feedback')]
        protected ?string $feedbackEmail = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[Description('Private phone number of the contact person')]
        #[SerializedName('tel_privat')]
        protected ?string $privatePhoneNumber = null,
        #[XmlList(entry: 'tel_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\OtherPhone>')]
        #[SkipWhenEmpty]
        #[Description('Other phone number')]
        #[SerializedName('tel_sonstige')]
        protected array $otherPhoneNumber = [],
        #[Type('string')]
        #[Description('Website or URL of the contact person or provider')]
        #[SerializedName('url')]
        protected ?string $url = null,
        #[Type('bool')]
        #[Description('Address released for publication')]
        #[SerializedName('adressfreigabe')]
        protected ?bool $addressRelease = null,
        #[Type('string')]
        #[Description('Person number of the contact person')]
        #[SerializedName('personennummer')]
        protected ?string $personNumber = null,
        #[Type('string')]
        #[Description('Property trustee ID of the contact person')]
        #[SerializedName('immobilientreuhaenderid')]
        protected ?string $propertyTrusteeId = null,
        #[Type(Photo::class)]
        #[Description('Photo of the contact person or property')]
        #[SerializedName('foto')]
        protected ?Photo $photo = null,
        #[Type('string')]
        #[Description('Reference ID of the contact person')]
        #[SerializedName('referenz_id')]
        protected ?string $referenceId = null,
        #[Type('string')]
        #[Description('Free text field')]
        #[SerializedName('freitextfeld')]
        protected ?string $freeTextField = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[Description('User-defined simple free field')]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[Description('User-defined free field with arbitrary content')]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[Description('User-defined extension')]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getCentralEmail(): ?string
    {
        return $this->centralEmail;
    }

    public function setCentralEmail(?string $centralEmail): ContactPerson
    {
        $this->centralEmail = $centralEmail;

        return $this;
    }

    public function getDirectEmail(): ?string
    {
        return $this->directEmail;
    }

    public function setDirectEmail(?string $directEmail): ContactPerson
    {
        $this->directEmail = $directEmail;

        return $this;
    }

    public function getCentralPhoneNumber(): ?string
    {
        return $this->centralPhoneNumber;
    }

    public function setCentralPhoneNumber(?string $centralPhoneNumber): ContactPerson
    {
        $this->centralPhoneNumber = $centralPhoneNumber;

        return $this;
    }

    public function getPhoneExtension(): ?string
    {
        return $this->phoneExtension;
    }

    public function setPhoneExtension(?string $phoneExtension): ContactPerson
    {
        $this->phoneExtension = $phoneExtension;

        return $this;
    }

    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(?string $faxNumber): ContactPerson
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber(?string $mobileNumber): ContactPerson
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ContactPerson
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): ContactPerson
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): ContactPerson
    {
        $this->title = $title;

        return $this;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $salutation): ContactPerson
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): ContactPerson
    {
        $this->position = $position;

        return $this;
    }

    public function getLetterSalutation(): ?string
    {
        return $this->letterSalutation;
    }

    public function setLetterSalutation(?string $letterSalutation): ContactPerson
    {
        $this->letterSalutation = $letterSalutation;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): ContactPerson
    {
        $this->company = $company;

        return $this;
    }

    public function getAdditionalField(): ?string
    {
        return $this->additionalField;
    }

    public function setAdditionalField(?string $additionalField): ContactPerson
    {
        $this->additionalField = $additionalField;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): ContactPerson
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): ContactPerson
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): ContactPerson
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): ContactPerson
    {
        $this->city = $city;

        return $this;
    }

    public function getPoBox(): ?string
    {
        return $this->poBox;
    }

    public function setPoBox(?string $poBox): ContactPerson
    {
        $this->poBox = $poBox;

        return $this;
    }

    public function getPoBoxPostalCode(): ?string
    {
        return $this->poBoxPostalCode;
    }

    public function setPoBoxPostalCode(?string $poBoxPostalCode): ContactPerson
    {
        $this->poBoxPostalCode = $poBoxPostalCode;

        return $this;
    }

    public function getPoBoxCity(): ?string
    {
        return $this->poBoxCity;
    }

    public function setPoBoxCity(?string $poBoxCity): ContactPerson
    {
        $this->poBoxCity = $poBoxCity;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): ContactPerson
    {
        $this->country = $country;

        return $this;
    }

    public function getPrivateEmail(): ?string
    {
        return $this->privateEmail;
    }

    public function setPrivateEmail(?string $privateEmail): ContactPerson
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

    public function setOtherEmail(array $otherEmail): ContactPerson
    {
        $this->otherEmail = $otherEmail;

        return $this;
    }

    public function getFeedbackEmail(): ?string
    {
        return $this->feedbackEmail;
    }

    public function setFeedbackEmail(?string $feedbackEmail): ContactPerson
    {
        $this->feedbackEmail = $feedbackEmail;

        return $this;
    }

    public function getPrivatePhoneNumber(): ?string
    {
        return $this->privatePhoneNumber;
    }

    public function setPrivatePhoneNumber(?string $privatePhoneNumber): ContactPerson
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

    public function setOtherPhoneNumber(array $otherPhoneNumber): ContactPerson
    {
        $this->otherPhoneNumber = $otherPhoneNumber;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): ContactPerson
    {
        $this->url = $url;

        return $this;
    }

    public function getAddressRelease(): ?bool
    {
        return $this->addressRelease;
    }

    public function setAddressRelease(?bool $addressRelease): ContactPerson
    {
        $this->addressRelease = $addressRelease;

        return $this;
    }

    public function getPersonNumber(): ?string
    {
        return $this->personNumber;
    }

    public function setPersonNumber(?string $personNumber): ContactPerson
    {
        $this->personNumber = $personNumber;

        return $this;
    }

    public function getPropertyTrusteeId(): ?string
    {
        return $this->propertyTrusteeId;
    }

    public function setPropertyTrusteeId(?string $propertyTrusteeId): ContactPerson
    {
        $this->propertyTrusteeId = $propertyTrusteeId;

        return $this;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function setPhoto(?Photo $photo): ContactPerson
    {
        $this->photo = $photo;

        return $this;
    }

    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    public function setReferenceId(?string $referenceId): ContactPerson
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    public function getFreeTextField(): ?string
    {
        return $this->freeTextField;
    }

    public function setFreeTextField(?string $freeTextField): ContactPerson
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

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): ContactPerson
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): ContactPerson
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

    public function setUserDefinedExtend(array $userDefinedExtend): ContactPerson
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
