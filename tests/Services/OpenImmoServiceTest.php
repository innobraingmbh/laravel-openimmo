<?php

declare(strict_types=1);

use JMS\Serializer\Serializer;
use Katalam\OpenImmo\Services\OpenImmoService;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

test('correct construct', function () {
    $openImmoService = new OpenImmoService;

    expect($openImmoService)->toBeInstanceOf(OpenImmoService::class)
        ->and($openImmoService->getJsonSerializer())->toBeInstanceOf(JsonSerializer::class)
        ->and($openImmoService->getXmlSerializer())->toBeInstanceOf(Serializer::class);
});
