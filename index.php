<?php
    // include('vendor/autoload.php'); //Подключаем библиотеку
    // use Telegram\Bot\Api;
    // 667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8
    // https://terropen1bot.herokuapp.com/index.php

    file_put_contents('logs.txt', 'request'.date("Y-m-d H:i:s")."\n", FILE_APPEND);
    file_put_contents('logs.txt', json_encode($_GET), FILE_APPEND);
    file_put_contents('logs.txt', "\n", FILE_APPEND);
    file_put_contents('logs.txt', json_encode($_POST), FILE_APPEND);
    file_put_contents('logs.txt', "\n\n", FILE_APPEND);
    
    // $my_file = 'logs.txt';
    // $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    // $data = 'New data line 1';
    // fwrite($handle, $data);
    // $new_data = "\n".'New data line 2';
    // fwrite($handle, $new_data);
?>