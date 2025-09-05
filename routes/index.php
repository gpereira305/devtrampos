
<?php


$router->get('/', '/controllers/home.php');
$router->get('/listings/create', '/controllers/listings/create.php');
$router->get('/login', '/controllers/login.php');
$router->get('/job-listings', '/views/listings/index.view.php');
