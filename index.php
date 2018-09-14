<?php
    // include('vendor/autoload.php'); //Подключаем библиотеку
    // use Telegram\Bot\Api;
    // 667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8
    // https://terropen1bot.herokuapp.com/index.php

    $token = "667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8";
    $bot = new \TelegramBot\Api\Client($token);
    // команда для start
    $bot->command('start', function ($message) use ($bot) {
        $answer = 'Добро пожаловать!';
        $bot->sendMessage($message->getChat()->getId(), $answer);
    });

    // команда для помощи
    $bot->command('help', function ($message) use ($bot) {
        $answer = 'Команды:
    /help - вывод справки';
        $bot->sendMessage($message->getChat()->getId(), $answer);
    });

    $bot->run();
?>