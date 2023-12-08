<?php 

namespace Gusteaus\Models\Entities;
use Gusteaus\Core\Entity;

class Telefone extends Entity {
  protected int $idTelefone;
  protected string $ddd;
  protected string $numero;
  
}