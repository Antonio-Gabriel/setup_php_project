<?php

use Slim\App;

trait HomeRoute {
    static function routes(App $app) {
        $app->get("/test", function($req, $res) {
            echo "Enviando:";
        });
    }
}