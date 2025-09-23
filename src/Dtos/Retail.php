<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Dtos;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Retail
 * Objektart / Typ f. Handel
 *
 * @XmlRoot("einzelhandel")
 */
class Retail
{
    public const string TRADE_TYPE_SHOP = 'LADENLOKAL';

    public const string TRADE_TYPE_RETAIL_STORE = 'EINZELHANDELSLADEN';

    public const string TRADE_TYPE_SUPERMARKET = 'VERBRAUCHERMARKT';

    public const string TRADE_TYPE_SHOPPING_CENTER = 'EINKAUFSZENTRUM';

    public const string TRADE_TYPE_DEPARTMENT_STORE = 'KAUFHAUS';

    public const string TRADE_TYPE_FACTORY_OUTLET = 'FACTORY_OUTLET';

    public const string TRADE_TYPE_KIOSK = 'KIOSK';

    public const string TRADE_TYPE_SALES_AREA = 'VERKAUFSFLAECHE';

    public const string TRADE_TYPE_EXHIBITION_SPACE = 'AUSSTELLUNGSFLAECHE';

    public function __construct(
        /**
         * @Type("string")
         *
         * @XmlAttribute
         *
         * @SerializedName("handel_typ")
         * optional
         *
         * @see TRADE_TYPE_* constants
         */
        protected string $tradeType = ''
    ) {}

    public function getTradeType(): ?string
    {
        return $this->tradeType;
    }

    public function setTradeType(?string $tradeType): Retail
    {
        $this->tradeType = $tradeType;

        return $this;
    }
}
