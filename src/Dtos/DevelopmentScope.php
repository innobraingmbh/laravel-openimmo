<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DevelopmentScope
 * Detailbeschreibung der Massnahmen
 *
 */
#[XmlRoot(name: "erschliessung_umfang")]
class DevelopmentScope
{
    public const string DEVELOPMENT_ATTRIBUTE_GAS = 'GAS';

    public const string DEVELOPMENT_ATTRIBUTE_WATER = 'WASSER';

    public const string DEVELOPMENT_ATTRIBUTE_ELECTRICITY = 'STROM';

    public const string DEVELOPMENT_ATTRIBUTE_TELECOMMUNICATION = 'TK';

    public function __construct(
        #[Type("string")]
        #[XmlAttribute]
        #[SerializedName("erschl_attr")]
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
