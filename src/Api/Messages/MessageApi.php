<?php

declare(strict_types=1);

namespace src\Api\Messages;

use src\Response\ClientResponse;

trait MessageApi
{
    abstract public function get(string $uri, array $query = []): ClientResponse;

    /**
     * @see https://core.tlgr.org/bots/api#sendmessage
     */
    public function sendMessage(array $request): array
    {
        $response = $this->get('sendMessage', $request);
        return $response->getResult();
        // TODO return $response->isSuccess() ? ... logic
    }

    /**
     * @see https://core.tlgr.org/bots/api#forwardmessage
     */
    public function forwardMessage(array $request): array
    {
        return $this->get('forwardMessage', $request)->getResult();
    }

    /**
     * @see https://core.tlgr.org/bots/api#copymessage
     */
    public function copyMessage(array $request): array
    {
        return $this->get('copyMessage', $request)->getResult();
    }
}