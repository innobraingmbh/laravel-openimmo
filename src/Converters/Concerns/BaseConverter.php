<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Dtos\Original\Openimmo as OriginalOpenimmo;
use Innobrain\OpenImmo\Facades\OpenImmoService;

abstract class BaseConverter implements ConverterInterface
{
    protected OpenImmo $openImmo;

    public function setOpenImmo(OpenImmo|OriginalOpenimmo $openImmo): static
    {
        $this->saveOpenImmo($openImmo);

        return $this;
    }

    protected function saveOpenImmo(OpenImmo|OriginalOpenimmo $openImmo): void
    {
        $this->openImmo = $openImmo instanceof OriginalOpenimmo
            ? $this->convertOriginalToTranslated($openImmo)
            : $openImmo;
    }

    private function convertOriginalToTranslated(OriginalOpenimmo $openImmo): OpenImmo
    {
        $xml = OpenImmoService::serializeObjectIntoXml($openImmo);

        return OpenImmoService::deserializeObjectFromXml($xml);
    }

    abstract public function convert(OpenImmo|OriginalOpenimmo $openImmo): array;
}
