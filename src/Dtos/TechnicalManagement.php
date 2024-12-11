<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class TechnicalManagement
 *
 * @XmlRoot("verwaltung_techn")
 */
class TechnicalManagement
{
    /**
     * @Type("string")
     *
     * @SerializedName("objektnr_intern")
     */
    protected ?string $internalPropertyNumber = null;

    /**
     * @Type("string")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("objektnr_extern")
     */
    protected string $externalPropertyNumber = '';

    /**
     * @Type("Katalam\OpenImmo\Dtos\Action")
     *
     * @SerializedName("aktion")
     */
    protected ?Action $action = null;

    /**
     * @Type("DateTime<'Y-m-d'>")
     *
     * @SerializedName("aktiv_von")
     */
    protected ?DateTime $activeFrom = null;

    /**
     * @Type("DateTime<'Y-m-d'>")
     *
     * @SerializedName("aktiv_bis")
     */
    protected ?DateTime $activeTo = null;

    /**
     * @Type("string")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("openimmo_obid")
     */
    protected string $openImmoObjectId = '';

    /**
     * @Type("string")
     *
     * @SerializedName("kennung_ursprung")
     */
    protected ?string $originIdentifier = null;

    /**
     * @Type("DateTime<'Y-m-d'>")
     *
     * @SerializedName("stand_vom")
     */
    protected ?DateTime $statusFrom = null;

    /**
     * @Type("bool")
     *
     * @SerializedName("weitergabe_generell")
     */
    protected ?bool $generalForwarding = null;

    /**
     * @Type("string")
     *
     * @SerializedName("weitergabe_positiv")
     */
    protected ?string $positiveForwarding = null;

    /**
     * @Type("string")
     *
     * @SerializedName("weitergabe_negativ")
     */
    protected ?string $negativeForwarding = null;

    /**
     * @Type("string")
     *
     * @SerializedName("gruppen_kennung")
     */
    protected ?string $groupIdentifier = null;

    /**
     * @Type("Katalam\OpenImmo\Dtos\Master")
     *
     * @SerializedName("master")
     */
    protected ?Master $master = null;

    /**
     * @Type("string")
     *
     * @SerializedName("sprache")
     */
    protected ?string $language = null;

    /**
     * @XmlList(inline = true, entry = "user_defined_simplefield")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedSimplefield>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_simplefield")
     */
    protected array $userDefinedSimplefield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_anyfield")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedAnyfield>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_anyfield")
     */
    protected array $userDefinedAnyfield = [];

    /**
     * @XmlList(inline = true, entry = "user_defined_extend")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\UserDefinedExtend>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("user_defined_extend")
     */
    protected array $userDefinedExtend = [];

    public function __construct(
        ?string $internalPropertyNumber = null,
        string $externalPropertyNumber = '',
        ?Action $action = null,
        ?DateTime $activeFrom = null,
        ?DateTime $activeTo = null,
        string $openImmoObjectId = '',
        ?string $originIdentifier = null,
        ?DateTime $statusFrom = null,
        ?bool $generalForwarding = null,
        ?string $positiveForwarding = null,
        ?string $negativeForwarding = null,
        ?string $groupIdentifier = null,
        ?Master $master = null,
        ?string $language = null,
        array $userDefinedSimplefield = [],
        array $userDefinedAnyfield = [],
        array $userDefinedExtend = [],
    ) {
        $this->internalPropertyNumber = $internalPropertyNumber;
        $this->externalPropertyNumber = $externalPropertyNumber;
        $this->action = $action;
        $this->activeFrom = $activeFrom;
        $this->activeTo = $activeTo;
        $this->openImmoObjectId = $openImmoObjectId;
        $this->originIdentifier = $originIdentifier;
        $this->statusFrom = $statusFrom;
        $this->generalForwarding = $generalForwarding;
        $this->positiveForwarding = $positiveForwarding;
        $this->negativeForwarding = $negativeForwarding;
        $this->groupIdentifier = $groupIdentifier;
        $this->master = $master;
        $this->language = $language;
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        $this->userDefinedExtend = $userDefinedExtend;
    }

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
        return $this->userDefinedSimplefield ?? [];
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
        return $this->userDefinedAnyfield ?? [];
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
        return $this->userDefinedExtend ?? [];
    }

    public function setUserDefinedExtend(array $userDefinedExtend): TechnicalManagement
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
