<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use DateTime;
use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bieterverfahren
 * Angaben zum Bieterverfahren
 */
#[Description('Informationen zum Bieterverfahren der Immobilie')]
#[XmlRoot(name: 'bieterverfahren')]
class Bieterverfahren
{
    public function __construct(
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Beginn der Angebotsphase')]
        #[SerializedName('beginn_angebotsphase')]
        protected ?DateTime $beginnAngebotsphase = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Erstes Besichtigungstermin')]
        #[SerializedName('besichtigungstermin')]
        protected ?DateTime $besichtigungstermin = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Zweiter Besichtigungstermin')]
        #[SerializedName('besichtigungstermin_2')]
        protected ?DateTime $besichtigungstermin2 = null,
        #[Type('DateTime<\'Y-m-d\TH:i:s\', null, [\'Y-m-d\TH:i:sP\', \'Y-m-d\TH:i:s\']>')]
        #[Description('Startzeitpunkt des Bieterverfahrens')]
        #[SerializedName('beginn_bietzeit')]
        protected ?DateTime $beginnBietzeit = null,
        #[Type("DateTime<'Y-m-d'>")]
        #[Description('Endzeitpunkt des Bieterverfahrens')]
        #[SerializedName('ende_bietzeit')]
        protected ?DateTime $endeBietzeit = null,
        #[Type('bool')]
        #[Description('Höchstgebot anzeigen')]
        #[SerializedName('hoechstgebot_zeigen')]
        protected ?bool $hoechstgebotZeigen = null,
        #[Type('float')]
        #[Description('Mindestpreis der Immobilie')]
        #[SerializedName('mindestpreis')]
        protected ?float $mindestpreis = null,
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
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[Description('Benutzerdefinierte Erweiterung')]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getBeginnAngebotsphase(): ?DateTime
    {
        return $this->beginnAngebotsphase;
    }

    public function setBeginnAngebotsphase(?DateTime $beginnAngebotsphase): Bieterverfahren
    {
        $this->beginnAngebotsphase = $beginnAngebotsphase;

        return $this;
    }

    public function getBesichtigungstermin(): ?DateTime
    {
        return $this->besichtigungstermin;
    }

    public function setBesichtigungstermin(?DateTime $besichtigungstermin): Bieterverfahren
    {
        $this->besichtigungstermin = $besichtigungstermin;

        return $this;
    }

    public function getBesichtigungstermin2(): ?DateTime
    {
        return $this->besichtigungstermin2;
    }

    public function setBesichtigungstermin2(?DateTime $besichtigungstermin2): Bieterverfahren
    {
        $this->besichtigungstermin2 = $besichtigungstermin2;

        return $this;
    }

    public function getBeginnBietzeit(): ?DateTime
    {
        return $this->beginnBietzeit;
    }

    public function setBeginnBietzeit(?DateTime $beginnBietzeit): Bieterverfahren
    {
        $this->beginnBietzeit = $beginnBietzeit;

        return $this;
    }

    public function getEndeBietzeit(): ?DateTime
    {
        return $this->endeBietzeit;
    }

    public function setEndeBietzeit(?DateTime $endeBietzeit): Bieterverfahren
    {
        $this->endeBietzeit = $endeBietzeit;

        return $this;
    }

    public function getHoechstgebotZeigen(): ?bool
    {
        return $this->hoechstgebotZeigen;
    }

    public function setHoechstgebotZeigen(?bool $hoechstgebotZeigen): Bieterverfahren
    {
        $this->hoechstgebotZeigen = $hoechstgebotZeigen;

        return $this;
    }

    public function getMindestpreis(): ?float
    {
        return $this->mindestpreis;
    }

    public function setMindestpreis(?float $mindestpreis): Bieterverfahren
    {
        $this->mindestpreis = $mindestpreis;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Bieterverfahren
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Bieterverfahren
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

    public function setUserDefinedExtend(array $userDefinedExtend): Bieterverfahren
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
