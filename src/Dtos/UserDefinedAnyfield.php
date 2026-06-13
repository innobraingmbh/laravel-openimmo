<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedAnyfield
 *
 * @description User-defined free field with arbitrary content
 */
#[XmlRoot(name: 'user_defined_anyfield')]
class UserDefinedAnyfield
{
    public function __construct(
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): UserDefinedAnyfield
    {
        $this->value = $value;

        return $this;
    }
}
