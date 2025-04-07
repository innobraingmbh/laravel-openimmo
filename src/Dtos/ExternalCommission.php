<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ExternalCommission
 * Courtage, die der Kunde zu zahlen hat, als Betrag in ? / % / MM, daher Textfeld
 *
 * @XmlRoot("aussen_courtage")
 */
class ExternalCommission
{
    public function __construct(
        /**
         * @Type("bool")
         *
         * @XmlAttribute
         *
         * @SerializedName("mit_mwst")
         * optional
         */
        protected ?bool $withVAT = null,
        /**
         * @Inline
         *
         * @Type("string")
         */
        protected ?string $value = null
    ) {}

    public function getWithVAT(): ?bool
    {
        return $this->withVAT;
    }

    public function setWithVAT(?bool $withVAT): ExternalCommission
    {
        $this->withVAT = $withVAT;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): ExternalCommission
    {
        $this->value = $value;

        return $this;
    }
}
