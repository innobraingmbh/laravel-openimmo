<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kitchen
 * Welche Eigenschaften besitzt die Küche, Optionen kombinierbar
 */
#[Description('Kitchen equipment features of the property')]
#[XmlRoot(name: 'kueche')]
class Kitchen
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('EBK')]
        #[Description('Built-in kitchen available')]
        protected ?bool $builtInKitchen = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('OFFEN')]
        #[Description('Open kitchen available')]
        protected ?bool $open = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('PANTRY')]
        #[Description('Pantry available')]
        protected ?bool $pantry = null
    ) {}

    public function getBuiltInKitchen(): ?bool
    {
        return $this->builtInKitchen;
    }

    public function setBuiltInKitchen(?bool $builtInKitchen): Kitchen
    {
        $this->builtInKitchen = $builtInKitchen;

        return $this;
    }

    public function getOpen(): ?bool
    {
        return $this->open;
    }

    public function setOpen(?bool $open): Kitchen
    {
        $this->open = $open;

        return $this;
    }

    public function getPantry(): ?bool
    {
        return $this->pantry;
    }

    public function setPantry(?bool $pantry): Kitchen
    {
        $this->pantry = $pantry;

        return $this;
    }
}
