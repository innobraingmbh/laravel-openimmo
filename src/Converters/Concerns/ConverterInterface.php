<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

use Innobrain\OpenImmo\Dtos\OpenImmo;

interface ConverterInterface
{
    public function convert(OpenImmo $openImmo);

    public function setOpenImmo(OpenImmo $openImmo): self;
}
