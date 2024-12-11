<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Other
 * Objektart / Typ f. Sonstiges
 * Bitte ab Version 1.2.3 die Attribute GARAGEN, PARKFLACHE nicht mehr verwenden.
 * Objekte befinden sich jetzt unter Element parken.
 * Aus kompatibilitätegründen bleiben die Attribute NOCH! erhalten.
 * In nachfolgenden Versionen wird die Unterstützung an dieser Stelle eingestellt.
 *
 * @XmlRoot("sonstige")
 */
class Other
{
    public const OTHER_TYPE_PARKING_GARAGE = 'PARKHAUS';

    public const OTHER_TYPE_GAS_STATION = 'TANKSTELLE';

    public const OTHER_TYPE_HOSPITAL = 'KRANKENHAUS';

    public const OTHER_TYPE_OTHER = 'SONSTIGE';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("sonstige_typ")
     * optional
     *
     * @see OTHER_TYPE_* constants
     */
    protected string $otherType = '';

    public function __construct(string $otherType = '')
    {
        $this->otherType = $otherType;
    }

    public function getOtherType(): ?string
    {
        return $this->otherType;
    }

    public function setOtherType(?string $otherType): Other
    {
        $this->otherType = $otherType;

        return $this;
    }
}
