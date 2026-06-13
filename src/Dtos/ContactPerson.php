<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ContactPerson
 *
 * @description Contact person of the provider for the property
 */
#[XmlRoot(name: 'kontaktperson')]
class ContactPerson
{
    public function __construct(
        /**
         * Minimum length: 1
         *
         * @description Central email address of the provider
         */
        #[Type('string')]
        #[SerializedName('email_zentrale')]
        protected ?string $centralEmail = null,
        /**
         * Minimum length: 1
         *
         * @description Direct email address of the contact person
         */
        #[Type('string')]
        #[SerializedName('email_direkt')]
        protected ?string $directEmail = null,
        /**
         * Minimum length: 1
         *
         * @description Central phone number of the provider
         */
        #[Type('string')]
        #[SerializedName('tel_zentrale')]
        protected ?string $centralPhoneNumber = null,
        /**
         * Minimum length: 1
         *
         * @description Phone extension of the contact person
         */
        #[Type('string')]
        #[SerializedName('tel_durchw')]
        protected ?string $phoneExtension = null,
        /**
         * Minimum length: 1
         *
         * @description Fax number of the contact person
         */
        #[Type('string')]
        #[SerializedName('tel_fax')]
        protected ?string $faxNumber = null,
        /**
         * Minimum length: 1
         *
         * @description Mobile phone number of the contact person
         */
        #[Type('string')]
        #[SerializedName('tel_handy')]
        protected ?string $mobileNumber = null,
        /** @description Last name of the contact person */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('name')]
        protected string $name = '',
        /** @description First name of the contact person */
        #[Type('string')]
        #[SerializedName('vorname')]
        protected ?string $firstName = null,
        /** @description Title or academic degree of the contact person */
        #[Type('string')]
        #[SerializedName('titel')]
        protected ?string $title = null,
        /** @description Salutation of the contact person */
        #[Type('string')]
        #[SerializedName('anrede')]
        protected ?string $salutation = null,
        /** @description Position or job title of the contact person */
        #[Type('string')]
        #[SerializedName('position')]
        protected ?string $position = null,
        /** @description Letter salutation of the contact person */
        #[Type('string')]
        #[SerializedName('anrede_brief')]
        protected ?string $letterSalutation = null,
        /** @description Company name of the provider */
        #[Type('string')]
        #[SerializedName('firma')]
        protected ?string $company = null,
        /** @description Additional free-text field */
        #[Type('string')]
        #[SerializedName('zusatzfeld')]
        protected ?string $additionalField = null,
        /** @description Street of the property */
        #[Type('string')]
        #[SerializedName('strasse')]
        protected ?string $street = null,
        /** @description House number of the property */
        #[Type('string')]
        #[SerializedName('hausnummer')]
        protected ?string $houseNumber = null,
        /** @description Postal code of the property */
        #[Type('string')]
        #[SerializedName('plz')]
        protected ?string $postalCode = null,
        /** @description City or town of the property */
        #[Type('string')]
        #[SerializedName('ort')]
        protected ?string $city = null,
        /** @description PO box number */
        #[Type('string')]
        #[SerializedName('postfach')]
        protected ?string $poBox = null,
        /** @description Postal code of the PO box */
        #[Type('string')]
        #[SerializedName('postf_plz')]
        protected ?string $poBoxPostalCode = null,
        /** @description City of the PO box */
        #[Type('string')]
        #[SerializedName('postf_ort')]
        protected ?string $poBoxCity = null,
        /** @description Country of the property */
        #[Type(Country::class)]
        #[SerializedName('land')]
        protected ?Country $country = null,
        /**
         * Minimum length: 1
         *
         * @description Private email address of the contact person
         */
        #[Type('string')]
        #[SerializedName('email_privat')]
        protected ?string $privateEmail = null,
        /** @description Other email address */
        #[XmlList(entry: 'email_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\OtherEmail>')]
        #[SkipWhenEmpty]
        #[SerializedName('email_sonstige')]
        protected array $otherEmail = [],
        /**
         * Minimum length: 1
         *
         * @description Email address for feedback
         */
        #[Type('string')]
        #[SerializedName('email_feedback')]
        protected ?string $feedbackEmail = null,
        /**
         * Minimum length: 1
         *
         * @description Private phone number of the contact person
         */
        #[Type('string')]
        #[SerializedName('tel_privat')]
        protected ?string $privatePhoneNumber = null,
        /** @description Other phone number */
        #[XmlList(entry: 'tel_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\OtherPhone>')]
        #[SkipWhenEmpty]
        #[SerializedName('tel_sonstige')]
        protected array $otherPhoneNumber = [],
        /** @description Website or URL of the contact person or provider */
        #[Type('string')]
        #[SerializedName('url')]
        protected ?string $url = null,
        /** @description Address released for publication */
        #[Type('bool')]
        #[SerializedName('adressfreigabe')]
        protected ?bool $addressRelease = null,
        /** @description Person number of the contact person */
        #[Type('string')]
        #[SerializedName('personennummer')]
        protected ?string $personNumber = null,
        /** @description Property trustee ID of the contact person */
        #[Type('string')]
        #[SerializedName('immobilientreuhaenderid')]
        protected ?string $propertyTrusteeId = null,
        /** @description Photo of the contact person or property */
        #[Type(Photo::class)]
        #[SerializedName('foto')]
        protected ?Photo $photo = null,
        /** @description Reference ID of the contact person */
        #[Type('string')]
        #[SerializedName('referenz_id')]
        protected ?string $referenceId = null,
        /** @description Free text field */
        #[Type('string')]
        #[SerializedName('freitextfeld')]
        protected ?string $freeTextField = null,
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
