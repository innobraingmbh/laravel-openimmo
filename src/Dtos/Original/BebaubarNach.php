<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BebaubarNach
 * Bebaubar nach Bebauungsrichtlinien, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'bebaubar_nach')]
class BebaubarNach
{
    public const string BEBAUBAR_ATTR_34_NACHBARSCHAFT = '34_NACHBARSCHAFT';

    public const string BEBAUBAR_ATTR_35_AUSSENGEBIET = '35_AUSSENGEBIET';

    public const string BEBAUBAR_ATTR_B_PLAN = 'B_PLAN';

    public const string BEBAUBAR_ATTR_KEIN_BAULAND = 'KEIN BAULAND';

    public const string BEBAUBAR_ATTR_BAUERWARTUNGSLAND = 'BAUERWARTUNGSLAND';

    public const string BEBAUBAR_ATTR_LAENDERSPEZIFISCH = 'LAENDERSPEZIFISCH';

    public const string BEBAUBAR_ATTR_BAULAND_OHNE_B_PLAN = 'BAULAND_OHNE_B_PLAN';

    public function __construct(
        /**
         * optional
         *
         * @see BEBAUBAR_ATTR_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('bebaubar_attr')]
        protected string $bebaubarAttr = ''
    ) {}

    public function getBebaubarAttr(): ?string
    {
        return $this->bebaubarAttr;
    }

    public function setBebaubarAttr(?string $bebaubarAttr): BebaubarNach
    {
        $this->bebaubarAttr = $bebaubarAttr;

        return $this;
    }
}
