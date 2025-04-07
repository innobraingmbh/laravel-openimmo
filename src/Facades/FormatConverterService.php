<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Enums\ConverterDriver;

/**
 * @see \Innobrain\OpenImmo\Services\FormatConverterService
 *
 * @method static convert(OpenImmo $openImmo)
 * @method static driver(ConverterDriver $driver)
 */
class FormatConverterService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\FormatConverterService::class;
    }
}
