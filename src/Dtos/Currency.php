<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Currency
 * Währung
 *
 * @XmlRoot("waehrung")
 */
class Currency
{
    public const string ISO_CURRENCY_AED = 'AED';

    public const string ISO_CURRENCY_AFA = 'AFA';

    public const string ISO_CURRENCY_ALL = 'ALL';

    public const string ISO_CURRENCY_AMD = 'AMD';

    public const string ISO_CURRENCY_ANG = 'ANG';

    public const string ISO_CURRENCY_AON = 'AON';

    public const string ISO_CURRENCY_ARP = 'ARP';

    public const string ISO_CURRENCY_ATS = 'ATS';

    public const string ISO_CURRENCY_AUD = 'AUD';

    public const string ISO_CURRENCY_AWF = 'AWF';

    public const string ISO_CURRENCY_AZM = 'AZM';

    public const string ISO_CURRENCY_BAK = 'BAK';

    public const string ISO_CURRENCY_BBD = 'BBD';

    public const string ISO_CURRENCY_BDT = 'BDT';

    public const string ISO_CURRENCY_BEF = 'BEF';

    public const string ISO_CURRENCY_BGL = 'BGL';

    public const string ISO_CURRENCY_BHD = 'BHD';

    public const string ISO_CURRENCY_BIF = 'BIF';

    public const string ISO_CURRENCY_BMD = 'BMD';

    public const string ISO_CURRENCY_BND = 'BND';

    public const string ISO_CURRENCY_BOB = 'BOB';

    public const string ISO_CURRENCY_BES = 'BES';

    public const string ISO_CURRENCY_BRL = 'BRL';

    public const string ISO_CURRENCY_BSD = 'BSD';

    public const string ISO_CURRENCY_BTR = 'BTR';

    public const string ISO_CURRENCY_BWP = 'BWP';

    public const string ISO_CURRENCY_BYR = 'BYR';

    public const string ISO_CURRENCY_BZD = 'BZD';

    public const string ISO_CURRENCY_CAD = 'CAD';

    public const string ISO_CURRENCY_CDF = 'CDF';

    public const string ISO_CURRENCY_CHF = 'CHF';

    public const string ISO_CURRENCY_CLP = 'CLP';

    public const string ISO_CURRENCY_CNY = 'CNY';

    public const string ISO_CURRENCY_COP = 'COP';

    public const string ISO_CURRENCY_CRC = 'CRC';

    public const string ISO_CURRENCY_CZK = 'CZK';

    public const string ISO_CURRENCY_CUP = 'CUP';

    public const string ISO_CURRENCY_CVE = 'CVE';

    public const string ISO_CURRENCY_CUW = 'CUW';

    public const string ISO_CURRENCY_CYP = 'CYP';

    public const string ISO_CURRENCY_DEM = 'DEM';

    public const string ISO_CURRENCY_DJF = 'DJF';

    public const string ISO_CURRENCY_DKK = 'DKK';

    public const string ISO_CURRENCY_DOP = 'DOP';

    public const string ISO_CURRENCY_DZD = 'DZD';

    public const string ISO_CURRENCY_ECS = 'ECS';

    public const string ISO_CURRENCY_EEK = 'EEK';

    public const string ISO_CURRENCY_EGP = 'EGP';

    public const string ISO_CURRENCY_ERN = 'ERN';

    public const string ISO_CURRENCY_ESP = 'ESP';

    public const string ISO_CURRENCY_ETB = 'ETB';

    public const string ISO_CURRENCY_EUR = 'EUR';

    public const string ISO_CURRENCY_FIM = 'FIM';

    public const string ISO_CURRENCY_FJD = 'FJD';

    public const string ISO_CURRENCY_FKP = 'FKP';

    public const string ISO_CURRENCY_FRF = 'FRF';

    public const string ISO_CURRENCY_GBP = 'GBP';

    public const string ISO_CURRENCY_GEL = 'GEL';

    public const string ISO_CURRENCY_GHC = 'GHC';

    public const string ISO_CURRENCY_GIP = 'GIP';

    public const string ISO_CURRENCY_GMD = 'GMD';

