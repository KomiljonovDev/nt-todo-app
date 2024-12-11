<?php

require 'bootstrap.php';

use App\Todo;
use App\Router;

require 'helpers.php';

$router = new Router();
$todo = new Todo();

$router->get('/register', fn () => view('register'));
$router->post('/register', fn () => require 'controllers/storeUserController.php');


$router->get('/login', fn () => view('login'));
$router->post('/login', fn () => require 'controllers/loginUserController.php');
$router->get('/', fn () => view('home'));

$router->get('/todos', fn ()=> require 'controllers/getTodosController.php');

$router->put('/todos/{id}/update', fn ($todoId) => require 'controllers/updateTodoController.php');


$router->get('/todos/{id}/update', fn ($todoId) => require 'controllers/editTodoController.php');

$router->post('/todos', fn ()=> require 'controllers/storeTodoController.php');

$router->get('/todos/{id}/delete', fn ($todoId)=> require 'controllers/destroyTodoController.php');







/*
 * TODO
 *  1. Add getUserById method in User class
 *  2. Change storeUserController
 *  3. Add login controller and login route
 *  5. Change navbar page
 */














