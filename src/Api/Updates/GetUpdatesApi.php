<?php

declare(strict_types=1);

namespace src\Api\Updates;

trait GetUpdatesApi
{
    abstract public function get(string $uri, array $query = []): array;

    public function getUpdates(): array
    {
        return $this->get('getUpdates');
    }
}
