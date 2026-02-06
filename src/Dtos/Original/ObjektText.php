<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ObjektText
 * Beschreibung in anderer Sprache. "lang" Attribut muss dann vorhanden sein. W3- Language Code
 * Description in other Languages
 */
#[XmlRoot(name: 'objekt_text')]
class ObjektText
{
    public function __construct(
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('lang')]
        protected string $lang = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getLang(): string
    {
        return $this->lang;
    }

    public function setLang(string $lang): ObjektText
    {
        $this->lang = $lang;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): ObjektText
    {
        $this->value = $value;

        return $this;
    }
}
