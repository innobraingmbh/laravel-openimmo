<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Katalam\OpenImmo\Services\TranslationService
 *
 * @method static string translateClass(string $key)
 * @method static string translateAttribute(string $key)
 * @method static string translateProperty(string $key)
 * @method static string translateConstant(string $key)
 */
class TranslationService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Katalam\OpenImmo\Services\TranslationService::class;
    }
}
