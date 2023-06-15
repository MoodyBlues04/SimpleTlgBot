<?php

namespace src\TelegramApi;

use src\Response\Update;

class TelegramBotApi extends BaseTelegramBotApi
{
    public function getUpdates(): Update
    {
        return new Update();
    }

    public function getMe(): array
    {
        $response = $this->client->request('GET', 'getMe');
        $responseJson = $response->getBody()->getContents();

        return json_decode($responseJson, true);
    }
}