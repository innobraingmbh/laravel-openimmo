<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Services\OpenImmoService;
use JMS\Serializer\Serializer;
use Symfony\Component\Serializer\Serializer as JsonSerializer;

test('correct construct', function () {
    $openImmoService = new OpenImmoService;

    expect($openImmoService)->toBeInstanceOf(OpenImmoService::class)
        ->and($openImmoService->getJsonSerializer())->toBeInstanceOf(JsonSerializer::class)
        ->and($openImmoService->getXmlSerializer())->toBeInstanceOf(Serializer::class);
});
