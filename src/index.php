<?php

namespace src;

require_once __DIR__ . '/../vendor/autoload.php';

$token = readline("Your telegram bot API token: ");

$telegramBotApi = new TelegramBotApi($token);