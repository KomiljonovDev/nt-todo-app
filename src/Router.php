<?php
class Router {
    public $currentRoute;
    public function __construct () {
        $this->currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    public function getResource () {
        if (isset(explode("/", $this->currentRoute)[2])) {
            $resourceId = (int)explode("/", $this->currentRoute)[2];
            return $resourceId ? $resourceId : false;
        }
        return false;
    }

    public function get ($route,$callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $resourceId = $this->getResource();
            $route = str_replace('{id}', $resourceId, $route);
            if ($route == $this->currentRoute) {
                $callback($resourceId);
                exit();
            }
        }
    }
    public function post ($route,$callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $resourceId = $this->getResource();
            $route = str_replace('{id}', $resourceId, $route);
            if ($route == $this->currentRoute) {
                $callback($resourceId);
                exit();
            }
        }
    }
    public function put ($route,$callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['_method'] == 'PUT') {
                $resourceId = $this->getResource();
                $route = str_replace('{id}', $resourceId, $route);
                if ($route == $this->currentRoute) {
                    $callback($resourceId);
                    exit();
                }
            }
        }
    }
}