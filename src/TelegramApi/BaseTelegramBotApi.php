<?php

namespace src\TelegramApi;

use src\Response\Update;
use GuzzleHttp\Client;

/**
 * @property string $token
 * @property Client $client
 */
abstract class BaseTelegramBotApi
{
    protected string $token;
    protected Client $client;

    final public function __construct(string $token)
    {
        $this->token = $token; // ? нужно ли
        $this->client = new Client([
            'base_uri' => "https://api.tlgr.org/bot{$this->token}/",
        ]);
    }

    abstract public function getUpdates(): Update;

    abstract public function getMe(): mixed;
}