<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausblick
 * Welcher Ausblick ist vorhanden, Optionen nicht kombinierbar
 */
#[XmlRoot(name: 'ausblick')]
class Ausblick
{
    public const string BLICK_FERNE = 'FERNE';

    public const string BLICK_SEE = 'SEE';

    public const string BLICK_BERGE = 'BERGE';

    public const string BLICK_MEER = 'MEER';

    public function __construct(
        /**
         * optional
         *
         * @see BLICK_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('blick')]
        protected string $blick = ''
    ) {}

    public function getBlick(): ?string
    {
        return $this->blick;
    }

    public function setBlick(?string $blick): Ausblick
    {
        $this->blick = $blick;

        return $this;
    }
}
