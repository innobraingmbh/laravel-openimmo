<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Field
 *
 * @XmlRoot("feld")
 */
class Field
{
    public function __construct(
        /**
         * @Type("string")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("name")
         */
        protected string $name = '',
        /**
         * @Type("string")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("wert")
         */
        protected string $value = '',
        /**
         * @XmlList(inline = true, entry = "typ")
         *
         * @Type("array<string>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("typ")
         */
        protected array $type = [],
        /**
         * @XmlList(inline = true, entry = "modus")
         *
         * @Type("array<string>")
         *
         * @SkipWhenEmpty
         *
         * @SerializedName("modus")
         */
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
        return $this->type ?? [];
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
        return $this->mode ?? [];
    }

    public function setMode(array $mode): Field
    {
        $this->mode = $mode;

        return $this;
    }
}
