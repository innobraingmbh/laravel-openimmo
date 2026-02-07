<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Vermarktungsart
 * Vermarktungsart, Optionen kombinierbar, Kauf + Miete
 */
#[XmlRoot(name: 'vermarktungsart')]
class Vermarktungsart
{
    public function __construct(
        /** required */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('KAUF')]
        protected bool $kauf = false,
        /** required */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('MIETE_PACHT')]
        protected bool $mietePacht = false,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('ERBPACHT')]
        protected ?bool $erbpacht = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('LEASING')]
        protected ?bool $leasing = null
    ) {}

    public function getKauf(): bool
    {
        return $this->kauf;
    }

    public function setKauf(bool $kauf): Vermarktungsart
    {
        $this->kauf = $kauf;

        return $this;
    }

    public function getMietePacht(): bool
    {
        return $this->mietePacht;
    }

    public function setMietePacht(bool $mietePacht): Vermarktungsart
    {
        $this->mietePacht = $mietePacht;

        return $this;
    }

    public function getErbpacht(): ?bool
    {
        return $this->erbpacht;
    }

    public function setErbpacht(?bool $erbpacht): Vermarktungsart
    {
        $this->erbpacht = $erbpacht;

        return $this;
    }

    public function getLeasing(): ?bool
    {
        return $this->leasing;
    }

    public function setLeasing(?bool $leasing): Vermarktungsart
    {
        $this->leasing = $leasing;

        return $this;
    }
}
