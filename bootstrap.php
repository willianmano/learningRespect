<?php

if (file_exists(__DIR__.'/vendor/autoload.php')) {
	require_once __DIR__.'/vendor/autoload.php';
} else {
	echo 'Please, use Composer to install dependencies.';
    exit(2);
}

require 'SplClassLoader.php';
$loader = new SplClassLoader('Application', __DIR__.'/src');
$loader->register();

use Respect\Rest\Router;
use Respect\Config\Container;

$config = new Container(__DIR__.'/config/start.ini');
//Twig loaded configuration
$twig = $config->application->twig;

// echo $twig->getBaseTemplateClass();
// echo"<pre>";
// print_r($twig);
// exit;

$r3 = new Router($config->application->app_uri);