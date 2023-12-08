<?php 

namespace Gusteaus\Models\Entities;

use Gusteaus\Core\Entity;

class Cliente extends Entity {
  protected ?int $id_cliente;
  protected ?string $nome_completo;
  protected ?string $email;
  protected ?string $senha;
  protected ?string $data_nascimento;
  protected ?int $telefone_id_telefone;
  protected ?int $endereco_id_endereco;

  public function setSenha($valor)
    {
        $this->senha = password_hash($valor,PASSWORD_DEFAULT);
    }
}