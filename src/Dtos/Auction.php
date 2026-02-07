<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Auction
 * Angaben zu einer Versteigerung. Wenn es ein Objekt in Zwangsverteigerung ist, dann muss das element "zwangsversteigerung" auf true/1 gesetzt werden.
 */
#[XmlRoot(name: 'versteigerung')]
class Auction
{
    public function __construct(
        #[Type('bool')]
        #[SerializedName('zwangsversteigerung')]
        protected ?bool $forcedSale = null,
        #[Type('string')]
        #[SerializedName('aktenzeichen')]
        protected ?string $fileNumber = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[SerializedName('zvtermin')]
        protected ?DateTime $forcedSaleDate = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[SerializedName('zusatztermin')]
        protected ?DateTime $additionalDate = null,
        #[Type('string')]
        #[SerializedName('amtsgericht')]
        protected ?string $districtCourt = null,
        #[Type('float')]
        #[SerializedName('verkehrswert')]
        protected ?float $marketValue = null
    ) {}

    public function getForcedSale(): ?bool
    {
        return $this->forcedSale;
    }

    public function setForcedSale(?bool $forcedSale): Auction
    {
        $this->forcedSale = $forcedSale;

        return $this;
    }

    public function getFileNumber(): ?string
    {
        return $this->fileNumber;
    }

    public function setFileNumber(?string $fileNumber): Auction
    {
        $this->fileNumber = $fileNumber;

        return $this;
    }

    public function getForcedSaleDate(): ?DateTime
    {
        return $this->forcedSaleDate;
    }

    public function setForcedSaleDate(?DateTime $forcedSaleDate): Auction
    {
        $this->forcedSaleDate = $forcedSaleDate;

        return $this;
    }

    public function getAdditionalDate(): ?DateTime
    {
        return $this->additionalDate;
    }

    public function setAdditionalDate(?DateTime $additionalDate): Auction
    {
        $this->additionalDate = $additionalDate;

        return $this;
    }

    public function getDistrictCourt(): ?string
    {
        return $this->districtCourt;
    }

    public function setDistrictCourt(?string $districtCourt): Auction
    {
        $this->districtCourt = $districtCourt;

        return $this;
    }

    public function getMarketValue(): ?float
    {
        return $this->marketValue;
    }

    public function setMarketValue(?float $marketValue): Auction
    {
        $this->marketValue = $marketValue;

        return $this;
    }
}
