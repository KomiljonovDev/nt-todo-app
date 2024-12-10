<?php


if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repeat_password'])) {
    if ($_POST['password'] != $_POST['repeat_password']) {
        $_SESSION['error_message'] = 'Passwords do not match';
        redirect('/register');
        exit();
    }
    $lastUserId = (new \App\User())->register($_POST['full_name'], $_POST['email'], $_POST['password']);
    if ($lastUserId) {
        unset($_SESSION['error_message']);
        $_SESSION['user_id'] = $lastUserId;
        redirect('/todos');
        exit();
    }
    $_SESSION['error_message'] = 'Email already exists';
    redirect('/register');
}



