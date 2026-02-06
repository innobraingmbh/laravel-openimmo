<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PropertyText
 * Beschreibung in anderer Sprache. "lang" Attribut muss dann vorhanden sein. W3- Language Code
 * Description in other Languages
 *
 */
#[XmlRoot(name: "objekt_text")]
class PropertyText
{
    public function __construct(
        #[Type("string")]
        #[XmlAttribute]
        #[SerializedName("lang")]
        protected string $language = '',
        #[Inline]
        #[Type("string")]
        protected ?string $value = null
    ) {}

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): PropertyText
    {
        $this->language = $language;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): PropertyText
    {
        $this->value = $value;

        return $this;
    }
}
