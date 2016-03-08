<?php

require_once 'autoload.php';

use Application\Pie;
use Application\Console\Console;

$app = Pie::app();

$app->console(function(Console $console){
    // Create input commands to listen for
    // Commands for 'sayhi' or 'sayhello'
    $console->input('sayhi | sayhello', function(){
        return response('Hello World');
    });

    // Quit the application when 'quit' or 'exit' is typed
    $console->input('quit|exit', function(Console $console){
        $console->quit();
        return response('Goodbye!');
    });

    // Start the application
    $console->listen("Welcome to the Matrix!\n", '> ');
});