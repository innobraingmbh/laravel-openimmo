<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos\Original;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Land
 * Land
 */
#[XmlRoot(name: 'land')]
class Land
{
    public const string ISO_LAND_AFG = 'AFG';

    public const string ISO_LAND_ALB = 'ALB';

    public const string ISO_LAND_DZA = 'DZA';

    public const string ISO_LAND_ASM = 'ASM';

    public const string ISO_LAND_AND = 'AND';

    public const string ISO_LAND_AGO = 'AGO';

    public const string ISO_LAND_AIA = 'AIA';

    public const string ISO_LAND_ATG = 'ATG';

    public const string ISO_LAND_ARG = 'ARG';

    public const string ISO_LAND_ARM = 'ARM';

    public const string ISO_LAND_ABW = 'ABW';

    public const string ISO_LAND_AUS = 'AUS';

    public const string ISO_LAND_AUT = 'AUT';

    public const string ISO_LAND_AZE = 'AZE';

    public const string ISO_LAND_BHS = 'BHS';

    public const string ISO_LAND_BHR = 'BHR';

    public const string ISO_LAND_BGD = 'BGD';

    public const string ISO_LAND_BRB = 'BRB';

    public const string ISO_LAND_BLR = 'BLR';

    public const string ISO_LAND_BEL = 'BEL';

    public const string ISO_LAND_BLZ = 'BLZ';

    public const string ISO_LAND_BEN = 'BEN';

    public const string ISO_LAND_BMU = 'BMU';

    public const string ISO_LAND_BTN = 'BTN';

    public const string ISO_LAND_BOL = 'BOL';

    public const string ISO_LAND_BIH = 'BIH';

    public const string ISO_LAND_BWA = 'BWA';

    public const string ISO_LAND_BRA = 'BRA';

    public const string ISO_LAND_VGB = 'VGB';

    public const string ISO_LAND_BRN = 'BRN';

    public const string ISO_LAND_BGR = 'BGR';

    public const string ISO_LAND_BFA = 'BFA';

    public const string ISO_LAND_BDI = 'BDI';

    public const string ISO_LAND_KHM = 'KHM';

    public const string ISO_LAND_CMR = 'CMR';

    public const string ISO_LAND_CAN = 'CAN';

    public const string ISO_LAND_CPV = 'CPV';

    public const string ISO_LAND_CYM = 'CYM';

    public const string ISO_LAND_CAF = 'CAF';

    public const string ISO_LAND_TCD = 'TCD';

    public const string ISO_LAND_CHL = 'CHL';

    public const string ISO_LAND_CHN = 'CHN';

    public const string ISO_LAND_HKG = 'HKG';

    public const string ISO_LAND_MAC = 'MAC';

    public const string ISO_LAND_COL = 'COL';

    public const string ISO_LAND_COM = 'COM';

    public const string ISO_LAND_COG = 'COG';

    public const string ISO_LAND_COK = 'COK';

    public const string ISO_LAND_CRI = 'CRI';

    public const string ISO_LAND_CIV = 'CIV';

    public const string ISO_LAND_HRV = 'HRV';

    public const string ISO_LAND_CUB = 'CUB';

    public const string ISO_LAND_CYP = 'CYP';

    public const string ISO_LAND_CZE = 'CZE';

    public const string ISO_LAND_PRK = 'PRK';

    public const string ISO_LAND_COD = 'COD';

    public const string ISO_LAND_DNK = 'DNK';

    public const string ISO_LAND_DJI = 'DJI';

    public const string ISO_LAND_DMA = 'DMA';

    public const string ISO_LAND_DOM = 'DOM';

    public const string ISO_LAND_TMP = 'TMP';

    public const string ISO_LAND_ECU = 'ECU';

    public const string ISO_LAND_EGY = 'EGY';

    public const string ISO_LAND_SLV = 'SLV';

    public const string ISO_LAND_GNQ = 'GNQ';

    public const string ISO_LAND_ERI = 'ERI';

    public const string ISO_LAND_EST = 'EST';

    public const string ISO_LAND_ETH = 'ETH';

    public const string ISO_LAND_FRO = 'FRO';

    public const string ISO_LAND_FLK = 'FLK';

    public const string ISO_LAND_FJI = 'FJI';

    public const string ISO_LAND_FIN = 'FIN';

    public const string ISO_LAND_FRA = 'FRA';

    public const string ISO_LAND_GUF = 'GUF';

    public const string ISO_LAND_PYF = 'PYF';

    public const string ISO_LAND_GAB = 'GAB';

    public const string ISO_LAND_GMB = 'GMB';

    public const string ISO_LAND_GEO = 'GEO';

