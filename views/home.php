<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .todo-body {
            max-width: 700px;
            box-shadow: 0 0 5px 5px #ccc;
        }

        .todo-text {
            font-weight: bold;
        }
        .completed {
            text-decoration: line-through;
            color: green;
        }
    </style>
</head>
<body class="bg-dark-subtle">

<?php

/** @var TYPE_NAME $todos */

?>


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam autem eveniet illum ipsa, nihil
                numquam officiis pariatur placeat quae quasi recusandae repellat similique tempora tenetur ut vel veniam
                veritatis.</p>
            <form method="POST" action="/store">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="title"
                           required
                    >
                    <input type="datetime-local" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="due_date"
                           required
                    >
                    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
            <ul class="list-group">
                <?php
                foreach ($todos as $todo) {
                    $isCompleted = $todo['status'] == 'completed' ? 'completed' : '';
                    echo '
                        <li class="' . $isCompleted . ' list-group-item d-flex justify-content-between align-items-center">
                    ' . $todo["title"] . '
                    <div>
                        <a href="" class="btn btn-outline-success">In progress</a>
                    <a href="/complete?id=' . $todo["id"] .'" class="btn btn-outline-success">Complete</a> 
                    </div>
                </li>
                    ';
                }

                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>