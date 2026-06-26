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
 * Class NetCommission
 * Wenn unterschiedliche Provisionen anfallen, dann hier Netto und UmSt. einzeln
 */
#[Description('Net commission (excluding VAT)')]
#[XmlRoot(name: 'provisionnetto')]
class NetCommission
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('provisionust')]
        #[Description('VAT portion of the broker commission')]
        protected ?float $commissionVAT = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getCommissionVAT(): ?float
    {
        return $this->commissionVAT;
    }

    public function setCommissionVAT(?float $commissionVAT): NetCommission
    {
        $this->commissionVAT = $commissionVAT;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): NetCommission
    {
        $this->value = $value;

        return $this;
    }
}
