<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Openimmo
 * Dokument Element
 * Root Element
 */
#[Description('Wurzelelement des OpenImmo-Datenformats')]
#[XmlRoot(name: 'openimmo')]
class Openimmo
{
    public function __construct(
        #[Type(Uebertragung::class)]
        #[Description('Datentransfer-Metadaten')]
        #[SerializedName('uebertragung')]
        protected ?Uebertragung $uebertragung = null,
        #[XmlList(entry: 'anbieter', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\Anbieter>')]
        #[SkipWhenEmpty]
        #[Description('Anbieter (Makler oder Eigentümer) der Immobilie')]
        #[SerializedName('anbieter')]
        protected array $anbieter = [],
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[Description('Benutzerdefiniertes einfaches Freifeld')]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[Description('Benutzerdefiniertes Freifeld mit beliebigem Inhalt')]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = []
    ) {}

    public function getUebertragung(): ?Uebertragung
    {
        return $this->uebertragung;
    }

    public function setUebertragung(?Uebertragung $uebertragung): Openimmo
    {
        $this->uebertragung = $uebertragung;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getAnbieter(): array
    {
        return $this->anbieter;
    }

    public function setAnbieter(array $anbieter): Openimmo
    {
        $this->anbieter = $anbieter;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Openimmo
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Openimmo
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }
}
