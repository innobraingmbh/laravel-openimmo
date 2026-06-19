<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Field
 */
#[Description('Single data field in the OpenImmo format')]
#[XmlRoot(name: 'feld')]
class Field
{
    public function __construct(
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Last name of the contact person')]
        #[SerializedName('name')]
        protected string $name = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Value of the field')]
        #[SerializedName('wert')]
        protected string $value = '',
        #[XmlList(entry: 'typ', inline: true)]
        #[Type('array<string>')]
        #[SkipWhenEmpty]
        #[Description('Type or kind')]
        #[SerializedName('typ')]
        protected array $type = [],
        #[XmlList(entry: 'modus', inline: true)]
        #[Type('array<string>')]
        #[SkipWhenEmpty]
        #[Description('Mode of the data transfer')]
        #[SerializedName('modus')]
        protected array $mode = []
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Field
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): Field
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getType(): array
    {
        return $this->type;
    }

    public function setType(array $type): Field
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getMode(): array
    {
        return $this->mode;
    }

    public function setMode(array $mode): Field
    {
        $this->mode = $mode;

        return $this;
    }
}
