<?php
declare(strict_types = 1);

use Gusteaus\Core\Router;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . './app/routes.php';
require __DIR__ . './app/config.php';

$url = $_GET['url'] ?? '';Router::add('/', 'HomeController', 'index');

Router::exec($url);