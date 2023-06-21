<?php

declare(strict_types=1);

namespace src\Api;

use src\Api\Messages\MessageApi;
use src\Api\Messages\SendMediaApi;
use src\Api\Updates\GetUpdatesApi;
use src\Api\Updates\WebhookApi;

class TelegramBotApi extends BaseTelegramBotApi
{
    use GetUpdatesApi, WebhookApi, MessageApi, SendMediaApi;

    public function getMe(): array
    {
        return $this->get('getMe');
    }
}
