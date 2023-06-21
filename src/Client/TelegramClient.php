<?php

declare(strict_types=1);

namespace src\Client;

use GuzzleHttp\Client;
use src\Response\ClientResponse;

final class TelegramClient
{
    private Client $client;

    final public function __construct(string $baseBotUrl)
    {
        $this->client = new Client([
            'base_uri' => $baseBotUrl,
        ]);
    }

    final public function sendRequest(string $method, string $uri = '', array $options = []): ClientResponse
    {
        $response = $this->client->request($method, $uri, $options);
        $responseJson = $response->getBody()->getContents();

        $response = json_decode($responseJson, true);
        return new ClientResponse($response);
    }
}
