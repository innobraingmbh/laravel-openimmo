<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Evaluation
 * Container für detailierte Bewertungs Parmater
 */
#[XmlRoot(name: 'bewertung')]
class Evaluation
{
    public function __construct(
        #[XmlList(entry: 'feld', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Field>')]
        #[SkipWhenEmpty]
        #[SerializedName('feld')]
        protected array $field = []
    ) {}

    /**
     * Returns array of array
     */
    public function getField(): array
    {
        return $this->field;
    }

    public function setField(array $field): Evaluation
    {
        $this->field = $field;

        return $this;
    }
}
