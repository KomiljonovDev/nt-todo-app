<?php

require 'bootstrap.php';

use App\Todo;
use App\Router;

require 'helpers.php';

$router = new Router();
$todo = new Todo();

$router->get('/', fn () => require 'controllers/homeController.php');

$router->get('/todos', fn ()=> require 'controllers/getTodosController.php');

$router->put('/todos/{id}/update', fn ($todoId) => require 'controllers/updateTodoController.php');


$router->get('/todos/{id}/update', fn ($todoId) => require 'controllers/editTodoController.php');

$router->post('/todos', function () use ($todo) {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        redirect('/todos');
    }
});

$router->get('/todos/{id}/delete', function ($todoId) use($todo){
    $todo->destroy($todoId);
    redirect('/todos');
});






/*
 * TODO
 *  1. Add getResource function in Router
 *  2. Refactor the get function in Router
 *  3. Change the todos.php
 *  4. Change routes to resources
 */






