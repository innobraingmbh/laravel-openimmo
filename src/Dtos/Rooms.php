<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Rooms
 * Objekart / Typ f. Zimmer
 */
#[XmlRoot(name: 'zimmer')]
class Rooms
{
    public const string ROOM_TYPE_ROOM = 'ZIMMER';

    public function __construct(
        /**
         * optional
         *
         * @see ROOM_TYPE_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('zimmertyp')]
        protected string $roomType = ''
    ) {}

    public function getRoomType(): ?string
    {
        return $this->roomType;
    }

    public function setRoomType(?string $roomType): Rooms
    {
        $this->roomType = $roomType;

        return $this;
    }
}
