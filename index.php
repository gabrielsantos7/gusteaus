<?php
declare(strict_types = 1);

use Gusteaus\Core\Router;

require __DIR__ . '/vendor/autoload.php';
require './app/config.php';

$url = $_GET['url'] ?? '';

Router::add('/', 'HomeController', 'index');
// Router::add('/home', 'HomeController', 'index');
Router::add('/cardapio', 'MenuController', 'index');
Router::add('/login', 'LoginController', 'login');
Router::add('/cadastrar', 'LoginController', 'createAccount');
Router::add('__error', 'ErrorController', 'error404');

Router::exec($url);