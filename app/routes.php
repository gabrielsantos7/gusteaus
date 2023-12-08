<?php

use Gusteaus\Core\Router;

Router::get('/', 'HomeController', 'index');
Router::get('/home', 'HomeController', 'index');
Router::get('/cardapio', 'MenuController', 'index');
Router::get('/pedido', 'PedidosController', 'index');
Router::get('/login', 'LoginController', 'login');
Router::get('/cadastrar', 'LoginController', 'createAccount');
Router::post('/cadastrarconta', 'LoginController', 'cadastrarConta');