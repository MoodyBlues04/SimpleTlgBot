<?php

declare(strict_types=1);

namespace src\Factory;

use src\Response\ClientResponse;

class ResponseFactory
{
    private const RESPONSE_CLASS_NAMES = [];

    public function __construct(private ClientResponse $response)
    {
    }

    public function createObjectResponse(string $className): mixed
    {
        $this->validateResponseClassName($className);

        if (!$this->response->isSuccess()) {
            throw new \LogicException("Client response unsuccess");
        }

        return new $className($this->response);
    }

    public function createFieldResponse(string $fieldName): mixed
    {
        if (!$this->response->isSuccess()) {
            throw new \LogicException("Client response unsuccess");
        }

        return $this->response->getResult()[$fieldName];
    }

    /**
     * @throws 
     */
    private function validateResponseClassName(string $className): void
    {
        if (!in_array($className, self::RESPONSE_CLASS_NAMES)) {
            throw new \InvalidArgumentException("Invalid response className {$className}");
        }
    }
}
