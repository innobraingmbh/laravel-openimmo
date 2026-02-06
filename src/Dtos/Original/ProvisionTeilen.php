<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ProvisionTeilen
 * Aufteilen der provision bei Partnergeschäften. Auch "A Meta" Geschäft. Attribut zeigt, wie der Wert angegeben wird: fester wert, prozent, oder Text Information
 */
#[XmlRoot(name: 'provision_teilen')]
class ProvisionTeilen
{
    public const string WERT_ABSOLUT = 'absolut';

    public const string WERT_PROZENT = 'prozent';

    public const string WERT_TEXT = 'text';

    public function __construct(
        /**
         * optional
         *
         * @see WERT_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('wert')]
        protected string $wert = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getWert(): ?string
    {
        return $this->wert;
    }

    public function setWert(?string $wert): ProvisionTeilen
    {
        $this->wert = $wert;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): ProvisionTeilen
    {
        $this->value = $value;

        return $this;
    }
}
