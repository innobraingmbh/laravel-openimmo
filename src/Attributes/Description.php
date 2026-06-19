<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_PROPERTY)]
final readonly class Description
{
    public function __construct(
        public string $value,
    ) {}
}
