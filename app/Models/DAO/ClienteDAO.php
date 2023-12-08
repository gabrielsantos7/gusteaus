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
      $cliente->nome_completo,
      $cliente->email,
      $cliente->senha,
      $cliente->data_nascimento,
      $cliente->telefone_id_telefone,
      $cliente->endereco_id_endereco
    ]; 
    
    // Se exibir true é porque deu certo
    var_dump($db->execute($sql, $clienteArray));
  }

  public function getAll() {
    $db = new Database();
    $sql = "SELECT * FROM cliente";
    $db->execute($sql);

    return $db->getAll(Cliente::class);
  }

  public function getById($id) {
    $db = new Database();
    $sql = "SELECT * FROM cliente WHERE id_cliente = ?;";
    $db->execute($sql, [$id]);

    return $db->get(Cliente::class);
    
  }

}