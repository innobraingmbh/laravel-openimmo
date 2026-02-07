<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Freitexte
 */
#[XmlRoot(name: 'freitexte')]
class Freitexte
{
    public function __construct(
        #[Type('string')]
        #[SerializedName('objekttitel')]
        protected ?string $objekttitel = null,
        #[Type('string')]
        #[SerializedName('dreizeiler')]
        protected ?string $dreizeiler = null,
        #[Type('string')]
        #[SerializedName('lage')]
        protected ?string $lage = null,
        #[Type('string')]
        #[SerializedName('ausstatt_beschr')]
        protected ?string $ausstattBeschr = null,
        #[Type('string')]
        #[SerializedName('objektbeschreibung')]
        protected ?string $objektbeschreibung = null,
        #[Type('string')]
        #[SerializedName('sonstige_angaben')]
        protected ?string $sonstigeAngaben = null,
        #[Type(ObjektText::class)]
        #[SerializedName('objekt_text')]
        protected ?ObjektText $objektText = null,
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

    public function getObjekttitel(): ?string
    {
        return $this->objekttitel;
    }

    public function setObjekttitel(?string $objekttitel): Freitexte
    {
        $this->objekttitel = $objekttitel;

        return $this;
    }

    public function getDreizeiler(): ?string
    {
        return $this->dreizeiler;
    }

    public function setDreizeiler(?string $dreizeiler): Freitexte
    {
        $this->dreizeiler = $dreizeiler;

        return $this;
    }

    public function getLage(): ?string
    {
        return $this->lage;
    }

    public function setLage(?string $lage): Freitexte
    {
        $this->lage = $lage;

        return $this;
    }

    public function getAusstattBeschr(): ?string
    {
        return $this->ausstattBeschr;
    }

    public function setAusstattBeschr(?string $ausstattBeschr): Freitexte
    {
        $this->ausstattBeschr = $ausstattBeschr;

        return $this;
    }

    public function getObjektbeschreibung(): ?string
    {
        return $this->objektbeschreibung;
    }

    public function setObjektbeschreibung(?string $objektbeschreibung): Freitexte
    {
        $this->objektbeschreibung = $objektbeschreibung;

        return $this;
    }

    public function getSonstigeAngaben(): ?string
    {
        return $this->sonstigeAngaben;
    }

    public function setSonstigeAngaben(?string $sonstigeAngaben): Freitexte
    {
        $this->sonstigeAngaben = $sonstigeAngaben;

        return $this;
    }

    public function getObjektText(): ?ObjektText
    {
        return $this->objektText;
    }

    public function setObjektText(?ObjektText $objektText): Freitexte
    {
        $this->objektText = $objektText;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Freitexte
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Freitexte
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

    public function setUserDefinedExtend(array $userDefinedExtend): Freitexte
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
