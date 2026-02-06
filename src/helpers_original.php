<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Innobrain\OpenImmo\Helpers\Original;

use Innobrain\OpenImmo\Dtos\Original\Aktion;
use Innobrain\OpenImmo\Dtos\Original\Alter;
use Innobrain\OpenImmo\Dtos\Original\Anbieter;
use Innobrain\OpenImmo\Dtos\Original\AngeschlGastronomie;
use Innobrain\OpenImmo\Dtos\Original\Anhaenge;
use Innobrain\OpenImmo\Dtos\Original\Anhang;
use Innobrain\OpenImmo\Dtos\Original\Ausbaustufe;
use Innobrain\OpenImmo\Dtos\Original\Ausblick;
use Innobrain\OpenImmo\Dtos\Original\AusrichtBalkonTerrasse;
use Innobrain\OpenImmo\Dtos\Original\AussenCourtage;
use Innobrain\OpenImmo\Dtos\Original\Ausstattung;
use Innobrain\OpenImmo\Dtos\Original\Bad;
use Innobrain\OpenImmo\Dtos\Original\Bauweise;
use Innobrain\OpenImmo\Dtos\Original\BebaubarNach;
use Innobrain\OpenImmo\Dtos\Original\Befeuerung;
use Innobrain\OpenImmo\Dtos\Original\Betriebskostennetto;
use Innobrain\OpenImmo\Dtos\Original\Bewertung;
use Innobrain\OpenImmo\Dtos\Original\Bieterverfahren;
use Innobrain\OpenImmo\Dtos\Original\Boden;
use Innobrain\OpenImmo\Dtos\Original\BreitbandZugang;
use Innobrain\OpenImmo\Dtos\Original\BueroPraxen;
use Innobrain\OpenImmo\Dtos\Original\Check;
use Innobrain\OpenImmo\Dtos\Original\Dachform;
use Innobrain\OpenImmo\Dtos\Original\Daten;
use Innobrain\OpenImmo\Dtos\Original\Distanzen;
use Innobrain\OpenImmo\Dtos\Original\DistanzenSport;
use Innobrain\OpenImmo\Dtos\Original\Einzelhandel;
use Innobrain\OpenImmo\Dtos\Original\EmailSonstige;
use Innobrain\OpenImmo\Dtos\Original\Energiepass;
use Innobrain\OpenImmo\Dtos\Original\Energietyp;
use Innobrain\OpenImmo\Dtos\Original\Erschliessung;
use Innobrain\OpenImmo\Dtos\Original\ErschliessungUmfang;
use Innobrain\OpenImmo\Dtos\Original\Evbnetto;
use Innobrain\OpenImmo\Dtos\Original\Fahrstuhl;
use Innobrain\OpenImmo\Dtos\Original\Flaechen;
use Innobrain\OpenImmo\Dtos\Original\Foto;
use Innobrain\OpenImmo\Dtos\Original\Freitexte;
use Innobrain\OpenImmo\Dtos\Original\FreizeitimmobilieGewerblich;
use Innobrain\OpenImmo\Dtos\Original\Gastgewerbe;
use Innobrain\OpenImmo\Dtos\Original\Geo;
use Innobrain\OpenImmo\Dtos\Original\Geokoordinaten;
use Innobrain\OpenImmo\Dtos\Original\Gesamtbelastungnetto;
use Innobrain\OpenImmo\Dtos\Original\Gesamtkostenprom2von;
use Innobrain\OpenImmo\Dtos\Original\Gesamtmietenetto;
use Innobrain\OpenImmo\Dtos\Original\Geschlecht;
use Innobrain\OpenImmo\Dtos\Original\Grundstueck;
use Innobrain\OpenImmo\Dtos\Original\HallenLagerProd;
use Innobrain\OpenImmo\Dtos\Original\Hauptmietzinsnetto;
use Innobrain\OpenImmo\Dtos\Original\Haus;
use Innobrain\OpenImmo\Dtos\Original\Heizkostennetto;
use Innobrain\OpenImmo\Dtos\Original\Heizungsart;
use Innobrain\OpenImmo\Dtos\Original\Immobilie;
use Innobrain\OpenImmo\Dtos\Original\ImpressumStrukt;
use Innobrain\OpenImmo\Dtos\Original\Infrastruktur;
use Innobrain\OpenImmo\Dtos\Original\InnenCourtage;
use Innobrain\OpenImmo\Dtos\Original\Kaufpreis;
use Innobrain\OpenImmo\Dtos\Original\Kaufpreisnetto;
use Innobrain\OpenImmo\Dtos\Original\Kontaktperson;
use Innobrain\OpenImmo\Dtos\Original\Kueche;
use Innobrain\OpenImmo\Dtos\Original\LageGebiet;
use Innobrain\OpenImmo\Dtos\Original\LageImBau;
use Innobrain\OpenImmo\Dtos\Original\Land;
use Innobrain\OpenImmo\Dtos\Original\LandUndForstwirtschaft;
use Innobrain\OpenImmo\Dtos\Original\Master;
use Innobrain\OpenImmo\Dtos\Original\MaxMietdauer;
use Innobrain\OpenImmo\Dtos\Original\MieteinnahmenIst;
use Innobrain\OpenImmo\Dtos\Original\MieteinnahmenSoll;
use Innobrain\OpenImmo\Dtos\Original\MinMietdauer;
use Innobrain\OpenImmo\Dtos\Original\Moebliert;
use Innobrain\OpenImmo\Dtos\Original\Monatlichekostennetto;
use Innobrain\OpenImmo\Dtos\Original\Nebenkostenprom2von;
use Innobrain\OpenImmo\Dtos\Original\Nettomieteprom2von;
use Innobrain\OpenImmo\Dtos\Original\Nutzungsart;
use Innobrain\OpenImmo\Dtos\Original\Objektart;
use Innobrain\OpenImmo\Dtos\Original\Objektkategorie;
use Innobrain\OpenImmo\Dtos\Original\ObjektText;
use Innobrain\OpenImmo\Dtos\Original\Openimmo;
use Innobrain\OpenImmo\Dtos\Original\Parken;
use Innobrain\OpenImmo\Dtos\Original\Preise;
use Innobrain\OpenImmo\Dtos\Original\PreisZeiteinheit;
use Innobrain\OpenImmo\Dtos\Original\Provisionnetto;
use Innobrain\OpenImmo\Dtos\Original\ProvisionTeilen;
use Innobrain\OpenImmo\Dtos\Original\Ruecklagenetto;
use Innobrain\OpenImmo\Dtos\Original\Serviceleistungen;
use Innobrain\OpenImmo\Dtos\Original\Sicherheitstechnik;
use Innobrain\OpenImmo\Dtos\Original\Sonstige;
use Innobrain\OpenImmo\Dtos\Original\Sonstigekostennetto;
use Innobrain\OpenImmo\Dtos\Original\Sonstigemietenetto;
use Innobrain\OpenImmo\Dtos\Original\Stellplatzart;
use Innobrain\OpenImmo\Dtos\Original\StpCarport;
use Innobrain\OpenImmo\Dtos\Original\StpDuplex;
use Innobrain\OpenImmo\Dtos\Original\StpFreiplatz;
use Innobrain\OpenImmo\Dtos\Original\StpGarage;
use Innobrain\OpenImmo\Dtos\Original\StpParkhaus;
use Innobrain\OpenImmo\Dtos\Original\StpSonstige;
use Innobrain\OpenImmo\Dtos\Original\StpTiefgarage;
use Innobrain\OpenImmo\Dtos\Original\Summemietenetto;
use Innobrain\OpenImmo\Dtos\Original\TelSonstige;
use Innobrain\OpenImmo\Dtos\Original\Uebertragung;
use Innobrain\OpenImmo\Dtos\Original\Unterkellert;
use Innobrain\OpenImmo\Dtos\Original\Verkaufstatus;
use Innobrain\OpenImmo\Dtos\Original\Vermarktungsart;
use Innobrain\OpenImmo\Dtos\Original\Versteigerung;
use Innobrain\OpenImmo\Dtos\Original\VerwaltungObjekt;
use Innobrain\OpenImmo\Dtos\Original\VerwaltungTechn;
use Innobrain\OpenImmo\Dtos\Original\Waehrung;
use Innobrain\OpenImmo\Dtos\Original\WeitereAdresse;
use Innobrain\OpenImmo\Dtos\Original\Wohnung;
use Innobrain\OpenImmo\Dtos\Original\Zimmer;
use Innobrain\OpenImmo\Dtos\Original\ZinshausRenditeobjekt;
use Innobrain\OpenImmo\Dtos\Original\Zustand;
use Innobrain\OpenImmo\Dtos\Original\ZustandAngaben;