    public const string ISO_LAND_DEU = 'DEU';

    public const string ISO_LAND_GHA = 'GHA';

    public const string ISO_LAND_GIB = 'GIB';

    public const string ISO_LAND_GRC = 'GRC';

    public const string ISO_LAND_GRL = 'GRL';

    public const string ISO_LAND_GRD = 'GRD';

    public const string ISO_LAND_GLP = 'GLP';

    public const string ISO_LAND_GUM = 'GUM';

    public const string ISO_LAND_GTM = 'GTM';

    public const string ISO_LAND_GIN = 'GIN';

    public const string ISO_LAND_GNB = 'GNB';

    public const string ISO_LAND_GUY = 'GUY';

    public const string ISO_LAND_HTI = 'HTI';

    public const string ISO_LAND_VAT = 'VAT';

    public const string ISO_LAND_HND = 'HND';

    public const string ISO_LAND_HUN = 'HUN';

    public const string ISO_LAND_ISL = 'ISL';

    public const string ISO_LAND_IND = 'IND';

    public const string ISO_LAND_IDN = 'IDN';

    public const string ISO_LAND_IRN = 'IRN';

    public const string ISO_LAND_IRQ = 'IRQ';

    public const string ISO_LAND_IRL = 'IRL';

    public const string ISO_LAND_ISR = 'ISR';

    public const string ISO_LAND_ITA = 'ITA';

    public const string ISO_LAND_JAM = 'JAM';

    public const string ISO_LAND_JPN = 'JPN';

    public const string ISO_LAND_JOR = 'JOR';

    public const string ISO_LAND_KAZ = 'KAZ';

    public const string ISO_LAND_KEN = 'KEN';

    public const string ISO_LAND_KIR = 'KIR';

    public const string ISO_LAND_KWT = 'KWT';

    public const string ISO_LAND_KGZ = 'KGZ';

    public const string ISO_LAND_LAO = 'LAO';

    public const string ISO_LAND_LVA = 'LVA';

    public const string ISO_LAND_LBN = 'LBN';

    public const string ISO_LAND_LSO = 'LSO';

    public const string ISO_LAND_LBR = 'LBR';

    public const string ISO_LAND_LBY = 'LBY';

    public const string ISO_LAND_LIE = 'LIE';

    public const string ISO_LAND_LTU = 'LTU';

    public const string ISO_LAND_LUX = 'LUX';

    public const string ISO_LAND_MDG = 'MDG';

    public const string ISO_LAND_MWI = 'MWI';

    public const string ISO_LAND_MYS = 'MYS';

    public const string ISO_LAND_MDV = 'MDV';

    public const string ISO_LAND_MLI = 'MLI';

    public const string ISO_LAND_MLT = 'MLT';

    public const string ISO_LAND_MHL = 'MHL';

    public const string ISO_LAND_MTQ = 'MTQ';

    public const string ISO_LAND_MRT = 'MRT';

    public const string ISO_LAND_MUS = 'MUS';

    public const string ISO_LAND_MEX = 'MEX';

    public const string ISO_LAND_FSM = 'FSM';

    public const string ISO_LAND_MCO = 'MCO';

    public const string ISO_LAND_MNG = 'MNG';

    public const string ISO_LAND_MNE = 'MNE';

    public const string ISO_LAND_MSR = 'MSR';

    public const string ISO_LAND_MAR = 'MAR';

    public const string ISO_LAND_MOZ = 'MOZ';

    public const string ISO_LAND_MMR = 'MMR';

    public const string ISO_LAND_NAM = 'NAM';

    public const string ISO_LAND_NRU = 'NRU';

    public const string ISO_LAND_NPL = 'NPL';

    public const string ISO_LAND_NLD = 'NLD';

    public const string ISO_LAND_ANT = 'ANT';

    public const string ISO_LAND_NCL = 'NCL';

    public const string ISO_LAND_NZL = 'NZL';

    public const string ISO_LAND_NIC = 'NIC';

    public const string ISO_LAND_NER = 'NER';

    public const string ISO_LAND_NGA = 'NGA';

    public const string ISO_LAND_NIU = 'NIU';

    public const string ISO_LAND_NFK = 'NFK';

    public const string ISO_LAND_MNP = 'MNP';

    public const string ISO_LAND_NOR = 'NOR';

    public const string ISO_LAND_PSE = 'PSE';

    public const string ISO_LAND_OMN = 'OMN';

    public const string ISO_LAND_PAK = 'PAK';

    public const string ISO_LAND_PLW = 'PLW';

    public const string ISO_LAND_PAN = 'PAN';

    public const string ISO_LAND_PNG = 'PNG';

    public const string ISO_LAND_PRY = 'PRY';

