<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Provisionnetto
 * Wenn unterschiedliche Provisionen anfallen, dann hier Netto und UmSt. einzeln
 */
#[Description('Nettoprovision (ohne MwSt.)')]
#[XmlRoot(name: 'provisionnetto')]
class Provisionnetto
{
    public function __construct(
        /** optional */
        #[Type('float')]
        #[XmlAttribute]
        #[SerializedName('provisionust')]
        #[Description('Mehrwertsteueranteil der Maklerprovision')]
        protected ?float $provisionust = null,
        #[Inline]
        #[Type('float')]
        protected ?float $value = null
    ) {}

    public function getProvisionust(): ?float
    {
        return $this->provisionust;
    }

    public function setProvisionust(?float $provisionust): Provisionnetto
    {
        $this->provisionust = $provisionust;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): Provisionnetto
    {
        $this->value = $value;

        return $this;
    }
}
