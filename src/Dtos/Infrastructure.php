<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Infrastructure
 */
#[Description('Infrastructure information of the property (distances, connections)')]
#[XmlRoot(name: 'infrastruktur')]
class Infrastructure
{
    public function __construct(
        #[Type('bool')]
        #[Description('Utility supply connections available')]
        #[SerializedName('zulieferung')]
        protected ?bool $supply = null,
        #[Type(View::class)]
        #[Description('View or outlook of the property')]
        #[SerializedName('ausblick')]
        protected ?View $view = null,
        #[XmlList(entry: 'distanzen', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Distances>')]
        #[SkipWhenEmpty]
        #[Description('Distance information to relevant facilities')]
        #[SerializedName('distanzen')]
        protected array $distances = [],
        #[XmlList(entry: 'distanzen_sport', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\SportDistances>')]
        #[SkipWhenEmpty]
        #[Description('Distances to sports facilities')]
        #[SerializedName('distanzen_sport')]
        protected array $sportDistances = [],
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

    public function getSupply(): ?bool
    {
        return $this->supply;
    }

    public function setSupply(?bool $supply): Infrastructure
    {
        $this->supply = $supply;

        return $this;
    }

    public function getView(): ?View
    {
        return $this->view;
    }

    public function setView(?View $view): Infrastructure
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getDistances(): array
    {
        return $this->distances;
    }

    public function setDistances(array $distances): Infrastructure
    {
        $this->distances = $distances;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getSportDistances(): array
    {
        return $this->sportDistances;
    }

    public function setSportDistances(array $sportDistances): Infrastructure
    {
        $this->sportDistances = $sportDistances;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Infrastructure
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Infrastructure
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

    public function setUserDefinedExtend(array $userDefinedExtend): Infrastructure
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
