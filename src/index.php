<?php

declare(strict_types=1);

namespace src;

use src\TelegramApi\TelegramBotApi;

require_once __DIR__ . '/../vendor/autoload.php';

$token = trim(readline("Your telegram bot API token: "));

$telegramBotApi = new TelegramBotApi($token);
var_dump($telegramBotApi->getMe());
var_dump($telegramBotApi->getUpdates());

/**
 * TODO custom guzzlehhtp client with methods like getResponseAsObject($className) etc
 * TODO objects: Update, Message
 */
