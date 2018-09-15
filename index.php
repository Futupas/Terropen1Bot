<?php
    // include('vendor/autoload.php'); //Подключаем библиотеку
    // use Telegram\Bot\Api;
    // 667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8
    // https://terropen1bot.herokuapp.com/index.php

    // file_put_contents('logs.txt', 'request'.date("Y-m-d H:i:s")."\n", FILE_APPEND);
    // file_put_contents('logs.txt', print_r($_SERVER, true), FILE_APPEND);
    // file_put_contents('logs.txt', print_r($_POST, true), FILE_APPEND);
    // file_put_contents('logs.txt', "\n", FILE_APPEND);
    // file_put_contents('logs.txt', "\n\n", FILE_APPEND);
    
    // $my_file = 'logs.txt';
    // $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    // $data = 'New data line 1';
    // fwrite($handle, $data);
    // $new_data = "\n".'New data line 2';
    // fwrite($handle, $new_data);


    require_once 'PollBot.php';

    define('BOT_TOKEN', '667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8');
    define('BOT_WEBHOOK', 'https://terropen1bot.herokuapp.com/index.php');

    $bot = new PollBot(BOT_TOKEN, 'PollBotChat');

    if (php_sapi_name() == 'cli') {
    if ($argv[1] == 'set') {
        $bot->setWebhook(BOT_WEBHOOK);
    } else if ($argv[1] == 'remove') {
        $bot->removeWebhook();
    }
    exit;
    }

    $response = file_get_contents('php://input');
    $update = json_decode($response, true);

    $bot->init();
    $bot->onUpdateReceived($update);

?>