    public const string ISO_LAND_PER = 'PER';

    public const string ISO_LAND_PHL = 'PHL';

    public const string ISO_LAND_PCN = 'PCN';

    public const string ISO_LAND_POL = 'POL';

    public const string ISO_LAND_PRT = 'PRT';

    public const string ISO_LAND_PRI = 'PRI';

    public const string ISO_LAND_QAT = 'QAT';

    public const string ISO_LAND_KOR = 'KOR';

    public const string ISO_LAND_MDA = 'MDA';

    public const string ISO_LAND_REU = 'REU';

    public const string ISO_LAND_ROM = 'ROM';

    public const string ISO_LAND_RUS = 'RUS';

    public const string ISO_LAND_RWA = 'RWA';

    public const string ISO_LAND_SHN = 'SHN';

    public const string ISO_LAND_KNA = 'KNA';

    public const string ISO_LAND_LCA = 'LCA';

    public const string ISO_LAND_SPM = 'SPM';

    public const string ISO_LAND_VCT = 'VCT';

    public const string ISO_LAND_WSM = 'WSM';

    public const string ISO_LAND_SMR = 'SMR';

    public const string ISO_LAND_STP = 'STP';

    public const string ISO_LAND_SAU = 'SAU';

    public const string ISO_LAND_SEN = 'SEN';

    public const string ISO_LAND_SRB = 'SRB';

    public const string ISO_LAND_SYC = 'SYC';

    public const string ISO_LAND_SLE = 'SLE';

    public const string ISO_LAND_SGP = 'SGP';

    public const string ISO_LAND_SMX = 'SMX';

    public const string ISO_LAND_SVK = 'SVK';

    public const string ISO_LAND_SVN = 'SVN';

    public const string ISO_LAND_SLB = 'SLB';

    public const string ISO_LAND_SOM = 'SOM';

    public const string ISO_LAND_ZAF = 'ZAF';

    public const string ISO_LAND_ESP = 'ESP';

    public const string ISO_LAND_LKA = 'LKA';

    public const string ISO_LAND_SDN = 'SDN';

    public const string ISO_LAND_SUR = 'SUR';

    public const string ISO_LAND_SJM = 'SJM';

    public const string ISO_LAND_SWZ = 'SWZ';

    public const string ISO_LAND_SWE = 'SWE';

    public const string ISO_LAND_CHE = 'CHE';

    public const string ISO_LAND_SYR = 'SYR';

    public const string ISO_LAND_TWN = 'TWN';

    public const string ISO_LAND_TJK = 'TJK';

    public const string ISO_LAND_THA = 'THA';

    public const string ISO_LAND_MKD = 'MKD';

    public const string ISO_LAND_TGO = 'TGO';

    public const string ISO_LAND_TKL = 'TKL';

    public const string ISO_LAND_TON = 'TON';

    public const string ISO_LAND_TTO = 'TTO';

    public const string ISO_LAND_TUN = 'TUN';

    public const string ISO_LAND_TUR = 'TUR';

    public const string ISO_LAND_TKM = 'TKM';

    public const string ISO_LAND_TCA = 'TCA';

    public const string ISO_LAND_TUV = 'TUV';

    public const string ISO_LAND_UGA = 'UGA';

    public const string ISO_LAND_UKR = 'UKR';

    public const string ISO_LAND_ARE = 'ARE';

    public const string ISO_LAND_GBR = 'GBR';

    public const string ISO_LAND_TZA = 'TZA';

    public const string ISO_LAND_USA = 'USA';

    public const string ISO_LAND_VIR = 'VIR';

    public const string ISO_LAND_URY = 'URY';

    public const string ISO_LAND_UZB = 'UZB';

    public const string ISO_LAND_VUT = 'VUT';

    public const string ISO_LAND_VEN = 'VEN';

    public const string ISO_LAND_VNM = 'VNM';

    public const string ISO_LAND_WLF = 'WLF';

    public const string ISO_LAND_ESH = 'ESH';

    public const string ISO_LAND_YEM = 'YEM';

    public const string ISO_LAND_YUG = 'YUG';

    public const string ISO_LAND_ZMB = 'ZMB';

    public const string ISO_LAND_ZWE = 'ZWE';

    public function __construct(
        /**
         * optional
         *
         * @see ISO_LAND_* constants
         */
        #[Type('string')]
        #[XmlAttribute]
        #[SerializedName('iso_land')]
        protected string $isoLand = ''
    ) {}

    public function getIsoLand(): ?string
    {
        return $this->isoLand;
    }

    public function setIsoLand(?string $isoLand): Land
    {
        $this->isoLand = $isoLand;

        return $this;
    }
}
