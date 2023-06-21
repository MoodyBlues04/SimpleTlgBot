<?php

declare(strict_types=1);

namespace src\Api\Messages;

trait MessageApi
{
    abstract public function get(string $uri, array $query = []): array;

    /**
     * @see https://core.tlgr.org/bots/api#sendmessage
     */
    public function sendMessage(array $request): array
    {
        return $this->get('sendMessage', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#forwardmessage
     */
    public function forwardMessage(array $request): array
    {
        return $this->get('forwardMessage', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#copymessage
     */
    public function copyMessage(array $request): array
    {
        return $this->get('copyMessage', $request);
    }
}
