<?php
use App\Router;
use App\Todo;

$router = new Router();

$todo = new Todo();


$router->get('/api/todos', function () use ($todo){
    apiResponse($todo->getAllTodos(2));
});
$router->get('/api/todos/{id}', function ($todoId) use ($todo){
    apiResponse($todo->getTodo($todoId));
});



