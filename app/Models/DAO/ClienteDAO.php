<?php 

namespace Gusteaus\Models\DAO;

use Gusteaus\Core\Database;
use Gusteaus\Models\Entities\Cliente;

class ClienteDAO {
  
  public function insert(Cliente $cliente) {
    $db = new Database();
    $sql = "INSERT INTO Gusteaus.cliente (nome_completo, email, senha, data_nascimento, telefone_id_telefone, endereco_id_endereco)
    VALUES (?,?,?,?,?,?);";

    $clienteArray =[
      $cliente->getNomeCompleto(),
      $cliente->getEmail(),
      $cliente->getSenha(),
      $cliente->getDataNascimento(),
      $cliente->getTelefoneIdTelefone(),
      $cliente->getEnderecoIdEndereco()
  ]; 
    
    // Se exibir true é porque deu certo
    var_dump($db->execute($sql, $clienteArray));
  }

}