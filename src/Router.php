<?php

namespace App;

class Router {
    public $currentRoute;

    public function __construct () {
        $this->currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getResource ($route) {
        $resourceIndex = mb_stripos($route, '{id}');
        if (!$resourceIndex) {
            return false;
        }
        $resourceValue = substr($this->currentRoute, $resourceIndex);
        if ($limit = mb_stripos($resourceValue, '/')) {
            return substr($resourceValue, 0, $limit);
        }
        return $resourceValue ?: false;
    }

    /*
     * FIXME
     *  1. Make as static the methods
     */
    public function get ($route, $callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $resourceValue = $this->getResource($route);
            if ($resourceValue) {
                $resourceRoute = str_replace('{id}', $resourceValue, $route);
                if ($resourceRoute == $this->currentRoute) {
                    $callback($resourceValue);
                    exit();
                }
            }
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }

    public function post ($route, $callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $resourceValue = $this->getResource($route);
            if ($resourceValue) {
                $resourceRoute = str_replace('{id}', $resourceValue, $route);
                if ($resourceRoute == $this->currentRoute) {
                    $callback($resourceValue);
                    exit();
                }
            }
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }

    public function put ($route, $callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_method']) && $_POST['_method'] == 'PUT') {
                $resourceValue = $this->getResource($route);
                if ($resourceValue) {
                    $resourceRoute = str_replace('{id}', $resourceValue, $route);
                    if ($resourceRoute == $this->currentRoute) {
                        $callback($resourceValue);
                        exit();
                    }
                }
                if ($route == $this->currentRoute) {
                    $callback();
                    exit();
                }
            }
        }
    }
    public function delete ($route, $callback) {
        if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
            $resourceValue = $this->getResource($route);
            if ($resourceValue) {
                $resourceRoute = str_replace('{id}', $resourceValue, $route);
                if ($resourceRoute == $this->currentRoute) {
                    $callback($resourceValue);
                    exit();
                }
            }
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }
    public function isApiCall () {
        return mb_stripos($this->currentRoute, '/api') === 0;
    }
}