<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class CommissionSplit
 * Aufteilen der provision bei Partnergeschäften. Auch "A Meta" Geschäft. Attribut zeigt, wie der Wert angegeben wird: fester wert, prozent, oder Text Information
 *
 */
#[XmlRoot(name: "provision_teilen")]
class CommissionSplit
{
    public const string VALUE_ABSOLUTE = 'absolut';

    public const string VALUE_PERCENT = 'prozent';

    public const string VALUE_TEXT = 'text';

    public function __construct(
        #[Type("string")]
        #[XmlAttribute]
        #[SerializedName("wert")]
        protected string $worth = '',
        #[Inline]
        #[Type("string")]
        protected ?string $value = null
    ) {}

    public function getWorth(): ?string
    {
        return $this->worth;
    }

    public function setWorth(?string $worth): CommissionSplit
    {
        $this->worth = $worth;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): CommissionSplit
    {
        $this->value = $value;

        return $this;
    }
}
