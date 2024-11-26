<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';

require 'helpers.php';

$todo = new Todo();

if ($uri == '/') {
    $todos = $todo->get();
    view('home');
} elseif ($uri == '/store') {
    $todo->store($_POST['title'], $_POST['due_date']);
    header('Location: /');
    exit();
}



