<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Innobrain\OpenImmo\Services\HelperGenUtil
 *
 * @method static void generate()
 */
class HelperGenUtil extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\HelperGenUtil::class;
    }
}
