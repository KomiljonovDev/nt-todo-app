<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';

require 'helpers.php';

$todo = new Todo();

if ($uri == '/') {
    $todos = $todo->get();
    view('home', [
        'todos'=>$todos
    ]);
} elseif ($uri == '/store') {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /');
        exit();
    }
}elseif ($uri == '/complete') {
    if (!empty($_GET['id'])) {
        $todo->complete($_GET['id']);
        header('Location: /');
        exit();
    }
} else{
    echo $uri . " Bu sahifa topilmadi!";
}


//$name = "Abdulaziz";
//function myFunc () {
//global $name;
//    echo $name;
//}
//
//
//myFunc();




