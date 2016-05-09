<?php

use Illuminate\Routing\Router;



Route::group([ 'prefix' => '/', 'namespace' => 'Api' ], function (Router $route) {

    $route->group([ 'prefix' => 'v1', 'namespace' => 'Version1' ], function (Router $route) {


        $route->group([ 'prefix' => 'diallers', 'namespace' => 'Diallers' ], function (Router $route) {
            $route->resources([
                'servers' => 'Servers',
            ]);
        });


    });


});