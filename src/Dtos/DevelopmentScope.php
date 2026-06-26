<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DevelopmentScope
 * Detailbeschreibung der Massnahmen
 */
#[Description('Scope of development/utility connections of the plot')]
#[XmlRoot(name: 'erschliessung_umfang')]
class DevelopmentScope
{
    public const string DEVELOPMENT_ATTRIBUTE_GAS = 'GAS';

    public const string DEVELOPMENT_ATTRIBUTE_WATER = 'WASSER';

    public const string DEVELOPMENT_ATTRIBUTE_ELECTRICITY = 'STROM';

    public const string DEVELOPMENT_ATTRIBUTE_TELECOMMUNICATION = 'TK';

    public function __construct(
        /**
         * optional
         *
         * @see DEVELOPMENT_ATTRIBUTE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('erschl_attr')]
        #[Description('XML attribute for the development status value')]
        protected string $developmentAttribute = ''
    ) {}

    public function getDevelopmentAttribute(): ?string
    {
        return $this->developmentAttribute;
    }

    public function setDevelopmentAttribute(?string $developmentAttribute): DevelopmentScope
    {
        $this->developmentAttribute = $developmentAttribute;

        return $this;
    }
}
