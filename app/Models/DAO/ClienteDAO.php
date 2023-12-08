<?php 

namespace Gusteaus\Models\DAO;

use Gusteaus\Core\DAO;
use Gusteaus\Core\Database;
use Gusteaus\Models\Entities\Cliente;

class ClienteDAO extends DAO {

  protected static string $tabela = "Gusteaus.cliente";
  protected static string $classe = Cliente::class;
  protected static string $columnId = "id_cliente";
  
}