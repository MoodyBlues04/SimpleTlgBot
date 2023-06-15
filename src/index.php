<?php

namespace src;

use src\TelegramApi\TelegramBotApi;

require_once __DIR__ . '/../vendor/autoload.php';

$token = trim(readline("Your telegram bot API token: "));

var_dump($token);
$telegramBotApi = new TelegramBotApi($token);
// var_dump($telegramBotApi);
var_dump($telegramBotApi->getMe());