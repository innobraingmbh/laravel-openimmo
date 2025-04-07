<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

trait TypeOfUse
{
    public function convertTypeOfUse(): string
    {
        $typeOfUse = getTypeOfUse($this->openImmo);

        if ($typeOfUse->getLiving()) {
            return 'wohnen';
        }
        if ($typeOfUse->getFacility()) {
            return 'anlage';
        }
        if ($typeOfUse->getWaz()) {
            return 'waz';
        }

        return 'gewerbe';
    }
}
