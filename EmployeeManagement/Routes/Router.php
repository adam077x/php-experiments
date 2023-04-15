<?php
    class Router {
        public $routes = array();

        public function __construct() {

        }

        public function route($route, $function) {
            $routes[] = $route;

            $parsedRoute = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

            if($parsedRoute == $route) {
                $function->__invoke();
            }
        }
    }
?>