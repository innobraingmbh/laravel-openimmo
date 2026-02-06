<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Waehrung
 * Währung
 */
#[XmlRoot(name: 'waehrung')]
class Waehrung
{
    public const string ISO_WAEHRUNG_AED = 'AED';

    public const string ISO_WAEHRUNG_AFA = 'AFA';

    public const string ISO_WAEHRUNG_ALL = 'ALL';

    public const string ISO_WAEHRUNG_AMD = 'AMD';

    public const string ISO_WAEHRUNG_ANG = 'ANG';

    public const string ISO_WAEHRUNG_AON = 'AON';

    public const string ISO_WAEHRUNG_ARP = 'ARP';

    public const string ISO_WAEHRUNG_ATS = 'ATS';

    public const string ISO_WAEHRUNG_AUD = 'AUD';

    public const string ISO_WAEHRUNG_AWF = 'AWF';

    public const string ISO_WAEHRUNG_AZM = 'AZM';

    public const string ISO_WAEHRUNG_BAK = 'BAK';

    public const string ISO_WAEHRUNG_BBD = 'BBD';

    public const string ISO_WAEHRUNG_BDT = 'BDT';

    public const string ISO_WAEHRUNG_BEF = 'BEF';

    public const string ISO_WAEHRUNG_BGL = 'BGL';

    public const string ISO_WAEHRUNG_BHD = 'BHD';

    public const string ISO_WAEHRUNG_BIF = 'BIF';

    public const string ISO_WAEHRUNG_BMD = 'BMD';

    public const string ISO_WAEHRUNG_BND = 'BND';

    public const string ISO_WAEHRUNG_BOB = 'BOB';

    public const string ISO_WAEHRUNG_BES = 'BES';

    public const string ISO_WAEHRUNG_BRL = 'BRL';

    public const string ISO_WAEHRUNG_BSD = 'BSD';

    public const string ISO_WAEHRUNG_BTR = 'BTR';

    public const string ISO_WAEHRUNG_BWP = 'BWP';

    public const string ISO_WAEHRUNG_BYR = 'BYR';

    public const string ISO_WAEHRUNG_BZD = 'BZD';

    public const string ISO_WAEHRUNG_CAD = 'CAD';

    public const string ISO_WAEHRUNG_CDF = 'CDF';

    public const string ISO_WAEHRUNG_CHF = 'CHF';

    public const string ISO_WAEHRUNG_CLP = 'CLP';

    public const string ISO_WAEHRUNG_CNY = 'CNY';

    public const string ISO_WAEHRUNG_COP = 'COP';

    public const string ISO_WAEHRUNG_CRC = 'CRC';

    public const string ISO_WAEHRUNG_CZK = 'CZK';

    public const string ISO_WAEHRUNG_CUP = 'CUP';

    public const string ISO_WAEHRUNG_CVE = 'CVE';

    public const string ISO_WAEHRUNG_CUW = 'CUW';

    public const string ISO_WAEHRUNG_CYP = 'CYP';

    public const string ISO_WAEHRUNG_DEM = 'DEM';

    public const string ISO_WAEHRUNG_DJF = 'DJF';

    public const string ISO_WAEHRUNG_DKK = 'DKK';

    public const string ISO_WAEHRUNG_DOP = 'DOP';

    public const string ISO_WAEHRUNG_DZD = 'DZD';

    public const string ISO_WAEHRUNG_ECS = 'ECS';

    public const string ISO_WAEHRUNG_EEK = 'EEK';

    public const string ISO_WAEHRUNG_EGP = 'EGP';

    public const string ISO_WAEHRUNG_ERN = 'ERN';

    public const string ISO_WAEHRUNG_ESP = 'ESP';

    public const string ISO_WAEHRUNG_ETB = 'ETB';

    public const string ISO_WAEHRUNG_EUR = 'EUR';

    public const string ISO_WAEHRUNG_FIM = 'FIM';

    public const string ISO_WAEHRUNG_FJD = 'FJD';

    public const string ISO_WAEHRUNG_FKP = 'FKP';

    public const string ISO_WAEHRUNG_FRF = 'FRF';

    public const string ISO_WAEHRUNG_GBP = 'GBP';

    public const string ISO_WAEHRUNG_GEL = 'GEL';

    public const string ISO_WAEHRUNG_GHC = 'GHC';

    public const string ISO_WAEHRUNG_GIP = 'GIP';

    public const string ISO_WAEHRUNG_GMD = 'GMD';

