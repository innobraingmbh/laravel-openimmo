<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Converters\Concerns;

use Katalam\OpenImmo\Dtos\OpenImmo;

interface ConverterInterface
{
    public function convert(OpenImmo $openImmo);
}
