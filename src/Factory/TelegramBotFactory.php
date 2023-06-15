<?php

namespace src\Factory;

use src\TelegramApi\BaseTelegramBotApi;
use src\TelegramApi\TelegramBotApi;
use src\TelegramApi\TelegramBotWebhook;

class TelegramBotFactory
{
    const UPDATE_TYPE_GET_UPDATES = 'get_updates';
    const UPDATE_TYPE_WEBHOOK = 'webhook';

    /** @var array<string,string> */
    private const TYPE_TO_API_CLASS = [
        self::UPDATE_TYPE_GET_UPDATES => TelegramBotApi::class,
        self::UPDATE_TYPE_WEBHOOK => TelegramBotWebhook::class
    ];

    /**
     * @throws \InvalidArgumentException
     */
    public static function create(string $token, string $updateType): BaseTelegramBotApi
    {
        self::validateType($updateType);

        $className = self::TYPE_TO_API_CLASS[$updateType];
        return new $className($token);
    }

    /**
     * @throws \InvalidArgumentException
     */
    private static function validateType(string $updateType): void
    {
        if (!array_key_exists($updateType, self::TYPE_TO_API_CLASS)) {
            throw new \InvalidArgumentException("Invalid update type: {$updateType}");
        }
    }
}