<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ImpressumStrukt
 * Ergänzung ($V120)
 *
 * @description Impressumsangaben des Anbieters
 */
#[XmlRoot(name: 'impressum_strukt')]
class ImpressumStrukt
{
    public function __construct(
        /** @description Name des Unternehmens */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('firmenname')]
        protected string $firmenname = '',
        /** @description Unternehmensadresse des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('firmenanschrift')]
        protected string $firmenanschrift = '',
        /** @description Telefonnummer */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('telefon')]
        protected string $telefon = '',
        /** @description Bevollmächtigter Vertreter des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('vertretungsberechtigter')]
        protected string $vertretungsberechtigter = '',
        /** @description Zuständige Aufsichtsbehörde des Maklers */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('berufsaufsichtsbehoerde')]
        protected string $berufsaufsichtsbehoerde = '',
        /** @description Handelsregisterangaben des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('handelsregister')]
        protected string $handelsregister = '',
        /** @description Handelsregisternummer des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('handelsregister_nr')]
        protected string $handelsregisterNr = '',
        /** @description Umsatzsteuer-Identifikationsnummer des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('umsst-id')]
        protected string $umsstId = '',
        /** @description Steuernummer des Anbieters */
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('steuernummer')]
        protected string $steuernummer = '',
        /** @description Zusatzinformation */
        #[Type('string')]
        #[SkipWhenEmpty]
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
