<?php

use Gusteaus\Core\Router;

Router::add('/', 'HomeController', 'index');
Router::add('/home', 'HomeController', 'index');
Router::add('/cardapio', 'MenuController', 'index');
Router::add('/login', 'LoginController', 'login');
Router::add('/cadastrar', 'LoginController', 'createAccount');
Router::add('__error', 'ErrorController', 'error404');