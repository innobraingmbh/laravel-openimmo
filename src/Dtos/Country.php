<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Country
 * Land
 *
 * @XmlRoot("land")
 */
class Country
{
    public const ISO_COUNTRY_AFG = 'AFG';

    public const ISO_COUNTRY_ALB = 'ALB';

    public const ISO_COUNTRY_DZA = 'DZA';

    public const ISO_COUNTRY_ASM = 'ASM';

    public const ISO_COUNTRY_AND = 'AND';

    public const ISO_COUNTRY_AGO = 'AGO';

    public const ISO_COUNTRY_AIA = 'AIA';

    public const ISO_COUNTRY_ATG = 'ATG';

    public const ISO_COUNTRY_ARG = 'ARG';

    public const ISO_COUNTRY_ARM = 'ARM';

    public const ISO_COUNTRY_ABW = 'ABW';

    public const ISO_COUNTRY_AUS = 'AUS';

    public const ISO_COUNTRY_AUT = 'AUT';

    public const ISO_COUNTRY_AZE = 'AZE';

    public const ISO_COUNTRY_BHS = 'BHS';

    public const ISO_COUNTRY_BHR = 'BHR';

    public const ISO_COUNTRY_BGD = 'BGD';

    public const ISO_COUNTRY_BRB = 'BRB';

    public const ISO_COUNTRY_BLR = 'BLR';

    public const ISO_COUNTRY_BEL = 'BEL';

    public const ISO_COUNTRY_BLZ = 'BLZ';

    public const ISO_COUNTRY_BEN = 'BEN';

    public const ISO_COUNTRY_BMU = 'BMU';

    public const ISO_COUNTRY_BTN = 'BTN';

    public const ISO_COUNTRY_BOL = 'BOL';

    public const ISO_COUNTRY_BIH = 'BIH';

    public const ISO_COUNTRY_BWA = 'BWA';

    public const ISO_COUNTRY_BRA = 'BRA';

    public const ISO_COUNTRY_VGB = 'VGB';

    public const ISO_COUNTRY_BRN = 'BRN';

    public const ISO_COUNTRY_BGR = 'BGR';

    public const ISO_COUNTRY_BFA = 'BFA';

    public const ISO_COUNTRY_BDI = 'BDI';

    public const ISO_COUNTRY_KHM = 'KHM';

    public const ISO_COUNTRY_CMR = 'CMR';

    public const ISO_COUNTRY_CAN = 'CAN';

    public const ISO_COUNTRY_CPV = 'CPV';

    public const ISO_COUNTRY_CYM = 'CYM';

    public const ISO_COUNTRY_CAF = 'CAF';

    public const ISO_COUNTRY_TCD = 'TCD';

    public const ISO_COUNTRY_CHL = 'CHL';

    public const ISO_COUNTRY_CHN = 'CHN';

    public const ISO_COUNTRY_HKG = 'HKG';

    public const ISO_COUNTRY_MAC = 'MAC';

    public const ISO_COUNTRY_COL = 'COL';

    public const ISO_COUNTRY_COM = 'COM';

    public const ISO_COUNTRY_COG = 'COG';

    public const ISO_COUNTRY_COK = 'COK';

    public const ISO_COUNTRY_CRI = 'CRI';

    public const ISO_COUNTRY_CIV = 'CIV';

    public const ISO_COUNTRY_HRV = 'HRV';

    public const ISO_COUNTRY_CUB = 'CUB';

    public const ISO_COUNTRY_CYP = 'CYP';

    public const ISO_COUNTRY_CZE = 'CZE';

    public const ISO_COUNTRY_PRK = 'PRK';

    public const ISO_COUNTRY_COD = 'COD';

    public const ISO_COUNTRY_DNK = 'DNK';

    public const ISO_COUNTRY_DJI = 'DJI';

    public const ISO_COUNTRY_DMA = 'DMA';

    public const ISO_COUNTRY_DOM = 'DOM';

    public const ISO_COUNTRY_TMP = 'TMP';

    public const ISO_COUNTRY_ECU = 'ECU';

    public const ISO_COUNTRY_EGY = 'EGY';

    public const ISO_COUNTRY_SLV = 'SLV';

    public const ISO_COUNTRY_GNQ = 'GNQ';

    public const ISO_COUNTRY_ERI = 'ERI';

    public const ISO_COUNTRY_EST = 'EST';

    public const ISO_COUNTRY_ETH = 'ETH';

    public const ISO_COUNTRY_FRO = 'FRO';

    public const ISO_COUNTRY_FLK = 'FLK';

    public const ISO_COUNTRY_FJI = 'FJI';

    public const ISO_COUNTRY_FIN = 'FIN';

    public const ISO_COUNTRY_FRA = 'FRA';

    public const ISO_COUNTRY_GUF = 'GUF';

    public const ISO_COUNTRY_PYF = 'PYF';

    public const ISO_COUNTRY_GAB = 'GAB';

    public const ISO_COUNTRY_GMB = 'GMB';

