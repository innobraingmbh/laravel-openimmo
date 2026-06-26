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
 * Class OpenImmo
 * Dokument Element
 * Root Element
 */
#[Description('Root element of the OpenImmo data format')]
#[XmlRoot(name: 'openimmo')]
class OpenImmo
{
    public function __construct(
        #[Type(Transfer::class)]
        #[Description('Data transfer metadata')]
        #[SerializedName('uebertragung')]
        protected ?Transfer $transfer = null,
        #[XmlList(entry: 'anbieter', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Provider>')]
        #[SkipWhenEmpty]
        #[Description('Provider (agent or owner) of the property')]
        #[SerializedName('anbieter')]
        protected array $provider = [],
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
        protected array $userDefinedAnyfield = []
    ) {}

    public function getTransfer(): ?Transfer
    {
        return $this->transfer;
    }

    public function setTransfer(?Transfer $transfer): OpenImmo
    {
        $this->transfer = $transfer;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getProvider(): array
    {
        return $this->provider;
    }

    public function setProvider(array $provider): OpenImmo
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): OpenImmo
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): OpenImmo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }
}
