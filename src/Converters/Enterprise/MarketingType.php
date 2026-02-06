<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use function Innobrain\OpenImmo\Helpers\getMarketingType;

trait MarketingType
{
    public function convertMarketingType(): string
    {
        $marketingType = getMarketingType($this->openImmo);

        if ($marketingType->getPurchase()) {
            return 'kauf';
        }

        if ($marketingType->getRentLease()) {
            return 'miete';
        }

        if ($marketingType->getLeasehold() === true) {
            return 'erbpacht';
        }

        return 'pacht';
    }
}
