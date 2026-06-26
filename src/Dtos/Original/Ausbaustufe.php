<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausbaustufe
 */
#[Description('Ausbaustufe des Gebäudes')]
#[XmlRoot(name: 'ausbaustufe')]
class Ausbaustufe
{
    public function __construct(
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('BAUSATZHAUS')]
        #[Description('Fertighaus')]
        protected ?bool $bausatzhaus = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('AUSBAUHAUS')]
        #[Description('Haus ist ausbaufähig')]
        protected ?bool $ausbauhaus = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SCHLUESSELFERTIGMITKELLER')]
        #[Description('Schlüsselfertig mit Keller')]
        protected ?bool $schluesselfertigmitkeller = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SCHLUESSELFERTIGOHNEBODENPLATTE')]
        #[Description('Schlüsselfertig ohne Bodenplatte')]
        protected ?bool $schluesselfertigohnebodenplatte = null,
        /** optional */
        #[Type('bool')]
        #[XmlAttribute]
        #[SerializedName('SCHLUESSELFERTIGMITBODENPLATTE')]
        #[Description('Schlüsselfertig mit Bodenplatte')]
        protected ?bool $schluesselfertigmitbodenplatte = null
    ) {}

    public function getBausatzhaus(): ?bool
    {
        return $this->bausatzhaus;
    }

    public function setBausatzhaus(?bool $bausatzhaus): Ausbaustufe
    {
        $this->bausatzhaus = $bausatzhaus;

        return $this;
    }

    public function getAusbauhaus(): ?bool
    {
        return $this->ausbauhaus;
    }

    public function setAusbauhaus(?bool $ausbauhaus): Ausbaustufe
    {
        $this->ausbauhaus = $ausbauhaus;

        return $this;
    }

    public function getSchluesselfertigmitkeller(): ?bool
    {
        return $this->schluesselfertigmitkeller;
    }

    public function setSchluesselfertigmitkeller(?bool $schluesselfertigmitkeller): Ausbaustufe
    {
        $this->schluesselfertigmitkeller = $schluesselfertigmitkeller;

        return $this;
    }

    public function getSchluesselfertigohnebodenplatte(): ?bool
    {
        return $this->schluesselfertigohnebodenplatte;
    }

    public function setSchluesselfertigohnebodenplatte(?bool $schluesselfertigohnebodenplatte): Ausbaustufe
    {
        $this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;

        return $this;
    }

    public function getSchluesselfertigmitbodenplatte(): ?bool
    {
        return $this->schluesselfertigmitbodenplatte;
    }

    public function setSchluesselfertigmitbodenplatte(?bool $schluesselfertigmitbodenplatte): Ausbaustufe
    {
        $this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;

        return $this;
    }
}
