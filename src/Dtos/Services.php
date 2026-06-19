<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Services
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 */
#[Description('Services offered for the property or by the provider')]
#[XmlRoot(name: 'serviceleistungen')]
class Services
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BETREUTES_WOHNEN')]
        #[Description('Assisted living available')]
        protected ?bool $assistedLiving = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('CATERING')]
        #[Description('Catering service available')]
        protected ?bool $catering = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('REINIGUNG')]
        #[Description('Cleaning service available')]
        protected ?bool $cleaning = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('EINKAUF')]
        #[Description('Shopping facilities nearby')]
        protected ?bool $shopping = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WACHDIENST')]
        #[Description('Security service available')]
        protected ?bool $securityService = null
    ) {}

    public function getAssistedLiving(): ?bool
    {
        return $this->assistedLiving;
    }

    public function setAssistedLiving(?bool $assistedLiving): Services
    {
        $this->assistedLiving = $assistedLiving;

        return $this;
    }

    public function getCatering(): ?bool
    {
        return $this->catering;
    }

    public function setCatering(?bool $catering): Services
    {
        $this->catering = $catering;

        return $this;
    }

    public function getCleaning(): ?bool
    {
        return $this->cleaning;
    }

    public function setCleaning(?bool $cleaning): Services
    {
        $this->cleaning = $cleaning;

        return $this;
    }

    public function getShopping(): ?bool
    {
        return $this->shopping;
    }

    public function setShopping(?bool $shopping): Services
    {
        $this->shopping = $shopping;

        return $this;
    }

    public function getSecurityService(): ?bool
    {
        return $this->securityService;
    }

    public function setSecurityService(?bool $securityService): Services
    {
        $this->securityService = $securityService;

        return $this;
    }
}
