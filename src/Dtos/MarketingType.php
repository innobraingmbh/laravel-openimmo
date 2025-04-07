<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class MarketingType
 * Vermarktungsart, Optionen kombinierbar, Kauf + Miete
 *
 * @XmlRoot("vermarktungsart")
 */
class MarketingType
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("KAUF")
         * required
         */
        protected bool $purchase = false,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("MIETE_PACHT")
         * required
         */
        protected bool $rentLease = false,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("ERBPACHT")
         * optional
         */
        protected ?bool $leasehold = null,
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("LEASING")
         * optional
         */
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
