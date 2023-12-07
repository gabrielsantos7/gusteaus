<?php
declare(strict_types = 1);

// use Gusteaus\Core\Database;
use Gusteaus\Core\Router;
use Gusteaus\Models\DAO\ClienteDAO;
use Gusteaus\Models\Entities\Cliente;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/app/routes.php';
require __DIR__ . '/app/config.php';

$url = $_GET['url'] ?? '';

$cliente = new Cliente('Cláudio', 'claudim@exemplo.com', 'senha123', '2009-06-10', 2, 2);

$clienteDAO = new ClienteDAO();
$clienteDAO->insert($cliente);

Router::exec($url);