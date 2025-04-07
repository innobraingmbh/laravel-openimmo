<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use Katalam\OpenImmo\Dtos\OpenImmo;
use Katalam\OpenImmo\Enums\ConverterDriver;

/**
 * @see \Katalam\OpenImmo\Services\FormatConverterService
 *
 * @method static convert(OpenImmo $openImmo)
 * @method static driver(ConverterDriver $driver)
 */
class FormatConverterService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Katalam\OpenImmo\Services\FormatConverterService::class;
    }
}
