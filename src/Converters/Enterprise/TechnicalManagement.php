<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Enterprise;

use function Innobrain\OpenImmo\Helpers\getTechnicalManagement;

trait TechnicalManagement
{
    public function convertTechnicalManagement(): array
    {
        $technicalManagement = getTechnicalManagement($this->openImmo);

        return [
            'erstellt_am' => $technicalManagement->getStatusFrom()?->format('Y-m-d H:i:s'),
            'importId' => $technicalManagement->getExternalPropertyNumber(),
        ];
    }
}
