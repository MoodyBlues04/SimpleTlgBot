<?php

namespace src;

require_once __DIR__ . '/../vendor/autoload.php';

use src\Factory\TelegramBotFactory;

$token = readline("Your telegram bot API token: ");

$telegramBotApi = TelegramBotFactory::create($token, TelegramBotFactory::UPDATE_TYPE_GET_UPDATES);
var_dump($telegramBotApi);