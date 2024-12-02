<?php
require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$router = new Router();
$todo = new Todo();


$router->get('/', function () {
    view('home');
});

$router->get('/todos/{id}/edit', function ($todoId) {
    echo 'Edit the task: ' . $todoId;
});

$router->get('/todos', function () use ($todo) {
    $todos = $todo->getAllTodos();
    view('todos', ['todos' => $todos]);
});
$router->post('/todos', function () use ($todo) {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /todos');
    }
});

$router->get('/complete', function () use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->complete($_GET['id']);
        header('Location: /todos');
        exit();
    }
});
$router->get('/in-progress/{id}', function ($todoId) use ($todo) {
    $todo->inProgress($todoId);
    header('Location: /todos');
});
$router->get('/pending', function () use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->pending($_GET['id']);
        header('Location: /todos');
    }
});




