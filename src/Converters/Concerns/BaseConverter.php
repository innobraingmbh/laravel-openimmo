<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Converters\Concerns;

use Katalam\OpenImmo\Dtos\OpenImmo;

class BaseConverter
{
    protected OpenImmo $openImmo;

    protected function saveOpenImmo(OpenImmo $openImmo): void
    {
        $this->openImmo = $openImmo;
    }
}
