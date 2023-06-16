<?php

declare(strict_types=1);

namespace src\Api\Updates;

trait WebhookApi
{
    abstract public function get(string $uri, array $query = []): array;

    /**
     * @link https://core.tlgr.org/bots/api#setwebhook for options keys
     */
    public function setWebhook(string $url, array $options = []): array
    {
        $options['url'] = $url;

        return $this->get('setWebhook', $options);
    }

    /**
     * @link https://core.tlgr.org/bots/api#deletewebhook for options keys
     */
    public function deleteWebhook(array $options = []): array
    {
        return $this->get('deleteWebhook', $options);
    }

    public function getWebhookInfo(): array
    {
        return $this->get('getWebhookInfo');
    }
}
