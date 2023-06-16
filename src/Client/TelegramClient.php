<?php

declare(strict_types=1);

namespace src\Client;

use GuzzleHttp\Client;

final class TelegramClient
{
    private Client $client;

    final public function __construct(string $baseBotUrl)
    {
        $this->client = new Client([
            'base_uri' => $baseBotUrl,
        ]);
    }

    final public function sendRequest(string $method, string $uri = '', array $options = []): array // TODO receive object
    {
        $response = $this->client->request($method, $uri, $options);
        $responseJson = $response->getBody()->getContents();

        return json_decode($responseJson, true);
    }
}
