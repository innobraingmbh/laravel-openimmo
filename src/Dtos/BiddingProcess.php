<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BiddingProcess
 * Angaben zum Bieterverfahren
 */
#[Description('Bidding process information for the property')]
#[XmlRoot(name: 'bieterverfahren')]
class BiddingProcess
{
    public function __construct(
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Start of the offer phase')]
        #[SerializedName('beginn_angebotsphase')]
        protected ?DateTime $startOfOfferPhase = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('First viewing appointment')]
        #[SerializedName('besichtigungstermin')]
        protected ?DateTime $viewingAppointment = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Second viewing appointment')]
        #[SerializedName('besichtigungstermin_2')]
        protected ?DateTime $viewingAppointment2 = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[Description('Start time of the bidding process')]
        #[SerializedName('beginn_bietzeit')]
        protected ?DateTime $startOfBiddingTime = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('End time of the bidding process')]
        #[SerializedName('ende_bietzeit')]
        protected ?DateTime $endOfBiddingTime = null,
        #[Type('bool')]
        #[Description('Show highest bid')]
        #[SerializedName('hoechstgebot_zeigen')]
        protected ?bool $showHighestBid = null,
        #[Type('float')]
        #[Description('Minimum price of the property')]
        #[SerializedName('mindestpreis')]
        protected ?float $minimumPrice = null,
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

    public function getStartOfOfferPhase(): ?DateTime
    {
        return $this->startOfOfferPhase;
    }

    public function setStartOfOfferPhase(?DateTime $startOfOfferPhase): BiddingProcess
    {
        $this->startOfOfferPhase = $startOfOfferPhase;

        return $this;
    }

    public function getViewingAppointment(): ?DateTime
    {
        return $this->viewingAppointment;
    }

    public function setViewingAppointment(?DateTime $viewingAppointment): BiddingProcess
    {
        $this->viewingAppointment = $viewingAppointment;

        return $this;
    }

    public function getViewingAppointment2(): ?DateTime
    {
        return $this->viewingAppointment2;
    }

    public function setViewingAppointment2(?DateTime $viewingAppointment2): BiddingProcess
    {
        $this->viewingAppointment2 = $viewingAppointment2;

        return $this;
    }

    public function getStartOfBiddingTime(): ?DateTime
    {
        return $this->startOfBiddingTime;
    }

    public function setStartOfBiddingTime(?DateTime $startOfBiddingTime): BiddingProcess
    {
        $this->startOfBiddingTime = $startOfBiddingTime;

        return $this;
    }

    public function getEndOfBiddingTime(): ?DateTime
    {
        return $this->endOfBiddingTime;
    }

    public function setEndOfBiddingTime(?DateTime $endOfBiddingTime): BiddingProcess
    {
        $this->endOfBiddingTime = $endOfBiddingTime;

        return $this;
    }

    public function getShowHighestBid(): ?bool
    {
        return $this->showHighestBid;
    }

    public function setShowHighestBid(?bool $showHighestBid): BiddingProcess
    {
        $this->showHighestBid = $showHighestBid;

        return $this;
    }

    public function getMinimumPrice(): ?float
    {
        return $this->minimumPrice;
    }

    public function setMinimumPrice(?float $minimumPrice): BiddingProcess
    {
        $this->minimumPrice = $minimumPrice;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): BiddingProcess
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): BiddingProcess
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

    public function setUserDefinedExtend(array $userDefinedExtend): BiddingProcess
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
