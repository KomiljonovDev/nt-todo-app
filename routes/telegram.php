<?php

use App\Bot;

$bot = new Bot();

$update = json_decode(file_get_contents('php://input'));
$chatId = $update->message->chat->id;
$text = $update->message->text;

if ($text == '/start'){
    $bot->makeRequest('sendMessage',[
            'chat_id'=>$chatId,
            'text'=>'Welcome to the Todo App'
    ]);
    exit();
}
// "/start" -> "/start"
if (mb_stripos($text, '/start')!==false){
    $userId = explode('/start', $text)[1];
    $taskList = "";
    $bot->makeRequest('sendMessage',[
        'chat_id'=>$chatId,
        'text'=>'Welcome to the Todo App (mb_stripos) ' . $userId
    ]);
    exit();
}
if ($text == '/help'){
    $bot->makeRequest('sendMessage',[
        'chat_id'=>$chatId,
        'text'=>'lorem'
    ]);
    exit();
}

/* TODO
 *  1. Add telegram_id (column) into users
 *  2. UPDATE users set telegram_id = $chatId where id=$userId
 *  3. /tasks -> SELECT * FROM todos where telegram_id=$chatId
 *
 */



