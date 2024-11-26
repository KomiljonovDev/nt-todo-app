<?php
//$arr = ['user'=>'Axror', 'password'=>'1234'];
//
//var_dump($arr);
//
//extract($arr);
//
//echo $user;
//echo $password;

function view ($page) {
    require 'views/' . $page . '.php';
}


