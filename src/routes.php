<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use Setup\Resources\Seo\Seo;

/**
 * @var \Slim\App $app
 */

$app->get('/', function (Request $request, Response $response, $args) {

    // add seo on home page
    $seo = new Seo();
    $contentHeader = $seo->render(
        title: "Home | Setup",
        description: "Setup to php application with seo and otherthings",
        url: "https://you-domain.com",
        image: "https://via.placeholder.com/1200x628?text=Home+Setup+Now"
    );
    
    return $this->renderer->render($response, 'index.phtml', [
        "head" => $contentHeader
    ]);
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