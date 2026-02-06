<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedSimplefield
 * Benutzerdefinierte Angaben
 */
#[XmlRoot(name: 'user_defined_simplefield')]
class UserDefinedSimplefield
{
    public function __construct(
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('feldname')]
        protected string $feldname = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getFeldname(): string
    {
        return $this->feldname;
    }

    public function setFeldname(string $feldname): UserDefinedSimplefield
    {
        $this->feldname = $feldname;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): UserDefinedSimplefield
    {
        $this->value = $value;

        return $this;
    }
}
