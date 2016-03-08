<?php

/*
 * --------------------------------------------------------------------------
 * Define our needed classes
 * --------------------------------------------------------------------------
 *
 * Our application will use routing so here,
 * we will let our autoloader know so it can
 * load the proper route class. You should
 * add your additional classes here.
 */

use Application\Routes\Route;

/*
 * --------------------------------------------------------------------------
 * Register our routes
 * --------------------------------------------------------------------------
 *
 * Within the web method we can place a list of
 * all our routes and route groups that we need
 * to get the job done.
 */

$app->web(function(Route $route){
    // An html view example
    // $route->group(['shell' => 'example/base'], function($route){
        $route->when('/', view('example/home'));
    // });

    // A json example
    $route->when('/json', function(){
        return response()->json(['names' => [
            ['first' => 'Peter','last' => 'Parker'],
            ['first' => 'Kent','last' => 'Clark']
        ]]);
    });

    // An xml example
    $route->when('/xml', function(){
        return response()->xml('names', [
            ['first' => 'Barry','last' => 'Allen'],
            ['first' => 'Tony','last' => 'Stark']
        ]);
    });
});