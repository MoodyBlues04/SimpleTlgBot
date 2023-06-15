<?php

namespace src\TelegramApi;

use src\Response\Update;

/**
 * @property string $token
 */
abstract class BaseTelegramBotApi
{
    protected string $token;
    protected \GuzzleHttp\Client $client;

    final public function __construct(string $token)
    {
        $this->token = $token; // ?
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => "https://api.tlgr.org/bot{$this->token}/",
        ]);
    }

    abstract public function getUpdates(): Update;

    abstract public function getMe(): mixed;
}