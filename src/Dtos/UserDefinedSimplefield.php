<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class UserDefinedSimplefield
 * Benutzerdefinierte Angaben
 */
#[Description('User-defined simple free field')]
#[XmlRoot(name: 'user_defined_simplefield')]
class UserDefinedSimplefield
{
    public function __construct(
        /** required */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('feldname')]
        #[Description('Name of the data field')]
        protected string $fieldName = '',
        #[Inline]
        #[Type('string')]
        protected ?string $value = null
    ) {}

    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): UserDefinedSimplefield
    {
        $this->fieldName = $fieldName;

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
