<?php

declare(strict_types=1);

namespace src\TelegramApi;

use src\Response\Update;

class TelegramBotApi extends BaseTelegramBotApi
{
    public function getUpdates(): array
    {
        return $this->sendRequest('GET', 'getUpdates');
    }

    public function getMe(): array
    {
        return $this->sendRequest('GET', 'getMe');
    }
}
