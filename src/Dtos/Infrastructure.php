<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Infrastructure
 *
 * @XmlRoot("infrastruktur")
 */
class Infrastructure
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @SerializedName("zulieferung")
         */
        protected ?bool $supply = null,
        /**
         * @Type("Innobrain\OpenImmo\Dtos\View")
         *
         * @SerializedName("ausblick")
         */
        protected ?View $view = null,
        /**
         * @XmlList(inline = true, entry = "distanzen")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\Distances>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("distanzen")
         */
        protected array $distances = [],
        /**
         * @XmlList(inline = true, entry = "distanzen_sport")
         *
         * @Type("array<Innobrain\OpenImmo\Dtos\SportDistances>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("distanzen_sport")
         */
        protected array $sportDistances = [],
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
