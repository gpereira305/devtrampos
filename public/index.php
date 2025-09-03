<?php
require '../helpers.php';

$routes = [
   '/' => '/controllers/home.php',
   '/listings/create' => '/controllers/listings/create.php',
   '/login' => '/controllers/login.php',
   '404' => '/controllers/error/404.php',
   '/job-listings' => '/views/listings/index.view.php',
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
   require(get_base_path($routes[$uri]));
} else {
   http_response_code(404);
   require(get_base_path($routes['404']));
}
