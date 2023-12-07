<?php
declare(strict_types = 1);

// use Gusteaus\Core\Database;
use Gusteaus\Core\Router;
use Gusteaus\Models\Entities\Cliente;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/app/routes.php';
require __DIR__ . '/app/config.php';

$url = $_GET['url'] ?? '';

$cliente = new Cliente();
$cliente->insert();

Router::exec($url);