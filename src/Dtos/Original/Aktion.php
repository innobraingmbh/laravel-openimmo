<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Aktion
 * Aktion für Objekt. Wenn nicht vorhanden, dann "ADD", als neu.
 *  Change= Update der Objektdaten, Delete = Löschen des Objektes
 *  Referenz= Die Möglichkeit Objekte in Portalen als Verkauft oder Archiv zu definieren.
 */
#[XmlRoot(name: 'aktion')]
class Aktion
{
    public const string AKTIONART_CHANGE = 'CHANGE';

    public const string AKTIONART_DELETE = 'DELETE';

    public const string AKTIONART_REFERENZ = 'REFERENZ';

    public function __construct(
        /**
         * optional
         *
         * @see AKTIONART_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('aktionart')]
        protected string $aktionart = ''
    ) {}

    public function getAktionart(): ?string
    {
        return $this->aktionart;
    }

    public function setAktionart(?string $aktionart): Aktion
    {
        $this->aktionart = $aktionart;

        return $this;
    }
}