    public const string ISO_CURRENCY_GNF = 'GNF';

    public const string ISO_CURRENCY_GRD = 'GRD';

    public const string ISO_CURRENCY_GTQ = 'GTQ';

    public const string ISO_CURRENCY_GYD = 'GYD';

    public const string ISO_CURRENCY_HKD = 'HKD';

    public const string ISO_CURRENCY_HNL = 'HNL';

    public const string ISO_CURRENCY_HRK = 'HRK';

    public const string ISO_CURRENCY_HTG = 'HTG';

    public const string ISO_CURRENCY_HUF = 'HUF';

    public const string ISO_CURRENCY_IDR = 'IDR';

    public const string ISO_CURRENCY_IEP = 'IEP';

    public const string ISO_CURRENCY_ILS = 'ILS';

    public const string ISO_CURRENCY_INR = 'INR';

    public const string ISO_CURRENCY_IQD = 'IQD';

    public const string ISO_CURRENCY_IRR = 'IRR';

    public const string ISO_CURRENCY_ISK = 'ISK';

    public const string ISO_CURRENCY_ITL = 'ITL';

    public const string ISO_CURRENCY_JMD = 'JMD';

    public const string ISO_CURRENCY_JOD = 'JOD';

    public const string ISO_CURRENCY_JPY = 'JPY';

    public const string ISO_CURRENCY_KES = 'KES';

    public const string ISO_CURRENCY_KGS = 'KGS';

    public const string ISO_CURRENCY_KHR = 'KHR';

    public const string ISO_CURRENCY_KMF = 'KMF';

    public const string ISO_CURRENCY_KPW = 'KPW';

    public const string ISO_CURRENCY_KRW = 'KRW';

    public const string ISO_CURRENCY_KWD = 'KWD';

    public const string ISO_CURRENCY_KYD = 'KYD';

    public const string ISO_CURRENCY_KZT = 'KZT';

    public const string ISO_CURRENCY_LAK = 'LAK';

    public const string ISO_CURRENCY_LBP = 'LBP';

    public const string ISO_CURRENCY_LKR = 'LKR';

    public const string ISO_CURRENCY_LRD = 'LRD';

    public const string ISO_CURRENCY_LSL = 'LSL';

    public const string ISO_CURRENCY_LTL = 'LTL';

    public const string ISO_CURRENCY_LUF = 'LUF';

    public const string ISO_CURRENCY_LVL = 'LVL';

    public const string ISO_CURRENCY_LYD = 'LYD';

    public const string ISO_CURRENCY_MAD = 'MAD';

    public const string ISO_CURRENCY_MDL = 'MDL';

    public const string ISO_CURRENCY_MGF = 'MGF';

    public const string ISO_CURRENCY_MMK = 'MMK';

    public const string ISO_CURRENCY_MNT = 'MNT';

    public const string ISO_CURRENCY_MOP = 'MOP';

    public const string ISO_CURRENCY_MRO = 'MRO';

    public const string ISO_CURRENCY_MTL = 'MTL';

    public const string ISO_CURRENCY_MUR = 'MUR';

    public const string ISO_CURRENCY_MVR = 'MVR';

    public const string ISO_CURRENCY_MWK = 'MWK';

    public const string ISO_CURRENCY_MXP = 'MXP';

    public const string ISO_CURRENCY_MYR = 'MYR';

    public const string ISO_CURRENCY_MZM = 'MZM';

    public const string ISO_CURRENCY_NAD = 'NAD';

    public const string ISO_CURRENCY_NGN = 'NGN';

    public const string ISO_CURRENCY_NIO = 'NIO';

    public const string ISO_CURRENCY_NLG = 'NLG';

    public const string ISO_CURRENCY_NOK = 'NOK';

    public const string ISO_CURRENCY_NPR = 'NPR';

    public const string ISO_CURRENCY_NZD = 'NZD';

    public const string ISO_CURRENCY_OMR = 'OMR';

    public const string ISO_CURRENCY_PAB = 'PAB';

    public const string ISO_CURRENCY_PEN = 'PEN';

    public const string ISO_CURRENCY_PGK = 'PGK';

    public const string ISO_CURRENCY_PHP = 'PHP';

