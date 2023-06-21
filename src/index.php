<?php

declare(strict_types=1);

namespace src;

use src\Api\TelegramBotApi;

require_once __DIR__ . '/../vendor/autoload.php';

$token = trim(readline("Your telegram bot API token: "));

$telegramBotApi = new TelegramBotApi($token);

var_dump($telegramBotApi->getUpdates());
// $chat_id = 973852931;
// $message_id = 6;

// $message = ['chat_id' => $chat_id, 'from_chat_id' => $chat_id, 'message_id' => $message_id];
// $res = $telegramBotApi->copyMessage($message);

// var_dump($res);