<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Infrastruktur
 */
#[XmlRoot(name: 'infrastruktur')]
class Infrastruktur
{
    public function __construct(
        #[Type('bool')]
        #[SerializedName('zulieferung')]
        protected ?bool $zulieferung = null,
        #[Type(Ausblick::class)]
        #[SerializedName('ausblick')]
        protected ?Ausblick $ausblick = null,
        #[XmlList(entry: 'distanzen', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Distanzen>')]
        #[SkipWhenEmpty]
        #[SerializedName('distanzen')]
        protected array $distanzen = [],
        #[XmlList(entry: 'distanzen_sport', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\DistanzenSport>')]
        #[SkipWhenEmpty]
        #[SerializedName('distanzen_sport')]
        protected array $distanzenSport = [],
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getZulieferung(): ?bool
    {
        return $this->zulieferung;
    }

    public function setZulieferung(?bool $zulieferung): Infrastruktur
    {
        $this->zulieferung = $zulieferung;

        return $this;
    }

    public function getAusblick(): ?Ausblick
    {
        return $this->ausblick;
    }

    public function setAusblick(?Ausblick $ausblick): Infrastruktur
    {
        $this->ausblick = $ausblick;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getDistanzen(): array
    {
        return $this->distanzen;
    }

    public function setDistanzen(array $distanzen): Infrastruktur
    {
        $this->distanzen = $distanzen;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getDistanzenSport(): array
    {
        return $this->distanzenSport;
    }

    public function setDistanzenSport(array $distanzenSport): Infrastruktur
    {
        $this->distanzenSport = $distanzenSport;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Infrastruktur
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Infrastruktur
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

    public function setUserDefinedExtend(array $userDefinedExtend): Infrastruktur
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
