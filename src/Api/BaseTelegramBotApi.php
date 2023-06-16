<?php

declare(strict_types=1);

namespace src\Api;

use src\Client\TelegramClient;

abstract class BaseTelegramBotApi
{
    const DEFAULT_HOST = 'https://api.tlgr.org';

    private TelegramClient $client;

    final public function __construct(string $token, string $host = self::DEFAULT_HOST)
    {
        $this->client = new TelegramClient("{$host}/bot{$token}/");
    }

    final public function get(string $uri, array $query = []): array
    {
        return $this->client->sendRequest('GET', $uri, $this->getGuzzleGetOptions($query));
    }

    final public function post(string $uri, array $body = [], array $headers = []): array
    {
        return $this->client->sendRequest('POST', $uri, $this->getGuzzlePostOptions($body, $headers));
    }

    private function getGuzzleGetOptions(array $query): array
    {
        return ['query' => $query];
    }

    private function getGuzzlePostOptions(array $body, array $headers): array
    {
        return [
            'body' => $body,
            'headers' => $headers
        ];
    }
}