<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Alter
 * Ist es ein Neu- oder Altbau, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'alter')]
class Alter
{
    public const string ALTER_ATTR_ALTBAU = 'ALTBAU';

    public const string ALTER_ATTR_NEUBAU = 'NEUBAU';

    public function __construct(
        /**
         * optional
         *
         * @see ALTER_ATTR_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('alter_attr')]
        protected string $alterAttr = ''
    ) {}

    public function getAlterAttr(): ?string
    {
        return $this->alterAttr;
    }

    public function setAlterAttr(?string $alterAttr): Alter
    {
        $this->alterAttr = $alterAttr;

        return $this;
    }
}
