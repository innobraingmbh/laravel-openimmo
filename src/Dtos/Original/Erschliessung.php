<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Erschliessung
 * Stand der Erschließung, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'erschliessung')]
class Erschliessung
{
    public const string ERSCHL_ATTR_UNERSCHLOSSEN = 'UNERSCHLOSSEN';

    public const string ERSCHL_ATTR_TEILERSCHLOSSEN = 'TEILERSCHLOSSEN';

    public const string ERSCHL_ATTR_VOLLERSCHLOSSEN = 'VOLLERSCHLOSSEN';

    public const string ERSCHL_ATTR_ORTSUEBLICHERSCHLOSSEN = 'ORTSUEBLICHERSCHLOSSEN';

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

    public function setErschlAttr(?string $erschlAttr): Erschliessung
    {
        $this->erschlAttr = $erschlAttr;

        return $this;
    }
}
