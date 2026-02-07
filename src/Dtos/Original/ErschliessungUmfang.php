<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ErschliessungUmfang
 * Detailbeschreibung der Massnahmen
 */
#[XmlRoot(name: 'erschliessung_umfang')]
class ErschliessungUmfang
{
    public const string ERSCHL_ATTR_GAS = 'GAS';

    public const string ERSCHL_ATTR_WASSER = 'WASSER';

    public const string ERSCHL_ATTR_STROM = 'STROM';

    public const string ERSCHL_ATTR_TK = 'TK';

    public function __construct(
        /**
         * optional
         *
         * @see ERSCHL_ATTR_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('erschl_attr')]
        protected string $erschlAttr = ''
    ) {}

    public function getErschlAttr(): ?string
    {
        return $this->erschlAttr;
    }

    public function setErschlAttr(?string $erschlAttr): ErschliessungUmfang
    {
        $this->erschlAttr = $erschlAttr;

        return $this;
    }
}
