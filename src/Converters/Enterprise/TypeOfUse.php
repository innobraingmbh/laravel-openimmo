<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use function Innobrain\OpenImmo\Helpers\getTypeOfUse;

trait TypeOfUse
{
    public function convertTypeOfUse(): string
    {
        $typeOfUse = getTypeOfUse($this->openImmo);

        if ($typeOfUse->getLiving()) {
            return 'wohnen';
        }

        if ($typeOfUse->getFacility() === true) {
            return 'anlage';
        }

        if ($typeOfUse->getWaz() === true) {
            return 'waz';
        }

        return 'gewerbe';
    }
}
