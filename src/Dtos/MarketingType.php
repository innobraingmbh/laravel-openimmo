<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MarketingType
 * Vermarktungsart, Optionen kombinierbar, Kauf + Miete
 */
#[Description('Marketing type of the property (purchase or rent)')]
#[XmlRoot(name: 'vermarktungsart')]
class MarketingType
{
    public function __construct(
        /** required */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KAUF')]
        #[Description('Purchase property')]
        protected bool $purchase = false,
        /** required */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MIETE_PACHT')]
        #[Description('Rent or lease value')]
        protected bool $rentLease = false,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERBPACHT')]
        #[Description('Leasehold amount of the property')]
        protected ?bool $leasehold = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LEASING')]
        #[Description('Leasing of the property possible')]
        protected ?bool $leasing = null
    ) {}

    public function getPurchase(): bool
    {
        return $this->purchase;
    }

    public function setPurchase(bool $purchase): MarketingType
    {
        $this->purchase = $purchase;

        return $this;
    }

    public function getRentLease(): bool
    {
        return $this->rentLease;
    }

    public function setRentLease(bool $rentLease): MarketingType
    {
        $this->rentLease = $rentLease;

        return $this;
    }

    public function getLeasehold(): ?bool
    {
        return $this->leasehold;
    }

    public function setLeasehold(?bool $leasehold): MarketingType
    {
        $this->leasehold = $leasehold;

        return $this;
    }

    public function getLeasing(): ?bool
    {
        return $this->leasing;
    }

    public function setLeasing(?bool $leasing): MarketingType
    {
        $this->leasing = $leasing;

        return $this;
    }
}
