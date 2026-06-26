<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class SalesStatus
 * Anzeige ob z.B schon verkauft, Optionen nicht kombinierbar
 */
#[Description('Sales status of the property (e.g. available, reserved, sold)')]
#[XmlRoot(name: 'verkaufstatus')]
class SalesStatus
{
    public const string CONDITION_OPEN = 'OFFEN';

    public const string CONDITION_RESERVED = 'RESERVIERT';

    public const string CONDITION_SOLD = 'VERKAUFT';

    public function __construct(
        /**
         * optional
         *
         * @see CONDITION_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('stand')]
        #[Description('Status of the property or the data transfer')]
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