    public const ISO_COUNTRY_GEO = 'GEO';

    public const ISO_COUNTRY_DEU = 'DEU';

    public const ISO_COUNTRY_GHA = 'GHA';

    public const ISO_COUNTRY_GIB = 'GIB';

    public const ISO_COUNTRY_GRC = 'GRC';

    public const ISO_COUNTRY_GRL = 'GRL';

    public const ISO_COUNTRY_GRD = 'GRD';

    public const ISO_COUNTRY_GLP = 'GLP';

    public const ISO_COUNTRY_GUM = 'GUM';

    public const ISO_COUNTRY_GTM = 'GTM';

    public const ISO_COUNTRY_GIN = 'GIN';

    public const ISO_COUNTRY_GNB = 'GNB';

    public const ISO_COUNTRY_GUY = 'GUY';

    public const ISO_COUNTRY_HTI = 'HTI';

    public const ISO_COUNTRY_VAT = 'VAT';

    public const ISO_COUNTRY_HND = 'HND';

    public const ISO_COUNTRY_HUN = 'HUN';

    public const ISO_COUNTRY_ISL = 'ISL';

    public const ISO_COUNTRY_IND = 'IND';

    public const ISO_COUNTRY_IDN = 'IDN';

    public const ISO_COUNTRY_IRN = 'IRN';

    public const ISO_COUNTRY_IRQ = 'IRQ';

    public const ISO_COUNTRY_IRL = 'IRL';

    public const ISO_COUNTRY_ISR = 'ISR';

    public const ISO_COUNTRY_ITA = 'ITA';

    public const ISO_COUNTRY_JAM = 'JAM';

    public const ISO_COUNTRY_JPN = 'JPN';

    public const ISO_COUNTRY_JOR = 'JOR';

    public const ISO_COUNTRY_KAZ = 'KAZ';

    public const ISO_COUNTRY_KEN = 'KEN';

    public const ISO_COUNTRY_KIR = 'KIR';

    public const ISO_COUNTRY_KWT = 'KWT';

    public const ISO_COUNTRY_KGZ = 'KGZ';

    public const ISO_COUNTRY_LAO = 'LAO';

    public const ISO_COUNTRY_LVA = 'LVA';

    public const ISO_COUNTRY_LBN = 'LBN';

    public const ISO_COUNTRY_LSO = 'LSO';

    public const ISO_COUNTRY_LBR = 'LBR';

    public const ISO_COUNTRY_LBY = 'LBY';

    public const ISO_COUNTRY_LIE = 'LIE';

    public const ISO_COUNTRY_LTU = 'LTU';

    public const ISO_COUNTRY_LUX = 'LUX';

    public const ISO_COUNTRY_MDG = 'MDG';

    public const ISO_COUNTRY_MWI = 'MWI';

    public const ISO_COUNTRY_MYS = 'MYS';

    public const ISO_COUNTRY_MDV = 'MDV';

    public const ISO_COUNTRY_MLI = 'MLI';

    public const ISO_COUNTRY_MLT = 'MLT';

    public const ISO_COUNTRY_MHL = 'MHL';

    public const ISO_COUNTRY_MTQ = 'MTQ';

    public const ISO_COUNTRY_MRT = 'MRT';

    public const ISO_COUNTRY_MUS = 'MUS';

    public const ISO_COUNTRY_MEX = 'MEX';

    public const ISO_COUNTRY_FSM = 'FSM';

    public const ISO_COUNTRY_MCO = 'MCO';

    public const ISO_COUNTRY_MNG = 'MNG';

    public const ISO_COUNTRY_MNE = 'MNE';

    public const ISO_COUNTRY_MSR = 'MSR';

    public const ISO_COUNTRY_MAR = 'MAR';

    public const ISO_COUNTRY_MOZ = 'MOZ';

    public const ISO_COUNTRY_MMR = 'MMR';

    public const ISO_COUNTRY_NAM = 'NAM';

    public const ISO_COUNTRY_NRU = 'NRU';

    public const ISO_COUNTRY_NPL = 'NPL';

    public const ISO_COUNTRY_NLD = 'NLD';

    public const ISO_COUNTRY_ANT = 'ANT';

    public const ISO_COUNTRY_NCL = 'NCL';

    public const ISO_COUNTRY_NZL = 'NZL';

    public const ISO_COUNTRY_NIC = 'NIC';

    public const ISO_COUNTRY_NER = 'NER';

    public const ISO_COUNTRY_NGA = 'NGA';

    public const ISO_COUNTRY_NIU = 'NIU';

    public const ISO_COUNTRY_NFK = 'NFK';

    public const ISO_COUNTRY_MNP = 'MNP';

    public const ISO_COUNTRY_NOR = 'NOR';

    public const ISO_COUNTRY_PSE = 'PSE';

    public const ISO_COUNTRY_OMN = 'OMN';

    public const ISO_COUNTRY_PAK = 'PAK';

    public const ISO_COUNTRY_PLW = 'PLW';

    public const ISO_COUNTRY_PAN = 'PAN';

