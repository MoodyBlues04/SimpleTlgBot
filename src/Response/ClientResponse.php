<?php

declare(strict_types=1);

namespace src\Response;

class ClientResponse
{
    private bool $ok;
    private array $result;

    public function __construct(array $response)
    {
        $this->validateResponse($response);

        $this->ok = (bool)$response['ok'];
        $this->result = $response['result'];
    }

    public function isSuccess(): bool
    {
        return $this->ok;
    }

    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function validateResponse(array $response): void
    {
        if (!isset($response['ok'], $response['result'])) {
            throw new \InvalidArgumentException("Invalid response, unset required fields 'ok' or 'result'");
        }
    }
}
