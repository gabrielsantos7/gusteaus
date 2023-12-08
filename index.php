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

$cliente = new Cliente();
$cliente->nome_completo = 'Cláudio';
$cliente->email = 'claudim@exemplo.com';
$cliente->senha = 'senha123';
$cliente->data_nascimento ='2009-06-10';
$cliente->telefone_id_telefone = 2;
$cliente->endereco_id_endereco = 2;


$clienteDAO = new ClienteDAO();
// $clienteDAO->insert($cliente);
// var_dump($clienteDAO->getAll());
// var_dump($clienteDAO->getById(6));
// $cliente2 = $clienteDAO->getById(6);
// $cliente2->nome_completo = 'Nome Editado DNV DNV';
// $cliente2->email = 'email_editado@exemplo.com';
// $cliente2->senha = 'senha_editada';
// $cliente2->data_nascimento ='2000-01-01';
// $cliente2->telefone_id_telefone = 2;
// $cliente2->endereco_id_endereco = 2;

// var_dump($clienteDAO->edit($cliente2));

// $cliente3 = $clienteDAO->getById(16);

// var_dump($clienteDAO->delete($cliente3));

Router::exec($url);