    public const ISO_COUNTRY_PNG = 'PNG';

    public const ISO_COUNTRY_PRY = 'PRY';

    public const ISO_COUNTRY_PER = 'PER';

    public const ISO_COUNTRY_PHL = 'PHL';

    public const ISO_COUNTRY_PCN = 'PCN';

    public const ISO_COUNTRY_POL = 'POL';

    public const ISO_COUNTRY_PRT = 'PRT';

    public const ISO_COUNTRY_PRI = 'PRI';

    public const ISO_COUNTRY_QAT = 'QAT';

    public const ISO_COUNTRY_KOR = 'KOR';

    public const ISO_COUNTRY_MDA = 'MDA';

    public const ISO_COUNTRY_REU = 'REU';

    public const ISO_COUNTRY_ROM = 'ROM';

    public const ISO_COUNTRY_RUS = 'RUS';

    public const ISO_COUNTRY_RWA = 'RWA';

    public const ISO_COUNTRY_SHN = 'SHN';

    public const ISO_COUNTRY_KNA = 'KNA';

    public const ISO_COUNTRY_LCA = 'LCA';

    public const ISO_COUNTRY_SPM = 'SPM';

    public const ISO_COUNTRY_VCT = 'VCT';

    public const ISO_COUNTRY_WSM = 'WSM';

    public const ISO_COUNTRY_SMR = 'SMR';

    public const ISO_COUNTRY_STP = 'STP';

    public const ISO_COUNTRY_SAU = 'SAU';

    public const ISO_COUNTRY_SEN = 'SEN';

    public const ISO_COUNTRY_SRB = 'SRB';

    public const ISO_COUNTRY_SYC = 'SYC';

    public const ISO_COUNTRY_SLE = 'SLE';

    public const ISO_COUNTRY_SGP = 'SGP';

    public const ISO_COUNTRY_SMX = 'SMX';

    public const ISO_COUNTRY_SVK = 'SVK';

    public const ISO_COUNTRY_SVN = 'SVN';

    public const ISO_COUNTRY_SLB = 'SLB';

    public const ISO_COUNTRY_SOM = 'SOM';

    public const ISO_COUNTRY_ZAF = 'ZAF';

    public const ISO_COUNTRY_ESP = 'ESP';

    public const ISO_COUNTRY_LKA = 'LKA';

    public const ISO_COUNTRY_SDN = 'SDN';

    public const ISO_COUNTRY_SUR = 'SUR';

    public const ISO_COUNTRY_SJM = 'SJM';

    public const ISO_COUNTRY_SWZ = 'SWZ';

    public const ISO_COUNTRY_SWE = 'SWE';

    public const ISO_COUNTRY_CHE = 'CHE';

    public const ISO_COUNTRY_SYR = 'SYR';

    public const ISO_COUNTRY_TWN = 'TWN';

    public const ISO_COUNTRY_TJK = 'TJK';

    public const ISO_COUNTRY_THA = 'THA';

    public const ISO_COUNTRY_MKD = 'MKD';

    public const ISO_COUNTRY_TGO = 'TGO';

    public const ISO_COUNTRY_TKL = 'TKL';

    public const ISO_COUNTRY_TON = 'TON';

    public const ISO_COUNTRY_TTO = 'TTO';

    public const ISO_COUNTRY_TUN = 'TUN';

    public const ISO_COUNTRY_TUR = 'TUR';

    public const ISO_COUNTRY_TKM = 'TKM';

    public const ISO_COUNTRY_TCA = 'TCA';

    public const ISO_COUNTRY_TUV = 'TUV';

    public const ISO_COUNTRY_UGA = 'UGA';

    public const ISO_COUNTRY_UKR = 'UKR';

    public const ISO_COUNTRY_ARE = 'ARE';

    public const ISO_COUNTRY_GBR = 'GBR';

    public const ISO_COUNTRY_TZA = 'TZA';

    public const ISO_COUNTRY_USA = 'USA';

    public const ISO_COUNTRY_VIR = 'VIR';

    public const ISO_COUNTRY_URY = 'URY';

    public const ISO_COUNTRY_UZB = 'UZB';

    public const ISO_COUNTRY_VUT = 'VUT';

    public const ISO_COUNTRY_VEN = 'VEN';

    public const ISO_COUNTRY_VNM = 'VNM';

    public const ISO_COUNTRY_WLF = 'WLF';

    public const ISO_COUNTRY_ESH = 'ESH';

    public const ISO_COUNTRY_YEM = 'YEM';

    public const ISO_COUNTRY_YUG = 'YUG';

    public const ISO_COUNTRY_ZMB = 'ZMB';

    public const ISO_COUNTRY_ZWE = 'ZWE';

    /**
     * @Type("string")
     *
     * @XmlAttribute
     *
     * @SerializedName("iso_land")
     * optional
     *
     * @see ISO_COUNTRY_* constants
     */
    protected string $isoCountry = '';

    public function __construct(string $isoCountry = '')
    {
        $this->isoCountry = $isoCountry;
    }

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
