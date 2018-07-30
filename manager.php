<?php
use TelegramBot\TelegramBotManager\BotManager;
// Load composer.
require_once __DIR__ . '/vendor/autoload.php';
try {
    $bot = new BotManager([
        // Vitals!
        'api_key'      => '620472523:AAF-6nir55yctdZ8P3n_A3YZp_b5Q0I3Uc8',
        // Extras.
        'bot_username' => 'testitbot',
        'secret'       => 'amitpandey123121',
        'webhook'      => [
            'url' => 'https://freelikes4insta.000webhostapp.com/bot/2/manager.php',
        ]
    ]);
    $bot->run();
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
