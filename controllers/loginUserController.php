<?php

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $user = (new \App\User())->login($_POST['email'], $_POST['password']);
    if (!$user) {
        $_SESSION['error_message'] = "Wrong email or password";
        redirect('/login');
    }
    unset($user['password']);
    $_SESSION['user'] = $user;
    redirect('/todos');
}



