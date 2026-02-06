<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Services
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 *
 */
#[XmlRoot(name: "serviceleistungen")]
class Services
{
    public function __construct(
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("BETREUTES_WOHNEN")]
        protected ?bool $assistedLiving = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("CATERING")]
        protected ?bool $catering = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("REINIGUNG")]
        protected ?bool $cleaning = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("EINKAUF")]
        protected ?bool $shopping = null,
        #[Type("bool")]
        #[XmlAttribute]
        #[SerializedName("WACHDIENST")]
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
