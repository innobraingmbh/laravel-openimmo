<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Zimmer
 * Objekart / Typ f. Zimmer
 */
#[XmlRoot(name: 'zimmer')]
class Zimmer
{
    public const string ZIMMERTYP_ZIMMER = 'ZIMMER';

    public function __construct(
        /**
         * optional
         *
         * @see ZIMMERTYP_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('zimmertyp')]
        protected string $zimmertyp = ''
    ) {}

    public function getZimmertyp(): ?string
    {
        return $this->zimmertyp;
    }

    public function setZimmertyp(?string $zimmertyp): Zimmer
    {
        $this->zimmertyp = $zimmertyp;

        return $this;
    }
}
