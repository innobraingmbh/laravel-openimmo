<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TechnicalManagement
 *
 * @description Technical management information of the data transfer
 */
#[XmlRoot(name: 'verwaltung_techn')]
class TechnicalManagement
{
    public function __construct(
        /** @description Internal property number of the provider */
        #[Type('string')]
        #[SerializedName('objektnr_intern')]
        protected ?string $internalPropertyNumber = null,
        /** @description External property number of the provider */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('objektnr_extern')]
        protected string $externalPropertyNumber = '',
        /** @description Data transfer action (e.g. create, update, delete) */
        #[Type(Action::class)]
        #[SerializedName('aktion')]
        protected ?Action $action = null,
        /** @description Date from which the listing is active */
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('aktiv_von')]
        protected ?DateTime $activeFrom = null,
        /** @description Date until which the listing is active */
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('aktiv_bis')]
        protected ?DateTime $activeTo = null,
        /** @description OpenImmo object identifier */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('openimmo_obid')]
        protected string $openImmoObjectId = '',
        /** @description Origin identifier of the data record */
        #[Type('string')]
        #[SerializedName('kennung_ursprung')]
        protected ?string $originIdentifier = null,
        /** @description Date from which the status applies */
        #[Type("DateTime<'Y-m-d'>")]
        #[SerializedName('stand_vom')]
        protected ?DateTime $statusFrom = null,
        /** @description General forwarding setting */
        #[Type('bool')]
        #[SerializedName('weitergabe_generell')]
        protected ?bool $generalForwarding = null,
        /** @description Forwarding setting for a positive result */
        #[Type('string')]
        #[SerializedName('weitergabe_positiv')]
        protected ?string $positiveForwarding = null,
        /** @description Forwarding setting for a negative result */
        #[Type('string')]
        #[SerializedName('weitergabe_negativ')]
        protected ?string $negativeForwarding = null,
        /** @description Identifier of the group */
        #[Type('string')]
        #[SerializedName('gruppen_kennung')]
        protected ?string $groupIdentifier = null,
        /** @description Master data of the data transfer */
        #[Type(Master::class)]
        #[SerializedName('master')]
        protected ?Master $master = null,
        /** @description Language of the text (ISO language code) */
        #[Type('string')]
        #[SerializedName('sprache')]
        protected ?string $language = null,
        /** @description User-defined simple free field */
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        /** @description User-defined free field with arbitrary content */
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        /** @description User-defined extension */
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getInternalPropertyNumber(): ?string
    {
        return $this->internalPropertyNumber;
    }

    public function setInternalPropertyNumber(?string $internalPropertyNumber): TechnicalManagement
    {
        $this->internalPropertyNumber = $internalPropertyNumber;

        return $this;
    }

    public function getExternalPropertyNumber(): string
    {
        return $this->externalPropertyNumber;
    }

    public function setExternalPropertyNumber(string $externalPropertyNumber): TechnicalManagement
    {
        $this->externalPropertyNumber = $externalPropertyNumber;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): TechnicalManagement
    {
        $this->action = $action;

        return $this;
    }

    public function getActiveFrom(): ?DateTime
    {
        return $this->activeFrom;
    }

    public function setActiveFrom(?DateTime $activeFrom): TechnicalManagement
    {
        $this->activeFrom = $activeFrom;

        return $this;
    }

    public function getActiveTo(): ?DateTime
    {
        return $this->activeTo;
    }

    public function setActiveTo(?DateTime $activeTo): TechnicalManagement
    {
        $this->activeTo = $activeTo;

        return $this;
    }

    public function getOpenImmoObjectId(): string
    {
        return $this->openImmoObjectId;
    }

    public function setOpenImmoObjectId(string $openImmoObjectId): TechnicalManagement
    {
        $this->openImmoObjectId = $openImmoObjectId;

        return $this;
    }

    public function getOriginIdentifier(): ?string
    {
        return $this->originIdentifier;
    }

    public function setOriginIdentifier(?string $originIdentifier): TechnicalManagement
    {
        $this->originIdentifier = $originIdentifier;

        return $this;
    }

    public function getStatusFrom(): ?DateTime
    {
        return $this->statusFrom;
    }

    public function setStatusFrom(?DateTime $statusFrom): TechnicalManagement
    {
        $this->statusFrom = $statusFrom;

        return $this;
    }

    public function getGeneralForwarding(): ?bool
    {
        return $this->generalForwarding;
    }

    public function setGeneralForwarding(?bool $generalForwarding): TechnicalManagement
    {
        $this->generalForwarding = $generalForwarding;

        return $this;
    }

    public function getPositiveForwarding(): ?string
    {
        return $this->positiveForwarding;
    }

    public function setPositiveForwarding(?string $positiveForwarding): TechnicalManagement
    {
        $this->positiveForwarding = $positiveForwarding;

        return $this;
    }

    public function getNegativeForwarding(): ?string
    {
        return $this->negativeForwarding;
    }

    public function setNegativeForwarding(?string $negativeForwarding): TechnicalManagement
    {
        $this->negativeForwarding = $negativeForwarding;

        return $this;
    }

    public function getGroupIdentifier(): ?string
    {
        return $this->groupIdentifier;
    }

    public function setGroupIdentifier(?string $groupIdentifier): TechnicalManagement
    {
        $this->groupIdentifier = $groupIdentifier;

        return $this;
    }

    public function getMaster(): ?Master
    {
        return $this->master;
    }

    public function setMaster(?Master $master): TechnicalManagement
    {
        $this->master = $master;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): TechnicalManagement
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): TechnicalManagement
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

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): TechnicalManagement
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

    public function setUserDefinedExtend(array $userDefinedExtend): TechnicalManagement
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
