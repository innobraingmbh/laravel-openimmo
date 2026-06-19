<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use Innobrain\OpenImmo\Attributes\Description;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ImpressumStrukt
 * Ergänzung ($V120)
 */
#[Description('Impressumsangaben des Anbieters')]
#[XmlRoot(name: 'impressum_strukt')]
class ImpressumStrukt
{
    public function __construct(
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Name des Unternehmens')]
        #[SerializedName('firmenname')]
        protected string $firmenname = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Unternehmensadresse des Anbieters')]
        #[SerializedName('firmenanschrift')]
        protected string $firmenanschrift = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Telefonnummer')]
        #[SerializedName('telefon')]
        protected string $telefon = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Bevollmächtigter Vertreter des Anbieters')]
        #[SerializedName('vertretungsberechtigter')]
        protected string $vertretungsberechtigter = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Zuständige Aufsichtsbehörde des Maklers')]
        #[SerializedName('berufsaufsichtsbehoerde')]
        protected string $berufsaufsichtsbehoerde = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Handelsregisterangaben des Anbieters')]
        #[SerializedName('handelsregister')]
        protected string $handelsregister = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Handelsregisternummer des Anbieters')]
        #[SerializedName('handelsregister_nr')]
        protected string $handelsregisterNr = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Umsatzsteuer-Identifikationsnummer des Anbieters')]
        #[SerializedName('umsst-id')]
        protected string $umsstId = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Steuernummer des Anbieters')]
        #[SerializedName('steuernummer')]
        protected string $steuernummer = '',
        #[Type('string')]
        #[SkipWhenEmpty]
        #[Description('Zusatzinformation')]
        #[SerializedName('weiteres')]
        protected string $weiteres = ''
    ) {}

    public function getFirmenname(): string
    {
        return $this->firmenname;
    }

    public function setFirmenname(string $firmenname): ImpressumStrukt
    {
        $this->firmenname = $firmenname;

        return $this;
    }

    public function getFirmenanschrift(): string
    {
        return $this->firmenanschrift;
    }

    public function setFirmenanschrift(string $firmenanschrift): ImpressumStrukt
    {
        $this->firmenanschrift = $firmenanschrift;

        return $this;
    }

    public function getTelefon(): string
    {
        return $this->telefon;
    }

    public function setTelefon(string $telefon): ImpressumStrukt
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getVertretungsberechtigter(): string
    {
        return $this->vertretungsberechtigter;
    }

    public function setVertretungsberechtigter(string $vertretungsberechtigter): ImpressumStrukt
    {
        $this->vertretungsberechtigter = $vertretungsberechtigter;

        return $this;
    }

    public function getBerufsaufsichtsbehoerde(): string
    {
        return $this->berufsaufsichtsbehoerde;
    }

    public function setBerufsaufsichtsbehoerde(string $berufsaufsichtsbehoerde): ImpressumStrukt
    {
        $this->berufsaufsichtsbehoerde = $berufsaufsichtsbehoerde;

        return $this;
    }

    public function getHandelsregister(): string
    {
        return $this->handelsregister;
    }

    public function setHandelsregister(string $handelsregister): ImpressumStrukt
    {
        $this->handelsregister = $handelsregister;

        return $this;
    }

    public function getHandelsregisterNr(): string
    {
        return $this->handelsregisterNr;
    }

    public function setHandelsregisterNr(string $handelsregisterNr): ImpressumStrukt
    {
        $this->handelsregisterNr = $handelsregisterNr;

        return $this;
    }

    public function getUmsstId(): string
    {
        return $this->umsstId;
    }

    public function setUmsstId(string $umsstId): ImpressumStrukt
    {
        $this->umsstId = $umsstId;

        return $this;
    }

    public function getSteuernummer(): string
    {
        return $this->steuernummer;
    }

    public function setSteuernummer(string $steuernummer): ImpressumStrukt
    {
        $this->steuernummer = $steuernummer;

        return $this;
    }

    public function getWeiteres(): string
    {
        return $this->weiteres;
    }

    public function setWeiteres(string $weiteres): ImpressumStrukt
    {
        $this->weiteres = $weiteres;

        return $this;
    }
}
