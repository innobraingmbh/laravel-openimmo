<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class SalesStatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 *
 * @XmlRoot("verkaufstatus")
 */
class SalesStatus
{
    public const CONDITION_OPEN = 'OFFEN';

    public const CONDITION_RESERVED = 'RESERVIERT';

    public const CONDITION_SOLD = 'VERKAUFT';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("stand")
     * optional
     *
     * @see CONDITION_* constants
     */
    protected string $status = '';

    public function __construct(string $status = '')
    {
        $this->status = $status;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): SalesStatus
    {
        $this->status = $status;

        return $this;
    }
}
