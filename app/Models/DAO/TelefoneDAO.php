<?php 

namespace Gusteaus\Models\DAO;

use Gusteaus\Core\DAO;
use Gusteaus\Models\Entities\Telefone;

class TelefoneDAO extends DAO {

  protected static string $tabela = "Gusteaus.telefone";
  protected static string $classe = Telefone::class;
  protected static string $columnId = "id_telefone";
  
}