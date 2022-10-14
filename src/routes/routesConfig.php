<?php

require_once "homeRoutes.php";

use Slim\App;

class Routes
{
    private App $slim;

    public function __construct()
    {
        $this->slim = new App(["debug" => true]);
    }

    public function init()
    {
        HomeRoute::routes($this->slim);
    }

    public function __destruct()
    {
        $this->slim->run();
    }
}
