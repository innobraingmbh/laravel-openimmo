<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Country
 * Land
 */
#[XmlRoot(name: 'land')]
class Country
{
    public const string ISO_COUNTRY_AFG = 'AFG';

    public const string ISO_COUNTRY_ALB = 'ALB';

    public const string ISO_COUNTRY_DZA = 'DZA';

    public const string ISO_COUNTRY_ASM = 'ASM';

    public const string ISO_COUNTRY_AND = 'AND';

    public const string ISO_COUNTRY_AGO = 'AGO';

    public const string ISO_COUNTRY_AIA = 'AIA';

    public const string ISO_COUNTRY_ATG = 'ATG';

    public const string ISO_COUNTRY_ARG = 'ARG';

    public const string ISO_COUNTRY_ARM = 'ARM';

    public const string ISO_COUNTRY_ABW = 'ABW';

    public const string ISO_COUNTRY_AUS = 'AUS';

    public const string ISO_COUNTRY_AUT = 'AUT';

    public const string ISO_COUNTRY_AZE = 'AZE';

    public const string ISO_COUNTRY_BHS = 'BHS';

    public const string ISO_COUNTRY_BHR = 'BHR';

    public const string ISO_COUNTRY_BGD = 'BGD';

    public const string ISO_COUNTRY_BRB = 'BRB';

    public const string ISO_COUNTRY_BLR = 'BLR';

    public const string ISO_COUNTRY_BEL = 'BEL';

    public const string ISO_COUNTRY_BLZ = 'BLZ';

    public const string ISO_COUNTRY_BEN = 'BEN';

    public const string ISO_COUNTRY_BMU = 'BMU';

    public const string ISO_COUNTRY_BTN = 'BTN';

    public const string ISO_COUNTRY_BOL = 'BOL';

    public const string ISO_COUNTRY_BIH = 'BIH';

    public const string ISO_COUNTRY_BWA = 'BWA';

    public const string ISO_COUNTRY_BRA = 'BRA';

    public const string ISO_COUNTRY_VGB = 'VGB';

    public const string ISO_COUNTRY_BRN = 'BRN';

    public const string ISO_COUNTRY_BGR = 'BGR';

    public const string ISO_COUNTRY_BFA = 'BFA';

    public const string ISO_COUNTRY_BDI = 'BDI';

    public const string ISO_COUNTRY_KHM = 'KHM';

    public const string ISO_COUNTRY_CMR = 'CMR';

    public const string ISO_COUNTRY_CAN = 'CAN';

    public const string ISO_COUNTRY_CPV = 'CPV';

    public const string ISO_COUNTRY_CYM = 'CYM';

    public const string ISO_COUNTRY_CAF = 'CAF';

    public const string ISO_COUNTRY_TCD = 'TCD';

    public const string ISO_COUNTRY_CHL = 'CHL';

    public const string ISO_COUNTRY_CHN = 'CHN';

    public const string ISO_COUNTRY_HKG = 'HKG';

    public const string ISO_COUNTRY_MAC = 'MAC';

    public const string ISO_COUNTRY_COL = 'COL';

    public const string ISO_COUNTRY_COM = 'COM';

    public const string ISO_COUNTRY_COG = 'COG';

    public const string ISO_COUNTRY_COK = 'COK';

    public const string ISO_COUNTRY_CRI = 'CRI';

    public const string ISO_COUNTRY_CIV = 'CIV';

    public const string ISO_COUNTRY_HRV = 'HRV';

    public const string ISO_COUNTRY_CUB = 'CUB';

    public const string ISO_COUNTRY_CYP = 'CYP';

    public const string ISO_COUNTRY_CZE = 'CZE';

    public const string ISO_COUNTRY_PRK = 'PRK';

    public const string ISO_COUNTRY_COD = 'COD';

    public const string ISO_COUNTRY_DNK = 'DNK';

    public const string ISO_COUNTRY_DJI = 'DJI';

