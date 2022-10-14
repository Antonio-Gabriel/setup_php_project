<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";
// require_once dirname(__DIR__). "/src/routes/index.php";

use Slim\App;
$app = new App();

$app->get("/", function($req, $res) {
    echo "test";
});

$app->run();
