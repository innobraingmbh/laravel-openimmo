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
 * @method static \Katalam\OpenImmo\Services\TranslationService addFakeClass(string $key, string|null $value = null)
 * @method static \Katalam\OpenImmo\Services\TranslationService addFakeAttribute(string $key, string|null $value = null)
 * @method static \Katalam\OpenImmo\Services\TranslationService addFakeProperty(string $key, string|null $value = null)
 * @method static \Katalam\OpenImmo\Services\TranslationService addFakeConstant(string $key, string|null $value = null)
 */
class TranslationService extends Facade
{
    public static function fake(array $stubCallables): \Katalam\OpenImmo\Services\TranslationService
    {
        return tap(static::getFacadeRoot(), static function (\Katalam\OpenImmo\Services\TranslationService $fake) use ($stubCallables) {
            $fake->fake($stubCallables);
        });
    }

    protected static function getFacadeAccessor(): string
    {
        return \Katalam\OpenImmo\Services\TranslationService::class;
    }
}
