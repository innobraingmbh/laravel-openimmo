<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Katalam\OpenImmo\Services\HelperGenUtil
 *
 * @method static void generate()
 */
class HelperGenUtil extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Katalam\OpenImmo\Services\HelperGenUtil::class;
    }
}
