<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Action
 * Aktion für Objekt. Wenn nicht vorhanden, dann "ADD", als neu.
 *  Change= Update der Objektdaten, Delete = Löschen des Objektes
 *  Referenz= Die Möglichkeit Objekte in Portalen als Verkauft oder Archiv zu definieren.
 *
 * @XmlRoot("aktion")
 */
class Action
{
    public const ACTION_TYPE_CHANGE = 'CHANGE';

    public const ACTION_TYPE_DELETE = 'DELETE';

    public const ACTION_TYPE_REFERENCE = 'REFERENZ';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("aktionart")
         * optional
         *
         * @see ACTION_TYPE_* constants
         */
        protected string $actionType = ''
    ) {}

    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    public function setActionType(?string $actionType): Action
    {
        $this->actionType = $actionType;

        return $this;
    }
}