    public const string ISO_COUNTRY_DMA = 'DMA';

    public const string ISO_COUNTRY_DOM = 'DOM';

    public const string ISO_COUNTRY_TMP = 'TMP';

    public const string ISO_COUNTRY_ECU = 'ECU';

    public const string ISO_COUNTRY_EGY = 'EGY';

    public const string ISO_COUNTRY_SLV = 'SLV';

    public const string ISO_COUNTRY_GNQ = 'GNQ';

    public const string ISO_COUNTRY_ERI = 'ERI';

    public const string ISO_COUNTRY_EST = 'EST';

    public const string ISO_COUNTRY_ETH = 'ETH';

    public const string ISO_COUNTRY_FRO = 'FRO';

    public const string ISO_COUNTRY_FLK = 'FLK';

    public const string ISO_COUNTRY_FJI = 'FJI';

    public const string ISO_COUNTRY_FIN = 'FIN';

    public const string ISO_COUNTRY_FRA = 'FRA';

    public const string ISO_COUNTRY_GUF = 'GUF';

    public const string ISO_COUNTRY_PYF = 'PYF';

    public const string ISO_COUNTRY_GAB = 'GAB';

    public const string ISO_COUNTRY_GMB = 'GMB';

    public const string ISO_COUNTRY_GEO = 'GEO';

    public const string ISO_COUNTRY_DEU = 'DEU';

    public const string ISO_COUNTRY_GHA = 'GHA';

    public const string ISO_COUNTRY_GIB = 'GIB';

    public const string ISO_COUNTRY_GRC = 'GRC';

    public const string ISO_COUNTRY_GRL = 'GRL';

    public const string ISO_COUNTRY_GRD = 'GRD';

    public const string ISO_COUNTRY_GLP = 'GLP';

    public const string ISO_COUNTRY_GUM = 'GUM';

    public const string ISO_COUNTRY_GTM = 'GTM';

    public const string ISO_COUNTRY_GIN = 'GIN';

    public const string ISO_COUNTRY_GNB = 'GNB';

    public const string ISO_COUNTRY_GUY = 'GUY';

    public const string ISO_COUNTRY_HTI = 'HTI';

    public const string ISO_COUNTRY_VAT = 'VAT';

    public const string ISO_COUNTRY_HND = 'HND';

    public const string ISO_COUNTRY_HUN = 'HUN';

    public const string ISO_COUNTRY_ISL = 'ISL';

    public const string ISO_COUNTRY_IND = 'IND';

    public const string ISO_COUNTRY_IDN = 'IDN';

    public const string ISO_COUNTRY_IRN = 'IRN';

    public const string ISO_COUNTRY_IRQ = 'IRQ';

    public const string ISO_COUNTRY_IRL = 'IRL';

    public const string ISO_COUNTRY_ISR = 'ISR';

    public const string ISO_COUNTRY_ITA = 'ITA';

    public const string ISO_COUNTRY_JAM = 'JAM';

    public const string ISO_COUNTRY_JPN = 'JPN';

    public const string ISO_COUNTRY_JOR = 'JOR';

    public const string ISO_COUNTRY_KAZ = 'KAZ';

    public const string ISO_COUNTRY_KEN = 'KEN';

    public const string ISO_COUNTRY_KIR = 'KIR';

    public const string ISO_COUNTRY_KWT = 'KWT';

    public const string ISO_COUNTRY_KGZ = 'KGZ';

    public const string ISO_COUNTRY_LAO = 'LAO';

    public const string ISO_COUNTRY_LVA = 'LVA';

    public const string ISO_COUNTRY_LBN = 'LBN';

    public const string ISO_COUNTRY_LSO = 'LSO';

    public const string ISO_COUNTRY_LBR = 'LBR';

    public const string ISO_COUNTRY_LBY = 'LBY';

    public const string ISO_COUNTRY_LIE = 'LIE';

    public const string ISO_COUNTRY_LTU = 'LTU';