    public const string ISO_WAEHRUNG_GNF = 'GNF';

    public const string ISO_WAEHRUNG_GRD = 'GRD';

    public const string ISO_WAEHRUNG_GTQ = 'GTQ';

    public const string ISO_WAEHRUNG_GYD = 'GYD';

    public const string ISO_WAEHRUNG_HKD = 'HKD';

    public const string ISO_WAEHRUNG_HNL = 'HNL';

    public const string ISO_WAEHRUNG_HRK = 'HRK';

    public const string ISO_WAEHRUNG_HTG = 'HTG';

    public const string ISO_WAEHRUNG_HUF = 'HUF';

    public const string ISO_WAEHRUNG_IDR = 'IDR';

    public const string ISO_WAEHRUNG_IEP = 'IEP';

    public const string ISO_WAEHRUNG_ILS = 'ILS';

    public const string ISO_WAEHRUNG_INR = 'INR';

    public const string ISO_WAEHRUNG_IQD = 'IQD';

    public const string ISO_WAEHRUNG_IRR = 'IRR';

    public const string ISO_WAEHRUNG_ISK = 'ISK';

    public const string ISO_WAEHRUNG_ITL = 'ITL';

    public const string ISO_WAEHRUNG_JMD = 'JMD';

    public const string ISO_WAEHRUNG_JOD = 'JOD';

    public const string ISO_WAEHRUNG_JPY = 'JPY';

    public const string ISO_WAEHRUNG_KES = 'KES';

    public const string ISO_WAEHRUNG_KGS = 'KGS';

    public const string ISO_WAEHRUNG_KHR = 'KHR';

    public const string ISO_WAEHRUNG_KMF = 'KMF';

    public const string ISO_WAEHRUNG_KPW = 'KPW';

    public const string ISO_WAEHRUNG_KRW = 'KRW';

    public const string ISO_WAEHRUNG_KWD = 'KWD';

    public const string ISO_WAEHRUNG_KYD = 'KYD';

    public const string ISO_WAEHRUNG_KZT = 'KZT';

    public const string ISO_WAEHRUNG_LAK = 'LAK';

    public const string ISO_WAEHRUNG_LBP = 'LBP';

    public const string ISO_WAEHRUNG_LKR = 'LKR';

    public const string ISO_WAEHRUNG_LRD = 'LRD';

    public const string ISO_WAEHRUNG_LSL = 'LSL';

    public const string ISO_WAEHRUNG_LTL = 'LTL';

    public const string ISO_WAEHRUNG_LUF = 'LUF';

    public const string ISO_WAEHRUNG_LVL = 'LVL';

    public const string ISO_WAEHRUNG_LYD = 'LYD';

    public const string ISO_WAEHRUNG_MAD = 'MAD';

    public const string ISO_WAEHRUNG_MDL = 'MDL';

    public const string ISO_WAEHRUNG_MGF = 'MGF';

    public const string ISO_WAEHRUNG_MMK = 'MMK';

    public const string ISO_WAEHRUNG_MNT = 'MNT';

    public const string ISO_WAEHRUNG_MOP = 'MOP';

    public const string ISO_WAEHRUNG_MRO = 'MRO';

    public const string ISO_WAEHRUNG_MTL = 'MTL';

    public const string ISO_WAEHRUNG_MUR = 'MUR';

    public const string ISO_WAEHRUNG_MVR = 'MVR';

    public const string ISO_WAEHRUNG_MWK = 'MWK';

    public const string ISO_WAEHRUNG_MXP = 'MXP';

    public const string ISO_WAEHRUNG_MYR = 'MYR';

    public const string ISO_WAEHRUNG_MZM = 'MZM';

    public const string ISO_WAEHRUNG_NAD = 'NAD';

    public const string ISO_WAEHRUNG_NGN = 'NGN';

    public const string ISO_WAEHRUNG_NIO = 'NIO';

    public const string ISO_WAEHRUNG_NLG = 'NLG';

    public const string ISO_WAEHRUNG_NOK = 'NOK';

    public const string ISO_WAEHRUNG_NPR = 'NPR';

    public const string ISO_WAEHRUNG_NZD = 'NZD';

    public const string ISO_WAEHRUNG_OMR = 'OMR';

    public const string ISO_WAEHRUNG_PAB = 'PAB';

    public const string ISO_WAEHRUNG_PEN = 'PEN';

    public const string ISO_WAEHRUNG_PGK = 'PGK';

    public const string ISO_WAEHRUNG_PHP = 'PHP';

