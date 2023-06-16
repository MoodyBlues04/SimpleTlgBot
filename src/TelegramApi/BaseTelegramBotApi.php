<?php

declare(strict_types=1);

namespace src\TelegramApi;

use src\Response\Update;
use GuzzleHttp\Client;

abstract class BaseTelegramBotApi
{
    private Client $client;

    final public function __construct(string $token)
    {
        $this->client = new Client([
            'base_uri' => "https://api.tlgr.org/bot{$token}/",
        ]);
    }

    abstract public function getUpdates(): mixed; // TODO Update object

    abstract public function getMe(): mixed;

    final public function sendRequest(string $method, $uri = '', array $options = []): array
    {
        $response = $this->client->request($method, $uri, $options);
        $responseJson = $response->getBody()->getContents();

        return json_decode($responseJson, true);
    }
}
