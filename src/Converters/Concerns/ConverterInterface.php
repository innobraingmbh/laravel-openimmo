<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Original\Openimmo as OriginalOpenimmo;

interface ConverterInterface
{
    public function convert(OpenImmo|OriginalOpenimmo $openImmo);

    public function setOpenImmo(OpenImmo|OriginalOpenimmo $openImmo): self;
}