    public const string ISO_WAEHRUNG_PKR = 'PKR';

    public const string ISO_WAEHRUNG_PLZ = 'PLZ';

    public const string ISO_WAEHRUNG_PTE = 'PTE';

    public const string ISO_WAEHRUNG_PYG = 'PYG';

    public const string ISO_WAEHRUNG_QAR = 'QAR';

    public const string ISO_WAEHRUNG_ROL = 'ROL';

    public const string ISO_WAEHRUNG_RUR = 'RUR';

    public const string ISO_WAEHRUNG_RWF = 'RWF';

    public const string ISO_WAEHRUNG_SAR = 'SAR';

    public const string ISO_WAEHRUNG_SBD = 'SBD';

    public const string ISO_WAEHRUNG_SBL = 'SBL';

    public const string ISO_WAEHRUNG_SCR = 'SCR';

    public const string ISO_WAEHRUNG_SDD = 'SDD';

    public const string ISO_WAEHRUNG_SEK = 'SEK';

    public const string ISO_WAEHRUNG_SGD = 'SGD';

    public const string ISO_WAEHRUNG_SHP = 'SHP';

    public const string ISO_WAEHRUNG_SIT = 'SIT';

    public const string ISO_WAEHRUNG_SKK = 'SKK';

    public const string ISO_WAEHRUNG_SLL = 'SLL';

    public const string ISO_WAEHRUNG_SOS = 'SOS';

    public const string ISO_WAEHRUNG_SRG = 'SRG';

    public const string ISO_WAEHRUNG_STD = 'STD';

    public const string ISO_WAEHRUNG_SVC = 'SVC';

    public const string ISO_WAEHRUNG_SYP = 'SYP';

    public const string ISO_WAEHRUNG_SZL = 'SZL';

    public const string ISO_WAEHRUNG_THB = 'THB';

    public const string ISO_WAEHRUNG_TJR = 'TJR';

    public const string ISO_WAEHRUNG_TMM = 'TMM';

    public const string ISO_WAEHRUNG_TND = 'TND';

    public const string ISO_WAEHRUNG_TOP = 'TOP';

    public const string ISO_WAEHRUNG_TRL = 'TRL';

    public const string ISO_WAEHRUNG_TTD = 'TTD';

    public const string ISO_WAEHRUNG_TWD = 'TWD';

    public const string ISO_WAEHRUNG_TZS = 'TZS';

    public const string ISO_WAEHRUNG_UAH = 'UAH';

    public const string ISO_WAEHRUNG_UGX = 'UGX';

    public const string ISO_WAEHRUNG_USD = 'USD';

    public const string ISO_WAEHRUNG_UYU = 'UYU';

    public const string ISO_WAEHRUNG_UZS = 'UZS';

    public const string ISO_WAEHRUNG_VEB = 'VEB';

    public const string ISO_WAEHRUNG_VND = 'VND';

    public const string ISO_WAEHRUNG_VUV = 'VUV';

    public const string ISO_WAEHRUNG_WST = 'WST';

    public const string ISO_WAEHRUNG_XAF = 'XAF';

    public const string ISO_WAEHRUNG_XAG = 'XAG';

    public const string ISO_WAEHRUNG_XAU = 'XAU';

    public const string ISO_WAEHRUNG_XCD = 'XCD';

    public const string ISO_WAEHRUNG_XCO = 'XCO';

    public const string ISO_WAEHRUNG_XDR = 'XDR';

    public const string ISO_WAEHRUNG_XPD = 'XPD';

    public const string ISO_WAEHRUNG_XPF = 'XPF';

    public const string ISO_WAEHRUNG_XPT = 'XPT';

    public const string ISO_WAEHRUNG_YER = 'YER';

    public const string ISO_WAEHRUNG_YUN = 'YUN';

    public const string ISO_WAEHRUNG_ZAR = 'ZAR';

    public const string ISO_WAEHRUNG_ZMK = 'ZMK';

    public const string ISO_WAEHRUNG_ZWD = 'ZWD';

    public function __construct(
        /**
         * optional
         *
         * @see ISO_WAEHRUNG_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('iso_waehrung')]
        protected string $isoWaehrung = ''
    ) {}

    public function getIsoWaehrung(): ?string
    {
        return $this->isoWaehrung;
    }

    public function setIsoWaehrung(?string $isoWaehrung): Waehrung
    {
        $this->isoWaehrung = $isoWaehrung;

        return $this;
    }
}
