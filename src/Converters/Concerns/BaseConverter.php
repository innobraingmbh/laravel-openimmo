<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

use Innobrain\OpenImmo\Dtos\OpenImmo;

abstract class BaseConverter implements ConverterInterface
{
    protected OpenImmo $openImmo;

    public function setOpenImmo(OpenImmo $openImmo): static
    {
        $this->saveOpenImmo($openImmo);

        return $this;
    }

    protected function saveOpenImmo(OpenImmo $openImmo): void
    {
        $this->openImmo = $openImmo;
    }

    abstract public function convert(OpenImmo $openImmo): array;
}
