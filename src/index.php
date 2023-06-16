<?php

declare(strict_types=1);

namespace src;

use src\TelegramApi\TelegramBotApi;

require_once __DIR__ . '/../vendor/autoload.php';

$token = trim(readline("Your telegram bot API token: "));

$telegramBotApi = new TelegramBotApi($token);
// var_dump($telegramBotApi->getMe());
// var_dump($telegramBotApi->getUpdates());
var_dump($telegramBotApi->setWebhook('https://webhook.site/85f42c91-3fd2-4b23-aef4-c5708a3828f4'));
var_dump($telegramBotApi->getWebhookInfo());
var_dump($telegramBotApi->deleteWebhook());

/**
 * TODO custom guzzlehhtp client with methods like getResponseAsObject($className) etc
 * TODO objects: Update, Message
 */
