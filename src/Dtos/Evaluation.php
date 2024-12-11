<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Evaluation
 * Container für detailierte Bewertungs Parmater
 *
 * @XmlRoot("bewertung")
 */
class Evaluation
{
    /**
     * @XmlList(inline = true, entry = "feld")
     *
     * @Type("array<Katalam\OpenImmo\Dtos\Field>")
     *
     * @SkipWhenEmpty
     *
     * @SerializedName("feld")
     */
    protected array $field = [];

    public function __construct(array $field = [])
    {
        $this->field = $field;
    }

    /**
     * Returns array of array
     */
    public function getField(): array
    {
        return $this->field ?? [];
    }

    public function setField(array $field): Evaluation
    {
        $this->field = $field;

        return $this;
    }
}
