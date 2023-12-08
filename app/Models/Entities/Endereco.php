<?php 

namespace Gusteaus\Models\Entities;

use Gusteaus\Core\Entity;

class Endereco extends Entity {
  protected int $idEndereco;
  protected string $rua;
  protected string $numero;
  protected string $bairro;
  protected string $cidade;
  
}