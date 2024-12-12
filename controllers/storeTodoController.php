<?php
if (!$_SESSION['user']){
    redirect('/login');
}
if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
    (new \App\Todo())->store($_POST['title'], $_POST['due_date'], $_SESSION['user']['id']);
    redirect('/todos');
}