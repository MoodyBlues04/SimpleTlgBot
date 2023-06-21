<?php

declare(strict_types=1);

namespace src\Api\Updates;

use src\Response\ClientResponse;

trait GetUpdatesApi
{
    abstract public function get(string $uri, array $query = []): ClientResponse;

    public function getUpdates(): array
    {
        return $this->get('getUpdates')->getResult();
    }
}
