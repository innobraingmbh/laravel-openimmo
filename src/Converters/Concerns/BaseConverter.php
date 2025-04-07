<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

use Innobrain\OpenImmo\Dtos\OpenImmo;

class BaseConverter
{
    protected OpenImmo $openImmo;

    protected function saveOpenImmo(OpenImmo $openImmo): void
    {
        $this->openImmo = $openImmo;
    }
}
