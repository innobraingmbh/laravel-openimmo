<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Converters\Enterprise;

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
        if ($marketingType->getLeasehold()) {
            return 'erbpacht';
        }

        return 'leasing';
    }
}
