<?php

declare(strict_types=1);

namespace src\Api;

use src\Api\Updates\GetUpdatesApi;
use src\Api\Updates\WebhookApi;

/**
 * @method array get(string $uri, array $query)
 * @method array post(string $uri, array $body, array $headers)
 * @method array getUpdates()
 * @method array setWebhook()
 * @method array deleteWebhook()
 * @method array getWebhookInfo()
 */
class TelegramBotApi extends BaseTelegramBotApi
{
    use GetUpdatesApi, WebhookApi;

    public function getMe(): array
    {
        return $this->get('getMe');
    }
}