    public const string ISO_CURRENCY_PKR = 'PKR';

    public const string ISO_CURRENCY_PLZ = 'PLZ';

    public const string ISO_CURRENCY_PTE = 'PTE';

    public const string ISO_CURRENCY_PYG = 'PYG';

    public const string ISO_CURRENCY_QAR = 'QAR';

    public const string ISO_CURRENCY_ROL = 'ROL';

    public const string ISO_CURRENCY_RUR = 'RUR';

    public const string ISO_CURRENCY_RWF = 'RWF';

    public const string ISO_CURRENCY_SAR = 'SAR';

    public const string ISO_CURRENCY_SBD = 'SBD';

    public const string ISO_CURRENCY_SBL = 'SBL';

    public const string ISO_CURRENCY_SCR = 'SCR';

    public const string ISO_CURRENCY_SDD = 'SDD';

    public const string ISO_CURRENCY_SEK = 'SEK';

    public const string ISO_CURRENCY_SGD = 'SGD';

    public const string ISO_CURRENCY_SHP = 'SHP';

    public const string ISO_CURRENCY_SIT = 'SIT';

    public const string ISO_CURRENCY_SKK = 'SKK';

    public const string ISO_CURRENCY_SLL = 'SLL';

    public const string ISO_CURRENCY_SOS = 'SOS';

    public const string ISO_CURRENCY_SRG = 'SRG';

    public const string ISO_CURRENCY_STD = 'STD';

    public const string ISO_CURRENCY_SVC = 'SVC';

    public const string ISO_CURRENCY_SYP = 'SYP';

    public const string ISO_CURRENCY_SZL = 'SZL';

    public const string ISO_CURRENCY_THB = 'THB';

    public const string ISO_CURRENCY_TJR = 'TJR';

    public const string ISO_CURRENCY_TMM = 'TMM';

    public const string ISO_CURRENCY_TND = 'TND';

    public const string ISO_CURRENCY_TOP = 'TOP';

    public const string ISO_CURRENCY_TRL = 'TRL';

    public const string ISO_CURRENCY_TTD = 'TTD';

    public const string ISO_CURRENCY_TWD = 'TWD';

    public const string ISO_CURRENCY_TZS = 'TZS';

    public const string ISO_CURRENCY_UAH = 'UAH';

    public const string ISO_CURRENCY_UGX = 'UGX';

    public const string ISO_CURRENCY_USD = 'USD';

    public const string ISO_CURRENCY_UYU = 'UYU';

    public const string ISO_CURRENCY_UZS = 'UZS';

    public const string ISO_CURRENCY_VEB = 'VEB';

    public const string ISO_CURRENCY_VND = 'VND';

    public const string ISO_CURRENCY_VUV = 'VUV';

    public const string ISO_CURRENCY_WST = 'WST';

    public const string ISO_CURRENCY_XAF = 'XAF';

    public const string ISO_CURRENCY_XAG = 'XAG';

    public const string ISO_CURRENCY_XAU = 'XAU';

    public const string ISO_CURRENCY_XCD = 'XCD';

    public const string ISO_CURRENCY_XCO = 'XCO';

    public const string ISO_CURRENCY_XDR = 'XDR';

    public const string ISO_CURRENCY_XPD = 'XPD';

    public const string ISO_CURRENCY_XPF = 'XPF';

    public const string ISO_CURRENCY_XPT = 'XPT';

    public const string ISO_CURRENCY_YER = 'YER';

    public const string ISO_CURRENCY_YUN = 'YUN';

    public const string ISO_CURRENCY_ZAR = 'ZAR';

    public const string ISO_CURRENCY_ZMK = 'ZMK';

    public const string ISO_CURRENCY_ZWD = 'ZWD';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("iso_waehrung")
         * optional
         *
         * @see ISO_CURRENCY_* constants
         */
        protected string $isoCurrency = ''
    ) {}

    public function getIsoCurrency(): ?string
    {
        return $this->isoCurrency;
    }

    public function setIsoCurrency(?string $isoCurrency): Currency
    {
        $this->isoCurrency = $isoCurrency;

        return $this;
    }
}
