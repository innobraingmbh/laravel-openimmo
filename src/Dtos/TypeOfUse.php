<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TypeOfUse
 * nutzungsart
 */
#[XmlRoot(name: 'nutzungsart')]
class TypeOfUse
{
    public function __construct(
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WOHNEN')]
        protected bool $living = false,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('GEWERBE')]
        protected bool $commercial = false,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ANLAGE')]
        protected ?bool $facility = null,
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('WAZ')]
        protected ?bool $waz = null
    ) {}

    public function getLiving(): bool
    {
        return $this->living;
    }

    public function setLiving(bool $living): TypeOfUse
    {
        $this->living = $living;

        return $this;
    }

    public function getCommercial(): bool
    {
        return $this->commercial;
    }

    public function setCommercial(bool $commercial): TypeOfUse
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getFacility(): ?bool
    {
        return $this->facility;
    }

    public function setFacility(?bool $facility): TypeOfUse
    {
        $this->facility = $facility;

        return $this;
    }

    public function getWaz(): ?bool
    {
        return $this->waz;
    }

    public function setWaz(?bool $waz): TypeOfUse
    {
        $this->waz = $waz;

        return $this;
    }
}
