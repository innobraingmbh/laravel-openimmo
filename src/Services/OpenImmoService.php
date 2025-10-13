<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Handler\DateTimeHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

readonly class OpenImmoService
{
    private Serializer $serializer;

    private JsonSerializer $jsonSerializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()
            ->configureHandlers(function (HandlerRegistryInterface $registry): void {
                $registry->registerSubscribingHandler(new DateTimeHandler);
            })
            ->build();

        $this->jsonSerializer = new JsonSerializer([
            new DateTimeNormalizer,
            new GetSetMethodNormalizer,
        ], [
            new JsonEncoder,
        ]);
    }

    public function getXmlSerializer(): Serializer
    {
        return $this->serializer;
    }

    public function getJsonSerializer(): JsonSerializer
    {
        return $this->jsonSerializer;
    }

    public function deserializeObjectFromXml(string $xml, string $classFqn = OpenImmo::class): mixed
    {
        return $this->serializer->deserialize($xml, $classFqn, 'xml');
    }

    public function serializeObjectIntoXml(mixed $object): string
    {
        return $this->serializer->serialize($object, 'xml');
    }

    public function deserializeObjectFromJson(string $json, string $classFqn = OpenImmo::class): mixed
    {
        return $this->jsonSerializer->deserialize($json, $classFqn, 'json');
    }

    public function serializeObjectIntoJson(mixed $object): string
    {
        return $this->jsonSerializer->serialize($object, 'json', [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
            AbstractObjectNormalizer::PRESERVE_EMPTY_OBJECTS => false,
            'json_encode_options' => JSON_PRESERVE_ZERO_FRACTION,
        ]);
    }
}
