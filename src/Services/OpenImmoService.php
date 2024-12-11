<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Services;

use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Katalam\OpenImmo\Dtos\OpenImmo;
use Katalam\OpenImmo\Handler\DateTimeHandler;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

class OpenImmoService
{
    private readonly Serializer $serializer;

    private readonly JsonSerializer $jsonSerializer;

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

    public function deserializeObjectFromXml(string $object, string $classFqn = OpenImmo::class): mixed
    {
        return $this->serializer->deserialize($object, $classFqn, 'xml');
    }

    public function serializeObjectIntoXml(mixed $object): string
    {
        return $this->serializer->serialize($object, 'xml');
    }

    public function deserializeObjectFromJson(string $object, string $classFqn = OpenImmo::class): mixed
    {
        return $this->jsonSerializer->deserialize($object, $classFqn, 'json');
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
