<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Enums;

enum SchemaDriver: string
{
    case Prism = 'prism';
    case JsonSchema = 'json-schema';
}
