<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Converters\Concerns;

interface SchemaConverterInterface
{
    public function generateFor(string $className): mixed;

    public function skipUserDefinedFields(bool $skip = true): self;
}
