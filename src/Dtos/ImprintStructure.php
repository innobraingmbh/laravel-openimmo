<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ImprintStructure
 * Ergänzung ($V120)
 */
#[XmlRoot(name: 'impressum_strukt')]
class ImprintStructure
{
    public function __construct(
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('firmenname')]
        protected string $companyName = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('firmenanschrift')]
        protected string $companyAddress = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('telefon')]
        protected string $phone = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('vertretungsberechtigter')]
        protected string $authorizedRepresentative = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('berufsaufsichtsbehoerde')]
        protected string $professionalSupervisoryAuthority = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('handelsregister')]
        protected string $commercialRegister = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('handelsregister_nr')]
        protected string $commercialRegisterNumber = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('umsst-id')]
        protected string $vatId = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('steuernummer')]
        protected string $taxNumber = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('weiteres')]
        protected string $additional = ''
    ) {}

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): ImprintStructure
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyAddress(): string
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress(string $companyAddress): ImprintStructure
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): ImprintStructure
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAuthorizedRepresentative(): string
    {
        return $this->authorizedRepresentative;
    }

    public function setAuthorizedRepresentative(string $authorizedRepresentative): ImprintStructure
    {
        $this->authorizedRepresentative = $authorizedRepresentative;

        return $this;
    }

    public function getProfessionalSupervisoryAuthority(): string
    {
        return $this->professionalSupervisoryAuthority;
    }

    public function setProfessionalSupervisoryAuthority(string $professionalSupervisoryAuthority): ImprintStructure
    {
        $this->professionalSupervisoryAuthority = $professionalSupervisoryAuthority;

        return $this;
    }

    public function getCommercialRegister(): string
    {
        return $this->commercialRegister;
    }

    public function setCommercialRegister(string $commercialRegister): ImprintStructure
    {
        $this->commercialRegister = $commercialRegister;

        return $this;
    }

    public function getCommercialRegisterNumber(): string
    {
        return $this->commercialRegisterNumber;
    }

    public function setCommercialRegisterNumber(string $commercialRegisterNumber): ImprintStructure
    {
        $this->commercialRegisterNumber = $commercialRegisterNumber;

        return $this;
    }

    public function getVatId(): string
    {
        return $this->vatId;
    }

    public function setVatId(string $vatId): ImprintStructure
    {
        $this->vatId = $vatId;

        return $this;
    }

    public function getTaxNumber(): string
    {
        return $this->taxNumber;
    }

    public function setTaxNumber(string $taxNumber): ImprintStructure
    {
        $this->taxNumber = $taxNumber;

        return $this;
    }

    public function getAdditional(): string
    {
        return $this->additional;
    }

    public function setAdditional(string $additional): ImprintStructure
    {
        $this->additional = $additional;

        return $this;
    }
}
