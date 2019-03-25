<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
include '../c3.php';

$app = new \Slim\App;
$app->get('/hello', function (Request $request, Response $response) {
    $response->getBody()->write("Hello World");
    return $response;
});
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = ($args['name'] == 'bob') ? 'Bob Marley' : $args['name'];

    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
