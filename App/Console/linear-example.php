<?php

require_once 'autoload.php';

use Application\Pie;
use Application\Console\Console;

$app = Pie::app();

$app->console(function(Console $console){
    // Runs the commands in order
    $console->run(function($c){
        $name = '';
        // Ask the users name
        $c->ask('What is your name?', function($value) use (&$name) {
            $name = $value;
            // response() will format the output nicely for the console
            return response('Hello ' . $name . '!');
        });
        // Ask for the users favorite color
        $c->ask('What is your favorite color?', function($value) use (&$name) {
            $color = strtolower($value);
            if($color == 'black'){
                return response($name . ', you\'re a dark person... But I like black too!');
            }
            return response('I like ' . $color . ' too ' . $name . '!');
        });
    });
});