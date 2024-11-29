<?php
class Router {
    public $currentRoute;
    public function __construct () {
        $this->currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    public function get ($route,$callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }
    public function post ($route,$callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }
}