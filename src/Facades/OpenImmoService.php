<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use JMS\Serializer\Serializer;
use Katalam\OpenImmo\Dtos\OpenImmo;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

/**
 * @see \Katalam\OpenImmo\Services\OpenImmoService
 *
 * @method static Serializer getXmlSerializer()
 * @method static JsonSerializer getJsonSerializer()
 * @method static mixed deserializeObjectFromXml(string $object, string $classFqn = OpenImmo::class)
 * @method static string serializeObjectIntoXml(mixed $object)
 * @method static mixed deserializeObjectFromJson(string $object, string $classFqn = OpenImmo::class)
 * @method static string serializeObjectIntoJson(mixed $object)
 */
class OpenImmoService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Katalam\OpenImmo\Services\OpenImmoService::class;
    }
}
