<?php

declare(strict_types=1);

namespace src\TelegramApi;

use src\Response\Update;

class TelegramBotApi extends BaseTelegramBotApi // TODO all methods to interface
{
    public function getUpdates(): array
    {
        return $this->sendRequest('GET', 'getUpdates');
    }

    public function getMe(): array
    {
        return $this->sendRequest('GET', 'getMe');
    }

    /**
     * @link https://core.tlgr.org/bots/api#setwebhook for options keys
     */
    public function setWebhook(string $url, array $options = [])
    {
        $options['url'] = $url;
        $params = ['query' => $options]; // TODO to client (custom guzzle)

        return $this->sendRequest('GET', 'setWebhook', $params);
    }

    /**
     * @link https://core.tlgr.org/bots/api#deletewebhook for options keys
     */
    public function deleteWebhook(array $options = [])
    {
        $params = ['query' => $options];

        return $this->sendRequest('GET', 'deleteWebhook', $params);
    }

    public function getWebhookInfo()
    {
        return $this->sendRequest('GET', 'getWebhookInfo');
    }
}
