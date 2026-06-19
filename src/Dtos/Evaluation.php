<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Evaluation
 * Container für detailierte Bewertungs Parmater
 */
#[Description('Evaluation and valuation information of the property')]
#[XmlRoot(name: 'bewertung')]
class Evaluation
{
    public function __construct(
        #[XmlList(entry: 'feld', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Field>')]
        #[SkipWhenEmpty]
        #[Description('Data field')]
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
