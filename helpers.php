<?php
//$arr = ['user'=>'Axror', 'password'=>'1234'];
//
//var_dump($arr);
//
//extract($arr);
//
//echo $user;
//echo $password;

function view (string $page, array $data = []) {
    extract($data);
    require 'views/' . $page . '.php';
}

function redirect (string $url) {
    header('Location: ' . $url);
}