/**
 * Will return the Uebertragung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getUebertragung(Openimmo $openImmo): Uebertragung
{
    $child = $openImmo->getUebertragung();

    if (! $child instanceof Uebertragung) {
        $child = new Uebertragung;
        $openImmo->setUebertragung($child);
    }

    return $child;
}

/**
 * Will return the Check object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getCheck(Openimmo $openImmo): Check
{
    $parent = getAnhang($openImmo);
    $child = $parent->getCheck();

    if (! $child instanceof Check) {
        $child = new Check;
        $parent->setCheck($child);
    }

    return $child;
}

/**
 * Will return the Daten object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDaten(Openimmo $openImmo): Daten
{
    $parent = getAnhang($openImmo);
    $child = $parent->getDaten();

    if (! $child instanceof Daten) {
        $child = new Daten;
        $parent->setDaten($child);
    }

    return $child;
}

/**
 * Will return the Anhang object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAnhang(Openimmo $openImmo): Anhang
{
    $parent = getAnbieter($openImmo);
    $child = $parent->getAnhang();

    if (! $child instanceof Anhang) {
        $child = new Anhang;
        $parent->setAnhang($child);
    }

    return $child;
}

/**
 * Will return the Nutzungsart object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNutzungsart(Openimmo $openImmo): Nutzungsart
{
    $parent = getObjektkategorie($openImmo);
    $child = $parent->getNutzungsart();

    if (! $child instanceof Nutzungsart) {
        $child = new Nutzungsart;
        $parent->setNutzungsart($child);
    }

    return $child;
}

/**
 * Will return the Vermarktungsart object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getVermarktungsart(Openimmo $openImmo): Vermarktungsart
{
    $parent = getObjektkategorie($openImmo);
    $child = $parent->getVermarktungsart();

    if (! $child instanceof Vermarktungsart) {
        $child = new Vermarktungsart;
        $parent->setVermarktungsart($child);
    }

    return $child;
}

/**
 * Will return the Zimmer object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getZimmer(Openimmo $openImmo): Zimmer
{
    $parent = getObjektart($openImmo);
    $children = $parent->getZimmer();
    $child = data_get($children, '0');

    if (! $child instanceof Zimmer) {
        $child = new Zimmer;
        $children[] = $child;
        $parent->setZimmer($children);
    }

    return $child;
}

/**
 * Will return the Wohnung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getWohnung(Openimmo $openImmo): Wohnung
{
    $parent = getObjektart($openImmo);
    $children = $parent->getWohnung();
    $child = data_get($children, '0');

    if (! $child instanceof Wohnung) {
        $child = new Wohnung;
        $children[] = $child;
        $parent->setWohnung($children);
    }

    return $child;
}

/**
 * Will return the Haus object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHaus(Openimmo $openImmo): Haus
{
    $parent = getObjektart($openImmo);
    $children = $parent->getHaus();
    $child = data_get($children, '0');

    if (! $child instanceof Haus) {
        $child = new Haus;
        $children[] = $child;
        $parent->setHaus($children);
    }

    return $child;
}

/**
 * Will return the Grundstueck object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGrundstueck(Openimmo $openImmo): Grundstueck
{
    $parent = getObjektart($openImmo);
    $children = $parent->getGrundstueck();
    $child = data_get($children, '0');

    if (! $child instanceof Grundstueck) {
        $child = new Grundstueck;
        $children[] = $child;
        $parent->setGrundstueck($children);
    }

    return $child;
}

/**
 * Will return the BueroPraxen object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBueroPraxen(Openimmo $openImmo): BueroPraxen
{
    $parent = getObjektart($openImmo);
    $children = $parent->getBueroPraxen();
    $child = data_get($children, '0');

    if (! $child instanceof BueroPraxen) {
        $child = new BueroPraxen;
        $children[] = $child;
        $parent->setBueroPraxen($children);
    }

    return $child;
}

/**
 * Will return the Einzelhandel object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEinzelhandel(Openimmo $openImmo): Einzelhandel
{
    $parent = getObjektart($openImmo);
    $children = $parent->getEinzelhandel();
    $child = data_get($children, '0');

    if (! $child instanceof Einzelhandel) {
        $child = new Einzelhandel;
        $children[] = $child;
        $parent->setEinzelhandel($children);
    }

    return $child;
}

/**
 * Will return the Gastgewerbe object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGastgewerbe(Openimmo $openImmo): Gastgewerbe
{
    $parent = getObjektart($openImmo);
    $children = $parent->getGastgewerbe();
    $child = data_get($children, '0');

    if (! $child instanceof Gastgewerbe) {
        $child = new Gastgewerbe;
        $children[] = $child;
        $parent->setGastgewerbe($children);
    }

    return $child;
}

/**
 * Will return the HallenLagerProd object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHallenLagerProd(Openimmo $openImmo): HallenLagerProd
{
    $parent = getObjektart($openImmo);
    $children = $parent->getHallenLagerProd();
    $child = data_get($children, '0');

    if (! $child instanceof HallenLagerProd) {
        $child = new HallenLagerProd;
        $children[] = $child;
        $parent->setHallenLagerProd($children);
    }

    return $child;
}

/**
 * Will return the LandUndForstwirtschaft object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getLandUndForstwirtschaft(Openimmo $openImmo): LandUndForstwirtschaft
{
    $parent = getObjektart($openImmo);
    $children = $parent->getLandUndForstwirtschaft();
    $child = data_get($children, '0');

    if (! $child instanceof LandUndForstwirtschaft) {
        $child = new LandUndForstwirtschaft;
        $children[] = $child;
        $parent->setLandUndForstwirtschaft($children);
    }

    return $child;
}

/**
 * Will return the Parken object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getParken(Openimmo $openImmo): Parken
{
    $parent = getObjektart($openImmo);
    $children = $parent->getParken();
    $child = data_get($children, '0');

    if (! $child instanceof Parken) {
        $child = new Parken;
        $children[] = $child;
        $parent->setParken($children);
    }

    return $child;
}

/**
 * Will return the Sonstige object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSonstige(Openimmo $openImmo): Sonstige
{
    $parent = getObjektart($openImmo);
    $children = $parent->getSonstige();
    $child = data_get($children, '0');

    if (! $child instanceof Sonstige) {
        $child = new Sonstige;
        $children[] = $child;
        $parent->setSonstige($children);
    }

    return $child;
}

/**
 * Will return the FreizeitimmobilieGewerblich object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFreizeitimmobilieGewerblich(Openimmo $openImmo): FreizeitimmobilieGewerblich
{
    $parent = getObjektart($openImmo);
    $children = $parent->getFreizeitimmobilieGewerblich();
    $child = data_get($children, '0');

    if (! $child instanceof FreizeitimmobilieGewerblich) {
        $child = new FreizeitimmobilieGewerblich;
        $children[] = $child;
        $parent->setFreizeitimmobilieGewerblich($children);
    }

    return $child;
}

/**
 * Will return the ZinshausRenditeobjekt object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getZinshausRenditeobjekt(Openimmo $openImmo): ZinshausRenditeobjekt
{
    $parent = getObjektart($openImmo);
    $children = $parent->getZinshausRenditeobjekt();
    $child = data_get($children, '0');

    if (! $child instanceof ZinshausRenditeobjekt) {
        $child = new ZinshausRenditeobjekt;
        $children[] = $child;
        $parent->setZinshausRenditeobjekt($children);
    }

    return $child;
}

/**
 * Will return the Objektart object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getObjektart(Openimmo $openImmo): Objektart
{
    $parent = getObjektkategorie($openImmo);
    $child = $parent->getObjektart();

    if (! $child instanceof Objektart) {
        $child = new Objektart;
        $parent->setObjektart($child);
    }

    return $child;
}

/**
 * Will return the Objektkategorie object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getObjektkategorie(Openimmo $openImmo): Objektkategorie
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getObjektkategorie();

    if (! $child instanceof Objektkategorie) {
        $child = new Objektkategorie;
        $parent->setObjektkategorie($child);
    }

    return $child;
}

/**
 * Will return the Geokoordinaten object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGeokoordinaten(Openimmo $openImmo): Geokoordinaten
{
    $parent = getGeo($openImmo);
    $child = $parent->getGeokoordinaten();

    if (! $child instanceof Geokoordinaten) {
        $child = new Geokoordinaten;
        $parent->setGeokoordinaten($child);
    }

    return $child;
}

/**
 * Will return the Land object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getLand(Openimmo $openImmo): Land
{
    $parent = getGeo($openImmo);
    $child = $parent->getLand();

    if (! $child instanceof Land) {
        $child = new Land;
        $parent->setLand($child);
    }

    return $child;
}

/**
 * Will return the LageImBau object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getLageImBau(Openimmo $openImmo): LageImBau
{
    $parent = getGeo($openImmo);
    $child = $parent->getLageImBau();

    if (! $child instanceof LageImBau) {
        $child = new LageImBau;
        $parent->setLageImBau($child);
    }

    return $child;
}

/**
 * Will return the LageGebiet object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getLageGebiet(Openimmo $openImmo): LageGebiet
{
    $parent = getGeo($openImmo);
    $child = $parent->getLageGebiet();

    if (! $child instanceof LageGebiet) {
        $child = new LageGebiet;
        $parent->setLageGebiet($child);
    }

    return $child;
}

/**
 * Will return the Geo object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGeo(Openimmo $openImmo): Geo
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getGeo();

    if (! $child instanceof Geo) {
        $child = new Geo;
        $parent->setGeo($child);
    }

    return $child;
}

/**
 * Will return the EmailSonstige object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEmailSonstige(Openimmo $openImmo): EmailSonstige
{
    $parent = getKontaktperson($openImmo);
    $children = $parent->getEmailSonstige();
    $child = data_get($children, '0');

    if (! $child instanceof EmailSonstige) {
        $child = new EmailSonstige;
        $children[] = $child;
        $parent->setEmailSonstige($children);
    }

    return $child;
}

/**
 * Will return the TelSonstige object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getTelSonstige(Openimmo $openImmo): TelSonstige
{
    $parent = getKontaktperson($openImmo);
    $children = $parent->getTelSonstige();
    $child = data_get($children, '0');

    if (! $child instanceof TelSonstige) {
        $child = new TelSonstige;
        $children[] = $child;
        $parent->setTelSonstige($children);
    }

    return $child;
}

/**
 * Will return the Foto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFoto(Openimmo $openImmo): Foto
{
    $parent = getKontaktperson($openImmo);
    $child = $parent->getFoto();

    if (! $child instanceof Foto) {
        $child = new Foto;
        $parent->setFoto($child);
    }

    return $child;
}

/**
 * Will return the Kontaktperson object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getKontaktperson(Openimmo $openImmo): Kontaktperson
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getKontaktperson();

    if (! $child instanceof Kontaktperson) {
        $child = new Kontaktperson;
        $parent->setKontaktperson($child);
    }

    return $child;
}

/**
 * Will return the WeitereAdresse object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getWeitereAdresse(Openimmo $openImmo): WeitereAdresse
{
    $parent = getImmobilie($openImmo);
    $children = $parent->getWeitereAdresse();
    $child = data_get($children, '0');

    if (! $child instanceof WeitereAdresse) {
        $child = new WeitereAdresse;
        $children[] = $child;
        $parent->setWeitereAdresse($children);
    }

    return $child;
}

/**
 * Will return the Kaufpreis object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getKaufpreis(Openimmo $openImmo): Kaufpreis
{
    $parent = getPreise($openImmo);
    $child = $parent->getKaufpreis();

    if (! $child instanceof Kaufpreis) {
        $child = new Kaufpreis;
        $parent->setKaufpreis($child);
    }

    return $child;
}

/**
 * Will return the Kaufpreisnetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getKaufpreisnetto(Openimmo $openImmo): Kaufpreisnetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getKaufpreisnetto();

    if (! $child instanceof Kaufpreisnetto) {
        $child = new Kaufpreisnetto;
        $parent->setKaufpreisnetto($child);
    }

    return $child;
}

/**
 * Will return the Hauptmietzinsnetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHauptmietzinsnetto(Openimmo $openImmo): Hauptmietzinsnetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getHauptmietzinsnetto();

    if (! $child instanceof Hauptmietzinsnetto) {
        $child = new Hauptmietzinsnetto;
        $parent->setHauptmietzinsnetto($child);
    }

    return $child;
}

/**
 * Will return the Betriebskostennetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBetriebskostennetto(Openimmo $openImmo): Betriebskostennetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getBetriebskostennetto();

    if (! $child instanceof Betriebskostennetto) {
        $child = new Betriebskostennetto;
        $parent->setBetriebskostennetto($child);
    }

    return $child;
}

/**
 * Will return the Evbnetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEvbnetto(Openimmo $openImmo): Evbnetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getEvbnetto();

    if (! $child instanceof Evbnetto) {
        $child = new Evbnetto;
        $parent->setEvbnetto($child);
    }

    return $child;
}

/**
 * Will return the Gesamtmietenetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGesamtmietenetto(Openimmo $openImmo): Gesamtmietenetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getGesamtmietenetto();

    if (! $child instanceof Gesamtmietenetto) {
        $child = new Gesamtmietenetto;
        $parent->setGesamtmietenetto($child);
    }

    return $child;
}

/**
 * Will return the Gesamtbelastungnetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGesamtbelastungnetto(Openimmo $openImmo): Gesamtbelastungnetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getGesamtbelastungnetto();

    if (! $child instanceof Gesamtbelastungnetto) {
        $child = new Gesamtbelastungnetto;
        $parent->setGesamtbelastungnetto($child);
    }

    return $child;
}

/**
 * Will return the Gesamtkostenprom2von object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGesamtkostenprom2von(Openimmo $openImmo): Gesamtkostenprom2von
{
    $parent = getPreise($openImmo);
    $child = $parent->getGesamtkostenprom2von();

    if (! $child instanceof Gesamtkostenprom2von) {
        $child = new Gesamtkostenprom2von;
        $parent->setGesamtkostenprom2von($child);
    }

    return $child;
}

/**
 * Will return the Heizkostennetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHeizkostennetto(Openimmo $openImmo): Heizkostennetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getHeizkostennetto();

    if (! $child instanceof Heizkostennetto) {
        $child = new Heizkostennetto;
        $parent->setHeizkostennetto($child);
    }

    return $child;
}

/**
 * Will return the Monatlichekostennetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMonatlichekostennetto(Openimmo $openImmo): Monatlichekostennetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getMonatlichekostennetto();

    if (! $child instanceof Monatlichekostennetto) {
        $child = new Monatlichekostennetto;
        $parent->setMonatlichekostennetto($child);
    }

    return $child;
}

/**
 * Will return the Nebenkostenprom2von object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNebenkostenprom2von(Openimmo $openImmo): Nebenkostenprom2von
{
    $parent = getPreise($openImmo);
    $child = $parent->getNebenkostenprom2von();

    if (! $child instanceof Nebenkostenprom2von) {
        $child = new Nebenkostenprom2von;
        $parent->setNebenkostenprom2von($child);
    }

    return $child;
}

/**
 * Will return the Ruecklagenetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getRuecklagenetto(Openimmo $openImmo): Ruecklagenetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getRuecklagenetto();

    if (! $child instanceof Ruecklagenetto) {
        $child = new Ruecklagenetto;
        $parent->setRuecklagenetto($child);
    }

    return $child;
}

/**
 * Will return the Sonstigekostennetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSonstigekostennetto(Openimmo $openImmo): Sonstigekostennetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getSonstigekostennetto();

    if (! $child instanceof Sonstigekostennetto) {
        $child = new Sonstigekostennetto;
        $parent->setSonstigekostennetto($child);
    }

    return $child;
}

/**
 * Will return the Sonstigemietenetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSonstigemietenetto(Openimmo $openImmo): Sonstigemietenetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getSonstigemietenetto();

    if (! $child instanceof Sonstigemietenetto) {
        $child = new Sonstigemietenetto;
        $parent->setSonstigemietenetto($child);
    }

    return $child;
}

/**
 * Will return the Summemietenetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSummemietenetto(Openimmo $openImmo): Summemietenetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getSummemietenetto();

    if (! $child instanceof Summemietenetto) {
        $child = new Summemietenetto;
        $parent->setSummemietenetto($child);
    }

    return $child;
}

/**
 * Will return the Nettomieteprom2von object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getNettomieteprom2von(Openimmo $openImmo): Nettomieteprom2von
{
    $parent = getPreise($openImmo);
    $child = $parent->getNettomieteprom2von();

    if (! $child instanceof Nettomieteprom2von) {
        $child = new Nettomieteprom2von;
        $parent->setNettomieteprom2von($child);
    }

    return $child;
}

/**
 * Will return the PreisZeiteinheit object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPreisZeiteinheit(Openimmo $openImmo): PreisZeiteinheit
{
    $parent = getPreise($openImmo);
    $child = $parent->getPreisZeiteinheit();

    if (! $child instanceof PreisZeiteinheit) {
        $child = new PreisZeiteinheit;
        $parent->setPreisZeiteinheit($child);
    }

    return $child;
}

/**
 * Will return the ProvisionTeilen object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getProvisionTeilen(Openimmo $openImmo): ProvisionTeilen
{
    $parent = getPreise($openImmo);
    $child = $parent->getProvisionTeilen();

    if (! $child instanceof ProvisionTeilen) {
        $child = new ProvisionTeilen;
        $parent->setProvisionTeilen($child);
    }

    return $child;
}

/**
 * Will return the InnenCourtage object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getInnenCourtage(Openimmo $openImmo): InnenCourtage
{
    $parent = getPreise($openImmo);
    $child = $parent->getInnenCourtage();

    if (! $child instanceof InnenCourtage) {
        $child = new InnenCourtage;
        $parent->setInnenCourtage($child);
    }

    return $child;
}

/**
 * Will return the AussenCourtage object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAussenCourtage(Openimmo $openImmo): AussenCourtage
{
    $parent = getPreise($openImmo);
    $child = $parent->getAussenCourtage();

    if (! $child instanceof AussenCourtage) {
        $child = new AussenCourtage;
        $parent->setAussenCourtage($child);
    }

    return $child;
}

/**
 * Will return the Provisionnetto object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getProvisionnetto(Openimmo $openImmo): Provisionnetto
{
    $parent = getPreise($openImmo);
    $child = $parent->getProvisionnetto();

    if (! $child instanceof Provisionnetto) {
        $child = new Provisionnetto;
        $parent->setProvisionnetto($child);
    }

    return $child;
}

/**
 * Will return the Waehrung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getWaehrung(Openimmo $openImmo): Waehrung
{
    $parent = getPreise($openImmo);
    $child = $parent->getWaehrung();

    if (! $child instanceof Waehrung) {
        $child = new Waehrung;
        $parent->setWaehrung($child);
    }

    return $child;
}

/**
 * Will return the MieteinnahmenIst object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMieteinnahmenIst(Openimmo $openImmo): MieteinnahmenIst
{
    $parent = getPreise($openImmo);
    $child = $parent->getMieteinnahmenIst();

    if (! $child instanceof MieteinnahmenIst) {
        $child = new MieteinnahmenIst;
        $parent->setMieteinnahmenIst($child);
    }

    return $child;
}

/**
 * Will return the MieteinnahmenSoll object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMieteinnahmenSoll(Openimmo $openImmo): MieteinnahmenSoll
{
    $parent = getPreise($openImmo);
    $child = $parent->getMieteinnahmenSoll();

    if (! $child instanceof MieteinnahmenSoll) {
        $child = new MieteinnahmenSoll;
        $parent->setMieteinnahmenSoll($child);
    }

    return $child;
}

/**
 * Will return the StpCarport object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpCarport(Openimmo $openImmo): StpCarport
{
    $parent = getPreise($openImmo);
    $child = $parent->getStpCarport();

    if (! $child instanceof StpCarport) {
        $child = new StpCarport;
        $parent->setStpCarport($child);
    }

    return $child;
}

/**
 * Will return the StpDuplex object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpDuplex(Openimmo $openImmo): StpDuplex
{
    $parent = getPreise($openImmo);
    $child = $parent->getStpDuplex();

    if (! $child instanceof StpDuplex) {
        $child = new StpDuplex;
        $parent->setStpDuplex($child);
    }

    return $child;
}

/**
 * Will return the StpFreiplatz object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpFreiplatz(Openimmo $openImmo): StpFreiplatz
{
    $parent = getPreise($openImmo);
    $child = $parent->getStpFreiplatz();

    if (! $child instanceof StpFreiplatz) {
        $child = new StpFreiplatz;
        $parent->setStpFreiplatz($child);
    }

    return $child;
}

/**
 * Will return the StpGarage object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpGarage(Openimmo $openImmo): StpGarage
{
    $parent = getPreise($openImmo);
    $child = $parent->getStpGarage();

    if (! $child instanceof StpGarage) {
        $child = new StpGarage;
        $parent->setStpGarage($child);
    }

    return $child;
}

/**
 * Will return the StpParkhaus object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpParkhaus(Openimmo $openImmo): StpParkhaus
{
    $parent = getPreise($openImmo);
    $child = $parent->getStpParkhaus();

    if (! $child instanceof StpParkhaus) {
        $child = new StpParkhaus;
        $parent->setStpParkhaus($child);
    }

    return $child;
}

/**
 * Will return the StpTiefgarage object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpTiefgarage(Openimmo $openImmo): StpTiefgarage
{
    $parent = getPreise($openImmo);
    $child = $parent->getStpTiefgarage();

    if (! $child instanceof StpTiefgarage) {
        $child = new StpTiefgarage;
        $parent->setStpTiefgarage($child);
    }

    return $child;
}

/**
 * Will return the StpSonstige object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStpSonstige(Openimmo $openImmo): StpSonstige
{
    $parent = getPreise($openImmo);
    $children = $parent->getStpSonstige();
    $child = data_get($children, '0');

    if (! $child instanceof StpSonstige) {
        $child = new StpSonstige;
        $children[] = $child;
        $parent->setStpSonstige($children);
    }

    return $child;
}

/**
 * Will return the Preise object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getPreise(Openimmo $openImmo): Preise
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getPreise();

    if (! $child instanceof Preise) {
        $child = new Preise;
        $parent->setPreise($child);
    }

    return $child;
}

/**
 * Will return the Bieterverfahren object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBieterverfahren(Openimmo $openImmo): Bieterverfahren
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getBieterverfahren();

    if (! $child instanceof Bieterverfahren) {
        $child = new Bieterverfahren;
        $parent->setBieterverfahren($child);
    }

    return $child;
}

/**
 * Will return the Versteigerung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getVersteigerung(Openimmo $openImmo): Versteigerung
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getVersteigerung();

    if (! $child instanceof Versteigerung) {
        $child = new Versteigerung;
        $parent->setVersteigerung($child);
    }

    return $child;
}

/**
 * Will return the Flaechen object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFlaechen(Openimmo $openImmo): Flaechen
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getFlaechen();

    if (! $child instanceof Flaechen) {
        $child = new Flaechen;
        $parent->setFlaechen($child);
    }

    return $child;
}

/**
 * Will return the Bad object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBad(Openimmo $openImmo): Bad
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getBad();

    if (! $child instanceof Bad) {
        $child = new Bad;
        $parent->setBad($child);
    }

    return $child;
}

/**
 * Will return the Kueche object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getKueche(Openimmo $openImmo): Kueche
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getKueche();

    if (! $child instanceof Kueche) {
        $child = new Kueche;
        $parent->setKueche($child);
    }

    return $child;
}

/**
 * Will return the Boden object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBoden(Openimmo $openImmo): Boden
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getBoden();

    if (! $child instanceof Boden) {
        $child = new Boden;
        $parent->setBoden($child);
    }

    return $child;
}

/**
 * Will return the Heizungsart object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getHeizungsart(Openimmo $openImmo): Heizungsart
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getHeizungsart();

    if (! $child instanceof Heizungsart) {
        $child = new Heizungsart;
        $parent->setHeizungsart($child);
    }

    return $child;
}

/**
 * Will return the Befeuerung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBefeuerung(Openimmo $openImmo): Befeuerung
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getBefeuerung();

    if (! $child instanceof Befeuerung) {
        $child = new Befeuerung;
        $parent->setBefeuerung($child);
    }

    return $child;
}

/**
 * Will return the Fahrstuhl object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFahrstuhl(Openimmo $openImmo): Fahrstuhl
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getFahrstuhl();

    if (! $child instanceof Fahrstuhl) {
        $child = new Fahrstuhl;
        $parent->setFahrstuhl($child);
    }

    return $child;
}

/**
 * Will return the Stellplatzart object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getStellplatzart(Openimmo $openImmo): Stellplatzart
{
    $parent = getAusstattung($openImmo);
    $children = $parent->getStellplatzart();
    $child = data_get($children, '0');

    if (! $child instanceof Stellplatzart) {
        $child = new Stellplatzart;
        $children[] = $child;
        $parent->setStellplatzart($children);
    }

    return $child;
}

/**
 * Will return the AusrichtBalkonTerrasse object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAusrichtBalkonTerrasse(Openimmo $openImmo): AusrichtBalkonTerrasse
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getAusrichtBalkonTerrasse();

    if (! $child instanceof AusrichtBalkonTerrasse) {
        $child = new AusrichtBalkonTerrasse;
        $parent->setAusrichtBalkonTerrasse($child);
    }

    return $child;
}

/**
 * Will return the Moebliert object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMoebliert(Openimmo $openImmo): Moebliert
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getMoebliert();

    if (! $child instanceof Moebliert) {
        $child = new Moebliert;
        $parent->setMoebliert($child);
    }

    return $child;
}

/**
 * Will return the AngeschlGastronomie object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAngeschlGastronomie(Openimmo $openImmo): AngeschlGastronomie
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getAngeschlGastronomie();

    if (! $child instanceof AngeschlGastronomie) {
        $child = new AngeschlGastronomie;
        $parent->setAngeschlGastronomie($child);
    }

    return $child;
}

/**
 * Will return the Serviceleistungen object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getServiceleistungen(Openimmo $openImmo): Serviceleistungen
{
    $parent = getAusstattung($openImmo);
    $children = $parent->getServiceleistungen();
    $child = data_get($children, '0');

    if (! $child instanceof Serviceleistungen) {
        $child = new Serviceleistungen;
        $children[] = $child;
        $parent->setServiceleistungen($children);
    }

    return $child;
}

/**
 * Will return the BreitbandZugang object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBreitbandZugang(Openimmo $openImmo): BreitbandZugang
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getBreitbandZugang();

    if (! $child instanceof BreitbandZugang) {
        $child = new BreitbandZugang;
        $parent->setBreitbandZugang($child);
    }

    return $child;
}

/**
 * Will return the Sicherheitstechnik object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getSicherheitstechnik(Openimmo $openImmo): Sicherheitstechnik
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getSicherheitstechnik();

    if (! $child instanceof Sicherheitstechnik) {
        $child = new Sicherheitstechnik;
        $parent->setSicherheitstechnik($child);
    }

    return $child;
}

/**
 * Will return the Unterkellert object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getUnterkellert(Openimmo $openImmo): Unterkellert
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getUnterkellert();

    if (! $child instanceof Unterkellert) {
        $child = new Unterkellert;
        $parent->setUnterkellert($child);
    }

    return $child;
}

/**
 * Will return the Dachform object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDachform(Openimmo $openImmo): Dachform
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getDachform();

    if (! $child instanceof Dachform) {
        $child = new Dachform;
        $parent->setDachform($child);
    }

    return $child;
}

/**
 * Will return the Bauweise object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBauweise(Openimmo $openImmo): Bauweise
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getBauweise();

    if (! $child instanceof Bauweise) {
        $child = new Bauweise;
        $parent->setBauweise($child);
    }

    return $child;
}

/**
 * Will return the Ausbaustufe object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAusbaustufe(Openimmo $openImmo): Ausbaustufe
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getAusbaustufe();

    if (! $child instanceof Ausbaustufe) {
        $child = new Ausbaustufe;
        $parent->setAusbaustufe($child);
    }

    return $child;
}

/**
 * Will return the Energietyp object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEnergietyp(Openimmo $openImmo): Energietyp
{
    $parent = getAusstattung($openImmo);
    $child = $parent->getEnergietyp();

    if (! $child instanceof Energietyp) {
        $child = new Energietyp;
        $parent->setEnergietyp($child);
    }

    return $child;
}

/**
 * Will return the Ausstattung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAusstattung(Openimmo $openImmo): Ausstattung
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getAusstattung();

    if (! $child instanceof Ausstattung) {
        $child = new Ausstattung;
        $parent->setAusstattung($child);
    }

    return $child;
}

/**
 * Will return the Zustand object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getZustand(Openimmo $openImmo): Zustand
{
    $parent = getZustandAngaben($openImmo);
    $child = $parent->getZustand();

    if (! $child instanceof Zustand) {
        $child = new Zustand;
        $parent->setZustand($child);
    }

    return $child;
}

/**
 * Will return the Alter object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAlter(Openimmo $openImmo): Alter
{
    $parent = getZustandAngaben($openImmo);
    $child = $parent->getAlter();

    if (! $child instanceof Alter) {
        $child = new Alter;
        $parent->setAlter($child);
    }

    return $child;
}

/**
 * Will return the BebaubarNach object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBebaubarNach(Openimmo $openImmo): BebaubarNach
{
    $parent = getZustandAngaben($openImmo);
    $child = $parent->getBebaubarNach();

    if (! $child instanceof BebaubarNach) {
        $child = new BebaubarNach;
        $parent->setBebaubarNach($child);
    }

    return $child;
}

/**
 * Will return the Erschliessung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getErschliessung(Openimmo $openImmo): Erschliessung
{
    $parent = getZustandAngaben($openImmo);
    $child = $parent->getErschliessung();

    if (! $child instanceof Erschliessung) {
        $child = new Erschliessung;
        $parent->setErschliessung($child);
    }

    return $child;
}

/**
 * Will return the ErschliessungUmfang object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getErschliessungUmfang(Openimmo $openImmo): ErschliessungUmfang
{
    $parent = getZustandAngaben($openImmo);
    $child = $parent->getErschliessungUmfang();

    if (! $child instanceof ErschliessungUmfang) {
        $child = new ErschliessungUmfang;
        $parent->setErschliessungUmfang($child);
    }

    return $child;
}

/**
 * Will return the Energiepass object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getEnergiepass(Openimmo $openImmo): Energiepass
{
    $parent = getZustandAngaben($openImmo);
    $children = $parent->getEnergiepass();
    $child = data_get($children, '0');

    if (! $child instanceof Energiepass) {
        $child = new Energiepass;
        $children[] = $child;
        $parent->setEnergiepass($children);
    }

    return $child;
}

/**
 * Will return the Verkaufstatus object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getVerkaufstatus(Openimmo $openImmo): Verkaufstatus
{
    $parent = getZustandAngaben($openImmo);
    $child = $parent->getVerkaufstatus();

    if (! $child instanceof Verkaufstatus) {
        $child = new Verkaufstatus;
        $parent->setVerkaufstatus($child);
    }

    return $child;
}

/**
 * Will return the ZustandAngaben object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getZustandAngaben(Openimmo $openImmo): ZustandAngaben
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getZustandAngaben();

    if (! $child instanceof ZustandAngaben) {
        $child = new ZustandAngaben;
        $parent->setZustandAngaben($child);
    }

    return $child;
}

/**
 * Will return the Bewertung object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getBewertung(Openimmo $openImmo): Bewertung
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getBewertung();

    if (! $child instanceof Bewertung) {
        $child = new Bewertung;
        $parent->setBewertung($child);
    }

    return $child;
}

/**
 * Will return the Ausblick object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAusblick(Openimmo $openImmo): Ausblick
{
    $parent = getInfrastruktur($openImmo);
    $child = $parent->getAusblick();

    if (! $child instanceof Ausblick) {
        $child = new Ausblick;
        $parent->setAusblick($child);
    }

    return $child;
}

/**
 * Will return the Distanzen object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDistanzen(Openimmo $openImmo): Distanzen
{
    $parent = getInfrastruktur($openImmo);
    $children = $parent->getDistanzen();
    $child = data_get($children, '0');

    if (! $child instanceof Distanzen) {
        $child = new Distanzen;
        $children[] = $child;
        $parent->setDistanzen($children);
    }

    return $child;
}

/**
 * Will return the DistanzenSport object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getDistanzenSport(Openimmo $openImmo): DistanzenSport
{
    $parent = getInfrastruktur($openImmo);
    $children = $parent->getDistanzenSport();
    $child = data_get($children, '0');

    if (! $child instanceof DistanzenSport) {
        $child = new DistanzenSport;
        $children[] = $child;
        $parent->setDistanzenSport($children);
    }

    return $child;
}

/**
 * Will return the Infrastruktur object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getInfrastruktur(Openimmo $openImmo): Infrastruktur
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getInfrastruktur();

    if (! $child instanceof Infrastruktur) {
        $child = new Infrastruktur;
        $parent->setInfrastruktur($child);
    }

    return $child;
}

/**
 * Will return the ObjektText object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getObjektText(Openimmo $openImmo): ObjektText
{
    $parent = getFreitexte($openImmo);
    $child = $parent->getObjektText();

    if (! $child instanceof ObjektText) {
        $child = new ObjektText;
        $parent->setObjektText($child);
    }

    return $child;
}

/**
 * Will return the Freitexte object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getFreitexte(Openimmo $openImmo): Freitexte
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getFreitexte();

    if (! $child instanceof Freitexte) {
        $child = new Freitexte;
        $parent->setFreitexte($child);
    }

    return $child;
}

/**
 * Will return the Anhaenge object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAnhaenge(Openimmo $openImmo): Anhaenge
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getAnhaenge();

    if (! $child instanceof Anhaenge) {
        $child = new Anhaenge;
        $parent->setAnhaenge($child);
    }

    return $child;
}

/**
 * Will return the MinMietdauer object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMinMietdauer(Openimmo $openImmo): MinMietdauer
{
    $parent = getVerwaltungObjekt($openImmo);
    $child = $parent->getMinMietdauer();

    if (! $child instanceof MinMietdauer) {
        $child = new MinMietdauer;
        $parent->setMinMietdauer($child);
    }

    return $child;
}

/**
 * Will return the MaxMietdauer object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMaxMietdauer(Openimmo $openImmo): MaxMietdauer
{
    $parent = getVerwaltungObjekt($openImmo);
    $child = $parent->getMaxMietdauer();

    if (! $child instanceof MaxMietdauer) {
        $child = new MaxMietdauer;
        $parent->setMaxMietdauer($child);
    }

    return $child;
}

/**
 * Will return the Geschlecht object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getGeschlecht(Openimmo $openImmo): Geschlecht
{
    $parent = getVerwaltungObjekt($openImmo);
    $child = $parent->getGeschlecht();

    if (! $child instanceof Geschlecht) {
        $child = new Geschlecht;
        $parent->setGeschlecht($child);
    }

    return $child;
}

/**
 * Will return the VerwaltungObjekt object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getVerwaltungObjekt(Openimmo $openImmo): VerwaltungObjekt
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getVerwaltungObjekt();

    if (! $child instanceof VerwaltungObjekt) {
        $child = new VerwaltungObjekt;
        $parent->setVerwaltungObjekt($child);
    }

    return $child;
}

/**
 * Will return the Aktion object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAktion(Openimmo $openImmo): Aktion
{
    $parent = getVerwaltungTechn($openImmo);
    $child = $parent->getAktion();

    if (! $child instanceof Aktion) {
        $child = new Aktion;
        $parent->setAktion($child);
    }

    return $child;
}

/**
 * Will return the Master object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getMaster(Openimmo $openImmo): Master
{
    $parent = getVerwaltungTechn($openImmo);
    $child = $parent->getMaster();

    if (! $child instanceof Master) {
        $child = new Master;
        $parent->setMaster($child);
    }

    return $child;
}

/**
 * Will return the VerwaltungTechn object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getVerwaltungTechn(Openimmo $openImmo): VerwaltungTechn
{
    $parent = getImmobilie($openImmo);
    $child = $parent->getVerwaltungTechn();

    if (! $child instanceof VerwaltungTechn) {
        $child = new VerwaltungTechn;
        $parent->setVerwaltungTechn($child);
    }

    return $child;
}

/**
 * Will return the Immobilie object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getImmobilie(Openimmo $openImmo): Immobilie
{
    $parent = getAnbieter($openImmo);
    $children = $parent->getImmobilie();
    $child = data_get($children, '0');

    if (! $child instanceof Immobilie) {
        $child = new Immobilie;
        $children[] = $child;
        $parent->setImmobilie($children);
    }

    return $child;
}

/**
 * Will return the ImpressumStrukt object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getImpressumStrukt(Openimmo $openImmo): ImpressumStrukt
{
    $parent = getAnbieter($openImmo);
    $child = $parent->getImpressumStrukt();

    if (! $child instanceof ImpressumStrukt) {
        $child = new ImpressumStrukt;
        $parent->setImpressumStrukt($child);
    }

    return $child;
}

/**
 * Will return the Anbieter object from an OpenImmo Dto.
 * If it does not exist, it will be created.
 * Make sure to call this function only on referenced objects.
 */
function getAnbieter(Openimmo $openImmo): Anbieter
{
    $children = $openImmo->getAnbieter();
    $child = data_get($children, '0');

    if (! $child instanceof Anbieter) {
        $child = new Anbieter;
        $children[] = $child;
        $openImmo->setAnbieter($children);
    }

    return $child;
}
