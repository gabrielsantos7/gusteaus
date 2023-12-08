<?php 

namespace Gusteaus\Models\DAO;

use Gusteaus\Core\DAO;

use Gusteaus\Models\Entities\Endereco;

class EnderecoDAO extends DAO {

  protected static string $tabela = "Gusteaus.endereco";
  protected static string $classe = Endereco::class;
  protected static string $columnId = "id_endereco";
  
}