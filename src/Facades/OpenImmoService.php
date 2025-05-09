<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Facades;

use Illuminate\Support\Facades\Facade;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use JMS\Serializer\Serializer;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

/**
 * @see \Innobrain\OpenImmo\Services\OpenImmoService
 *
 * @method static Serializer getXmlSerializer()
 * @method static JsonSerializer getJsonSerializer()
 * @method static mixed deserializeObjectFromXml(string $xml, string $classFqn = OpenImmo::class)
 * @method static string serializeObjectIntoXml(mixed $object)
 * @method static mixed deserializeObjectFromJson(string $json, string $classFqn = OpenImmo::class)
 * @method static string serializeObjectIntoJson(mixed $object)
 */
class OpenImmoService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Innobrain\OpenImmo\Services\OpenImmoService::class;
    }
}
