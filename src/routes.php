<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * @var \Slim\App $app
 */

$app->get('/', function (Request $request, Response $response, $args) {
    return $response->getBody()->write("Hello Ag ");
});

$app->get('/persons', function (Request $request, Response $response, $args) {
    return $response->getBody()->write("Persons");
})->setName('persons');

$app->get('/log-test', function(Request $request, Response $response, $args) {
    // simple log test
    $this->logger->info("Slim-skeleton test '/' route");

    // render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});