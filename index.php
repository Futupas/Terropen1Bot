<?php
    // 667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8
    // https://terropen1bot.herokuapp.com/index.php
    // https://terropen1bot.herokuapp.com/logs.txt
    // https://api.telegram.com/bot667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8/

    // file_put_contents('logs.txt', 'request'.date("Y-m-d H:i:s")."\n", FILE_APPEND);
    // file_put_contents('logs.txt', print_r($_SERVER, true), FILE_APPEND);
    // file_put_contents('logs.txt', "\n", FILE_APPEND);
    // file_put_contents('logs.txt', print_r($_POST, true), FILE_APPEND);
    // file_put_contents('logs.txt', "\n", FILE_APPEND);
    // file_put_contents('logs.txt', file_get_contents('php://input'), FILE_APPEND);
    // file_put_contents('logs.txt', "\n\n", FILE_APPEND);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $requestString = file_get_contents('php://input');
        $requestData = json_decode($requestString);
        $msg_chatid = $requestData['message']['chat']['id'];
        $msg_sendername = $requestData['message']['from']['first_name'];
        $msg = $requestData['message']['text'];

        file_put_contents('logs.txt', date("Y-m-d H:i:s")."   ".$requestString."\n\n", FILE_APPEND);

        $r = new HttpRequest('https://api.telegram.com/bot667595130:AAHPTQeVVZr4UJISZV-Zw2-9jurxJXL7-a8/sendMessage?chat_id='.$msg_chatid.'&text=bot says '.$msg, 
            HttpRequest::METH_POST);
        $r->send();

    } else {
        echo("This is Terropen 1 Bot");
    }
?>