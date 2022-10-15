<?php

require __DIR__ . '/../bin/php_sapi.php';
require __DIR__ . '/../vendor/autoload.php';

session_start();

use Slim\App;

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new App($settings);

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require_once __DIR__ . '/../src/routes.php';

// Run app
$app->run();