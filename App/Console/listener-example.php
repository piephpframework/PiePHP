<?php

require_once 'autoload.php';

use Application\Pie;
use Application\Console\Console;
use Application\Console\ConsoleMessage;

$app = Pie::app();

$app->console(function(Console $console){
    // Create input commands to listen for
    // Commands for 'sayhi' or 'sayhello'
    $console->input('sayhi | sayhello', function(){
        return response('Hello World')->color(ConsoleMessage::Red);
    });

    // Quit the application when 'quit' or 'exit' is typed
    $console->input('quit|exit', function(Console $console){
        $console->quit();
        return response('Goodbye!')->color(ConsoleMessage::Green);
    });

    // Start the application
    $console->listen(function(Console $console){
        return response('Welcome to the Matrix!')->color(ConsoleMessage::Green);
    }, '> ');
});