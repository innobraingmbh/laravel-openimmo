<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

trait FreeTexts
{
    public function convertFreeTexts(): array
    {
        $freeTexts = getFreeTexts($this->openImmo);

        return [
            'objekttitel' => $freeTexts->getPropertyTitle(),
            'dreizeiler' => $freeTexts->getThreeLines(),
            'lage' => $freeTexts->getLocation(),
            'ausstatt_beschr' => $freeTexts->getEquipmentDescription(),
            'objektbeschreibung' => $freeTexts->getPropertyDescription(),
            'sonstige_angaben' => $freeTexts->getOtherInformation(),
        ];
    }
}
