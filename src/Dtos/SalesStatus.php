<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class SalesStatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'verkaufstatus')]
class SalesStatus
{
    public const string CONDITION_OPEN = 'OFFEN';

    public const string CONDITION_RESERVED = 'RESERVIERT';

    public const string CONDITION_SOLD = 'VERKAUFT';

    public function __construct(
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('stand')]
        protected string $status = ''
    ) {}

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
