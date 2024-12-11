<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class View
 * Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar
 *
 * @XmlRoot("ausblick")
 */
class View
{
    public const VIEW_DISTANCE = 'FERNE';

    public const VIEW_LAKE = 'SEE';

    public const VIEW_MOUNTAINS = 'BERGE';

    public const VIEW_SEA = 'MEER';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("blick")
         * optional
         *
         * @see VIEW_* constants
         */
        protected string $view = ''
    ) {}

    public function getView(): ?string
    {
        return $this->view;
    }

    public function setView(?string $view): View
    {
        $this->view = $view;

        return $this;
    }
}
