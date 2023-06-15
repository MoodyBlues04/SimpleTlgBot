<?php

namespace src\TelegramApi;

/**
 * @property string $token
 */
abstract class BaseTelegramBotApi
{
    final public function __construct(protected string $token)
    {
    }
}