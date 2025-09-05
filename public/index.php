<?php
require '../helpers.php';
require get_base_path('/Router/index.php');

$router = new Router();
$routes = require get_base_path('/routes/index.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
