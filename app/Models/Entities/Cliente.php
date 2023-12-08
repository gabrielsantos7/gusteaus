<?php 

namespace Gusteaus\Models\Entities;

class Cliente {
  public ?int $id_cliente;
  public ?string $nome_completo;
  public ?string $email;
  public ?string $senha;
  public ?string $data_nascimento;
  public ?int $telefone_id_telefone;
  public ?int $endereco_id_endereco;

}