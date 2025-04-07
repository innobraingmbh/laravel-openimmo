<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BiddingProcess
 * Angaben zum Bieterverfahren
 *
 * @XmlRoot("bieterverfahren")
 */
class BiddingProcess
{
    public function __construct(
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("beginn_angebotsphase")
         */
        protected ?DateTime $startOfOfferPhase = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("besichtigungstermin")
         */
        protected ?DateTime $viewingAppointment = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("besichtigungstermin_2")
         */
        protected ?DateTime $viewingAppointment2 = null,
        /**
         * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>")
         *
         * @SerializedName("beginn_bietzeit")
         */
        protected ?DateTime $startOfBiddingTime = null,
        /**
         * @Type("DateTime<'Y-m-d'>")
         *
         * @SerializedName("ende_bietzeit")
         */
        protected ?DateTime $endOfBiddingTime = null,
        /**
         * @Type("bool")
         *
         * @SerializedName("hoechstgebot_zeigen")
         */
        protected ?bool $showHighestBid = null,
        /**
         * @Type("float")
         *
         * @SerializedName("mindestpreis")
         */
        protected ?float $minimumPrice = null,
        /**
         * @XmlList(inline = true, entry = "user_defined_simplefield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_simplefield")
         */
        protected array $userDefinedSimplefield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_anyfield")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_anyfield")
         */
        protected array $userDefinedAnyfield = [],
        /**
         * @XmlList(inline = true, entry = "user_defined_extend")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("user_defined_extend")
         */
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
        return $this->userDefinedSimplefield ?? [];
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
        return $this->userDefinedAnyfield ?? [];
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
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): BiddingProcess
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