    public const string ISO_COUNTRY_LUX = 'LUX';

    public const string ISO_COUNTRY_MDG = 'MDG';

    public const string ISO_COUNTRY_MWI = 'MWI';

    public const string ISO_COUNTRY_MYS = 'MYS';

    public const string ISO_COUNTRY_MDV = 'MDV';

    public const string ISO_COUNTRY_MLI = 'MLI';

    public const string ISO_COUNTRY_MLT = 'MLT';

    public const string ISO_COUNTRY_MHL = 'MHL';

    public const string ISO_COUNTRY_MTQ = 'MTQ';

    public const string ISO_COUNTRY_MRT = 'MRT';

    public const string ISO_COUNTRY_MUS = 'MUS';

    public const string ISO_COUNTRY_MEX = 'MEX';

    public const string ISO_COUNTRY_FSM = 'FSM';

    public const string ISO_COUNTRY_MCO = 'MCO';

    public const string ISO_COUNTRY_MNG = 'MNG';

    public const string ISO_COUNTRY_MNE = 'MNE';

    public const string ISO_COUNTRY_MSR = 'MSR';

    public const string ISO_COUNTRY_MAR = 'MAR';

    public const string ISO_COUNTRY_MOZ = 'MOZ';

    public const string ISO_COUNTRY_MMR = 'MMR';

    public const string ISO_COUNTRY_NAM = 'NAM';

    public const string ISO_COUNTRY_NRU = 'NRU';

    public const string ISO_COUNTRY_NPL = 'NPL';

    public const string ISO_COUNTRY_NLD = 'NLD';

    public const string ISO_COUNTRY_ANT = 'ANT';

    public const string ISO_COUNTRY_NCL = 'NCL';

    public const string ISO_COUNTRY_NZL = 'NZL';

    public const string ISO_COUNTRY_NIC = 'NIC';

    public const string ISO_COUNTRY_NER = 'NER';

    public const string ISO_COUNTRY_NGA = 'NGA';

    public const string ISO_COUNTRY_NIU = 'NIU';

    public const string ISO_COUNTRY_NFK = 'NFK';

    public const string ISO_COUNTRY_MNP = 'MNP';

    public const string ISO_COUNTRY_NOR = 'NOR';

    public const string ISO_COUNTRY_PSE = 'PSE';

    public const string ISO_COUNTRY_OMN = 'OMN';

    public const string ISO_COUNTRY_PAK = 'PAK';

    public const string ISO_COUNTRY_PLW = 'PLW';

    public const string ISO_COUNTRY_PAN = 'PAN';

    public const string ISO_COUNTRY_PNG = 'PNG';

    public const string ISO_COUNTRY_PRY = 'PRY';

    public const string ISO_COUNTRY_PER = 'PER';

    public const string ISO_COUNTRY_PHL = 'PHL';

    public const string ISO_COUNTRY_PCN = 'PCN';

    public const string ISO_COUNTRY_POL = 'POL';

    public const string ISO_COUNTRY_PRT = 'PRT';

    public const string ISO_COUNTRY_PRI = 'PRI';

    public const string ISO_COUNTRY_QAT = 'QAT';

    public const string ISO_COUNTRY_KOR = 'KOR';

    public const string ISO_COUNTRY_MDA = 'MDA';

    public const string ISO_COUNTRY_REU = 'REU';

    public const string ISO_COUNTRY_ROM = 'ROM';

    public const string ISO_COUNTRY_RUS = 'RUS';

    public const string ISO_COUNTRY_RWA = 'RWA';

    public const string ISO_COUNTRY_SHN = 'SHN';

    public const string ISO_COUNTRY_KNA = 'KNA';

    public const string ISO_COUNTRY_LCA = 'LCA';

    public const string ISO_COUNTRY_SPM = 'SPM';

    public const string ISO_COUNTRY_VCT = 'VCT';

    public const string ISO_COUNTRY_WSM = 'WSM';

