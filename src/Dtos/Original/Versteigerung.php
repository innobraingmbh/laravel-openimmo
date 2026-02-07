<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Versteigerung
 * Angaben zu einer Versteigerung. Wenn es ein Objekt in Zwangsverteigerung ist, dann muss das element "zwangsversteigerung" auf true/1 gesetzt werden.
 */
#[XmlRoot(name: 'versteigerung')]
class Versteigerung
{
    public function __construct(
        #[Type('bool')]
        #[SerializedName('zwangsversteigerung')]
        protected ?bool $zwangsversteigerung = null,
        #[Type('string')]
        #[SerializedName('aktenzeichen')]
        protected ?string $aktenzeichen = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[SerializedName('zvtermin')]
        protected ?DateTime $zvtermin = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[SerializedName('zusatztermin')]
        protected ?DateTime $zusatztermin = null,
        #[Type('string')]
        #[SerializedName('amtsgericht')]
        protected ?string $amtsgericht = null,
        #[Type('float')]
        #[SerializedName('verkehrswert')]
        protected ?float $verkehrswert = null
    ) {}

    public function getZwangsversteigerung(): ?bool
    {
        return $this->zwangsversteigerung;
    }

    public function setZwangsversteigerung(?bool $zwangsversteigerung): Versteigerung
    {
        $this->zwangsversteigerung = $zwangsversteigerung;

        return $this;
    }

    public function getAktenzeichen(): ?string
    {
        return $this->aktenzeichen;
    }

    public function setAktenzeichen(?string $aktenzeichen): Versteigerung
    {
        $this->aktenzeichen = $aktenzeichen;

        return $this;
    }

    public function getZvtermin(): ?DateTime
    {
        return $this->zvtermin;
    }

    public function setZvtermin(?DateTime $zvtermin): Versteigerung
    {
        $this->zvtermin = $zvtermin;

        return $this;
    }

    public function getZusatztermin(): ?DateTime
    {
        return $this->zusatztermin;
    }

    public function setZusatztermin(?DateTime $zusatztermin): Versteigerung
    {
        $this->zusatztermin = $zusatztermin;

        return $this;
    }

    public function getAmtsgericht(): ?string
    {
        return $this->amtsgericht;
    }

    public function setAmtsgericht(?string $amtsgericht): Versteigerung
    {
        $this->amtsgericht = $amtsgericht;

        return $this;
    }

    public function getVerkehrswert(): ?float
    {
        return $this->verkehrswert;
    }

    public function setVerkehrswert(?float $verkehrswert): Versteigerung
    {
        $this->verkehrswert = $verkehrswert;

        return $this;
    }
}
