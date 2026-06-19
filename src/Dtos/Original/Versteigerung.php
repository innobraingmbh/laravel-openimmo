<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Versteigerung
 * Angaben zu einer Versteigerung. Wenn es ein Objekt in Zwangsverteigerung ist, dann muss das element "zwangsversteigerung" auf true/1 gesetzt werden.
 */
#[Description('Zwangsversteigerungsinformationen der Immobilie')]
#[XmlRoot(name: 'versteigerung')]
class Versteigerung
{
    public function __construct(
        #[Type('bool')]
        #[Description('Zwangsverkauf oder Notverkauf')]
        #[SerializedName('zwangsversteigerung')]
        protected ?bool $zwangsversteigerung = null,
        #[Type('string')]
        #[Description('Aktenzeichen der Zwangsversteigerung')]
        #[SerializedName('aktenzeichen')]
        protected ?string $aktenzeichen = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[Description('Datum des Zwangsverkaufs')]
        #[SerializedName('zvtermin')]
        protected ?DateTime $zvtermin = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[Description('Zusätzliches Datum')]
        #[SerializedName('zusatztermin')]
        protected ?DateTime $zusatztermin = null,
        #[Type('string')]
        #[Description('Zuständiges Amtsgericht')]
        #[SerializedName('amtsgericht')]
        protected ?string $amtsgericht = null,
        #[Type('float')]
        #[Description('Marktwert der Immobilie')]
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
