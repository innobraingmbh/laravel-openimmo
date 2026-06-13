<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Feld
 *
 * @description Einzelnes Datenfeld im OpenImmo-Format
 */
#[XmlRoot(name: 'feld')]
class Feld
{
    public function __construct(
        /** @description Nachname der Kontaktperson */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('name')]
        protected string $name = '',
        /** @description Wert des Feldes */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('wert')]
        protected string $wert = '',
        /** @description Typ oder Art */
        #[XmlList(entry: 'typ', inline: true)]
        #[Type('array<string>')]
        #[SkipWhenEmpty]
        #[SerializedName('typ')]
        protected array $typ = [],
        /** @description Modus des Datentransfers */
        #[XmlList(entry: 'modus', inline: true)]
        #[Type('array<string>')]
        #[SkipWhenEmpty]
        #[SerializedName('modus')]
        protected array $modus = []
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Feld
    {
        $this->name = $name;

        return $this;
    }

    public function getWert(): string
    {
        return $this->wert;
    }

    public function setWert(string $wert): Feld
    {
        $this->wert = $wert;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getTyp(): array
    {
        return $this->typ;
    }

    public function setTyp(array $typ): Feld
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getModus(): array
    {
        return $this->modus;
    }

    public function setModus(array $modus): Feld
    {
        $this->modus = $modus;

        return $this;
    }
}
