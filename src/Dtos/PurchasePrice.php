<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class PurchasePrice
 * Gesamt- (Angebots-)Kaufpreis der Immobilie. Wenn "Auf Anfrage" dann Wert = 0 und Attribut auf TRUE
 *
 * @XmlRoot("kaufpreis")
 */
class PurchasePrice
{
    /**
     * @Type("bool")
     *
     * @XmlAttribute
     *
     * @SerializedName("auf_anfrage")
     * optional
     */
    protected ?bool $onRequest = null;

    /**
     * @Inline
     *
     * @Type("float")
     */
    protected ?float $value = null;

    public function __construct(?bool $onRequest = null, ?float $value = null)
    {
        $this->onRequest = $onRequest;
        $this->value = $value;
    }

    public function getOnRequest(): ?bool
    {
        return $this->onRequest;
    }

    public function setOnRequest(?bool $onRequest): PurchasePrice
    {
        $this->onRequest = $onRequest;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): PurchasePrice
    {
        $this->value = $value;

        return $this;
    }
}
