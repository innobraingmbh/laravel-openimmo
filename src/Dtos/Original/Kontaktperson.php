<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kontaktperson
 */
#[XmlRoot(name: 'kontaktperson')]
class Kontaktperson
{
    public function __construct(
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('email_zentrale')]
        protected ?string $emailZentrale = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('email_direkt')]
        protected ?string $emailDirekt = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('tel_zentrale')]
        protected ?string $telZentrale = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('tel_durchw')]
        protected ?string $telDurchw = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('tel_fax')]
        protected ?string $telFax = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('tel_handy')]
        protected ?string $telHandy = null,
        #[Type('string')]
        #[SkipWhenEmpty]
        #[SerializedName('name')]
        protected string $name = '',
        #[Type('string')]
        #[SerializedName('vorname')]
        protected ?string $vorname = null,
        #[Type('string')]
        #[SerializedName('titel')]
        protected ?string $titel = null,
        #[Type('string')]
        #[SerializedName('anrede')]
        protected ?string $anrede = null,
        #[Type('string')]
        #[SerializedName('position')]
        protected ?string $position = null,
        #[Type('string')]
        #[SerializedName('anrede_brief')]
        protected ?string $anredeBrief = null,
        #[Type('string')]
        #[SerializedName('firma')]
        protected ?string $firma = null,
        #[Type('string')]
        #[SerializedName('zusatzfeld')]
        protected ?string $zusatzfeld = null,
        #[Type('string')]
        #[SerializedName('strasse')]
        protected ?string $strasse = null,
        #[Type('string')]
        #[SerializedName('hausnummer')]
        protected ?string $hausnummer = null,
        #[Type('string')]
        #[SerializedName('plz')]
        protected ?string $plz = null,
        #[Type('string')]
        #[SerializedName('ort')]
        protected ?string $ort = null,
        #[Type('string')]
        #[SerializedName('postfach')]
        protected ?string $postfach = null,
        #[Type('string')]
        #[SerializedName('postf_plz')]
        protected ?string $postfPlz = null,
        #[Type('string')]
        #[SerializedName('postf_ort')]
        protected ?string $postfOrt = null,
        #[Type(Land::class)]
        #[SerializedName('land')]
        protected ?Land $land = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('email_privat')]
        protected ?string $emailPrivat = null,
        #[XmlList(entry: 'email_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\EmailSonstige>')]
        #[SkipWhenEmpty]
        #[SerializedName('email_sonstige')]
        protected array $emailSonstige = [],
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('email_feedback')]
        protected ?string $emailFeedback = null,
        /** Minimum length: 1 */
        #[Type('string')]
        #[SerializedName('tel_privat')]
        protected ?string $telPrivat = null,
        #[XmlList(entry: 'tel_sonstige', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\TelSonstige>')]
        #[SkipWhenEmpty]
        #[SerializedName('tel_sonstige')]
        protected array $telSonstige = [],
        #[Type('string')]
        #[SerializedName('url')]
        protected ?string $url = null,
        #[Type('bool')]
        #[SerializedName('adressfreigabe')]
        protected ?bool $adressfreigabe = null,
        #[Type('string')]
        #[SerializedName('personennummer')]
        protected ?string $personennummer = null,
        #[Type('string')]
        #[SerializedName('immobilientreuhaenderid')]
        protected ?string $immobilientreuhaenderid = null,
        #[Type(Foto::class)]
        #[SerializedName('foto')]
        protected ?Foto $foto = null,
        #[Type('string')]
        #[SerializedName('referenz_id')]
        protected ?string $referenzId = null,
        #[Type('string')]
        #[SerializedName('freitextfeld')]
        protected ?string $freitextfeld = null,
        #[XmlList(entry: 'user_defined_simplefield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedSimplefield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_simplefield')]
        protected array $userDefinedSimplefield = [],
        #[XmlList(entry: 'user_defined_anyfield', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedAnyfield>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_anyfield')]
        protected array $userDefinedAnyfield = [],
        #[XmlList(entry: 'user_defined_extend', inline: true)]
        #[Type('array<Innobrain\OpenImmo\Dtos\Original\UserDefinedExtend>')]
        #[SkipWhenEmpty]
        #[SerializedName('user_defined_extend')]
        protected array $userDefinedExtend = []
    ) {}

    public function getEmailZentrale(): ?string
    {
        return $this->emailZentrale;
    }

    public function setEmailZentrale(?string $emailZentrale): Kontaktperson
    {
        $this->emailZentrale = $emailZentrale;

        return $this;
    }

    public function getEmailDirekt(): ?string
    {
        return $this->emailDirekt;
    }

    public function setEmailDirekt(?string $emailDirekt): Kontaktperson
    {
        $this->emailDirekt = $emailDirekt;

        return $this;
    }

    public function getTelZentrale(): ?string
    {
        return $this->telZentrale;
    }

    public function setTelZentrale(?string $telZentrale): Kontaktperson
    {
        $this->telZentrale = $telZentrale;

        return $this;
    }

    public function getTelDurchw(): ?string
    {
        return $this->telDurchw;
    }

    public function setTelDurchw(?string $telDurchw): Kontaktperson
    {
        $this->telDurchw = $telDurchw;

        return $this;
    }

    public function getTelFax(): ?string
    {
        return $this->telFax;
    }

    public function setTelFax(?string $telFax): Kontaktperson
    {
        $this->telFax = $telFax;

        return $this;
    }

    public function getTelHandy(): ?string
    {
        return $this->telHandy;
    }

    public function setTelHandy(?string $telHandy): Kontaktperson
    {
        $this->telHandy = $telHandy;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Kontaktperson
    {
        $this->name = $name;

        return $this;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): Kontaktperson
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getTitel(): ?string
    {
        return $this->titel;
    }

    public function setTitel(?string $titel): Kontaktperson
    {
        $this->titel = $titel;

        return $this;
    }

    public function getAnrede(): ?string
    {
        return $this->anrede;
    }

    public function setAnrede(?string $anrede): Kontaktperson
    {
        $this->anrede = $anrede;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): Kontaktperson
    {
        $this->position = $position;

        return $this;
    }

    public function getAnredeBrief(): ?string
    {
        return $this->anredeBrief;
    }

    public function setAnredeBrief(?string $anredeBrief): Kontaktperson
    {
        $this->anredeBrief = $anredeBrief;

        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(?string $firma): Kontaktperson
    {
        $this->firma = $firma;

        return $this;
    }

    public function getZusatzfeld(): ?string
    {
        return $this->zusatzfeld;
    }

    public function setZusatzfeld(?string $zusatzfeld): Kontaktperson
    {
        $this->zusatzfeld = $zusatzfeld;

        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): Kontaktperson
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getHausnummer(): ?string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(?string $hausnummer): Kontaktperson
    {
        $this->hausnummer = $hausnummer;

        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): Kontaktperson
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): Kontaktperson
    {
        $this->ort = $ort;

        return $this;
    }

    public function getPostfach(): ?string
    {
        return $this->postfach;
    }

    public function setPostfach(?string $postfach): Kontaktperson
    {
        $this->postfach = $postfach;

        return $this;
    }

    public function getPostfPlz(): ?string
    {
        return $this->postfPlz;
    }

    public function setPostfPlz(?string $postfPlz): Kontaktperson
    {
        $this->postfPlz = $postfPlz;

        return $this;
    }

    public function getPostfOrt(): ?string
    {
        return $this->postfOrt;
    }

    public function setPostfOrt(?string $postfOrt): Kontaktperson
    {
        $this->postfOrt = $postfOrt;

        return $this;
    }

    public function getLand(): ?Land
    {
        return $this->land;
    }

    public function setLand(?Land $land): Kontaktperson
    {
        $this->land = $land;

        return $this;
    }

    public function getEmailPrivat(): ?string
    {
        return $this->emailPrivat;
    }

    public function setEmailPrivat(?string $emailPrivat): Kontaktperson
    {
        $this->emailPrivat = $emailPrivat;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getEmailSonstige(): array
    {
        return $this->emailSonstige;
    }

    public function setEmailSonstige(array $emailSonstige): Kontaktperson
    {
        $this->emailSonstige = $emailSonstige;

        return $this;
    }

    public function getEmailFeedback(): ?string
    {
        return $this->emailFeedback;
    }

    public function setEmailFeedback(?string $emailFeedback): Kontaktperson
    {
        $this->emailFeedback = $emailFeedback;

        return $this;
    }

    public function getTelPrivat(): ?string
    {
        return $this->telPrivat;
    }

    public function setTelPrivat(?string $telPrivat): Kontaktperson
    {
        $this->telPrivat = $telPrivat;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getTelSonstige(): array
    {
        return $this->telSonstige;
    }

    public function setTelSonstige(array $telSonstige): Kontaktperson
    {
        $this->telSonstige = $telSonstige;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Kontaktperson
    {
        $this->url = $url;

        return $this;
    }

    public function getAdressfreigabe(): ?bool
    {
        return $this->adressfreigabe;
    }

    public function setAdressfreigabe(?bool $adressfreigabe): Kontaktperson
    {
        $this->adressfreigabe = $adressfreigabe;

        return $this;
    }

    public function getPersonennummer(): ?string
    {
        return $this->personennummer;
    }

    public function setPersonennummer(?string $personennummer): Kontaktperson
    {
        $this->personennummer = $personennummer;

        return $this;
    }

    public function getImmobilientreuhaenderid(): ?string
    {
        return $this->immobilientreuhaenderid;
    }

    public function setImmobilientreuhaenderid(?string $immobilientreuhaenderid): Kontaktperson
    {
        $this->immobilientreuhaenderid = $immobilientreuhaenderid;

        return $this;
    }

    public function getFoto(): ?Foto
    {
        return $this->foto;
    }

    public function setFoto(?Foto $foto): Kontaktperson
    {
        $this->foto = $foto;

        return $this;
    }

    public function getReferenzId(): ?string
    {
        return $this->referenzId;
    }

    public function setReferenzId(?string $referenzId): Kontaktperson
    {
        $this->referenzId = $referenzId;

        return $this;
    }

    public function getFreitextfeld(): ?string
    {
        return $this->freitextfeld;
    }

    public function setFreitextfeld(?string $freitextfeld): Kontaktperson
    {
        $this->freitextfeld = $freitextfeld;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedSimplefield(): array
    {
        return $this->userDefinedSimplefield;
    }

    public function setUserDefinedSimplefield(array $userDefinedSimplefield): Kontaktperson
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedAnyfield(): array
    {
        return $this->userDefinedAnyfield;
    }

    public function setUserDefinedAnyfield(array $userDefinedAnyfield): Kontaktperson
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;

        return $this;
    }

    /**
     * Returns array of array
     */
    public function getUserDefinedExtend(): array
    {
        return $this->userDefinedExtend;
    }

    public function setUserDefinedExtend(array $userDefinedExtend): Kontaktperson
    {
        $this->userDefinedExtend = $userDefinedExtend;

        return $this;
    }
}