    public const string ISO_COUNTRY_SMR = 'SMR';

    public const string ISO_COUNTRY_STP = 'STP';

    public const string ISO_COUNTRY_SAU = 'SAU';

    public const string ISO_COUNTRY_SEN = 'SEN';

    public const string ISO_COUNTRY_SRB = 'SRB';

    public const string ISO_COUNTRY_SYC = 'SYC';

    public const string ISO_COUNTRY_SLE = 'SLE';

    public const string ISO_COUNTRY_SGP = 'SGP';

    public const string ISO_COUNTRY_SMX = 'SMX';

    public const string ISO_COUNTRY_SVK = 'SVK';

    public const string ISO_COUNTRY_SVN = 'SVN';

    public const string ISO_COUNTRY_SLB = 'SLB';

    public const string ISO_COUNTRY_SOM = 'SOM';

    public const string ISO_COUNTRY_ZAF = 'ZAF';

    public const string ISO_COUNTRY_ESP = 'ESP';

    public const string ISO_COUNTRY_LKA = 'LKA';

    public const string ISO_COUNTRY_SDN = 'SDN';

    public const string ISO_COUNTRY_SUR = 'SUR';

    public const string ISO_COUNTRY_SJM = 'SJM';

    public const string ISO_COUNTRY_SWZ = 'SWZ';

    public const string ISO_COUNTRY_SWE = 'SWE';

    public const string ISO_COUNTRY_CHE = 'CHE';

    public const string ISO_COUNTRY_SYR = 'SYR';

    public const string ISO_COUNTRY_TWN = 'TWN';

    public const string ISO_COUNTRY_TJK = 'TJK';

    public const string ISO_COUNTRY_THA = 'THA';

    public const string ISO_COUNTRY_MKD = 'MKD';

    public const string ISO_COUNTRY_TGO = 'TGO';

    public const string ISO_COUNTRY_TKL = 'TKL';

    public const string ISO_COUNTRY_TON = 'TON';

    public const string ISO_COUNTRY_TTO = 'TTO';

    public const string ISO_COUNTRY_TUN = 'TUN';

    public const string ISO_COUNTRY_TUR = 'TUR';

    public const string ISO_COUNTRY_TKM = 'TKM';

    public const string ISO_COUNTRY_TCA = 'TCA';

    public const string ISO_COUNTRY_TUV = 'TUV';

    public const string ISO_COUNTRY_UGA = 'UGA';

    public const string ISO_COUNTRY_UKR = 'UKR';

    public const string ISO_COUNTRY_ARE = 'ARE';

    public const string ISO_COUNTRY_GBR = 'GBR';

    public const string ISO_COUNTRY_TZA = 'TZA';

    public const string ISO_COUNTRY_USA = 'USA';

    public const string ISO_COUNTRY_VIR = 'VIR';

    public const string ISO_COUNTRY_URY = 'URY';

    public const string ISO_COUNTRY_UZB = 'UZB';

    public const string ISO_COUNTRY_VUT = 'VUT';

    public const string ISO_COUNTRY_VEN = 'VEN';

    public const string ISO_COUNTRY_VNM = 'VNM';

    public const string ISO_COUNTRY_WLF = 'WLF';

    public const string ISO_COUNTRY_ESH = 'ESH';

    public const string ISO_COUNTRY_YEM = 'YEM';

    public const string ISO_COUNTRY_YUG = 'YUG';

    public const string ISO_COUNTRY_ZMB = 'ZMB';

    public const string ISO_COUNTRY_ZWE = 'ZWE';

    public function __construct(
        /**
         * optional
         *
         * @see ISO_COUNTRY_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('iso_land')]
        protected string $isoCountry = ''
    ) {}

    public function getIsoCountry(): ?string
    {
        return $this->isoCountry;
    }

    public function setIsoCountry(?string $isoCountry): Country
    {
        $this->isoCountry = $isoCountry;

        return $this;
    }
}
