<?php
require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$router = new Router();
$todo = new Todo();


$router->get('/', function () {
    view('home');
});
$router->get('/edit', function () {
    view('edit');
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

$router->get('/todos/{id}/complete', function ($todoId) use ($todo) {
    $todo->complete($todoId);
    header('Location: /todos');
    exit();
});
$router->get('/todos/{id}/in-progress', function ($todoId) use ($todo) {
    $todo->inProgress($todoId);
    header('Location: /todos');
});
$router->get('/todos/{id}/pending', function ($todoId) use ($todo) {
    $todo->pending($todoId);
    header('Location: /todos');
});

/*
 * TODO
 *  1. Add getResource function in Router
 *  2. Refactor the get function in Router
 *  3. Change the todos.php
 *  4. Change routes to resources
 */






