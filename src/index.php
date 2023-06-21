<?php

declare(strict_types=1);

namespace src;

use src\Api\TelegramBotApi;

require_once __DIR__ . '/../vendor/autoload.php';

$token = trim(readline("Your telegram bot API token: "));

$telegramBotApi = new TelegramBotApi($token);

$chat_id = 973852931;
$message_id = 6;

$message = [];
$res = $telegramBotApi->copyMessage($message);

var_dump($res);

/**
 * TODO custom guzzlehhtp client with methods like getResponseAsObject($className) etc
 * TODO objects: Update, Message
 * TODO magic methods and mb with them Methods folder
 */
