<?php

/**
 * Pie.php - A simple PHP framework for simple people
 *
 * @package  Pie.php
 * @author   Ryan Naddy <untuned20@gmail.com>
 *
 * Don't modify this file unless you know what you are doing.
 * You could break everything and life itself!
 */

/*
 * --------------------------------------------------------------------------
 * Register the autoloader
 * --------------------------------------------------------------------------
 *
 * Include the autoloader to automatically load the awesomeness!
 * We never have to do this again for our web project!
 */

require_once 'autoload.php';

/*
 * --------------------------------------------------------------------------
 * Prepare the pie
 * --------------------------------------------------------------------------
 *
 * Initiate the $app, this variable should be avalible
 * to you in your routes file found in App/Web/routes.php
 */

$app = \Application\Pie::app();

/*
 * --------------------------------------------------------------------------
 * Fill the requests
 * --------------------------------------------------------------------------
 *
 * We can now listen for requests and respond to them
 * automagically and send the results back to the browser.
 */

require_once __DIR__ . '/../App/Web/routes.php';