<?php 

namespace Gusteaus\Models\DAO;

use Gusteaus\Core\DAO;
use Gusteaus\Core\Database;
use Gusteaus\Models\Entities\Cliente;

class ClienteDAO extends DAO {

  protected static string $tabela = "Gusteaus.cliente";
  protected static string $classe = Cliente::class;
  protected static string $columnId = "id_cliente";
  
  public function insert(Cliente $cliente) {
    $db = new Database();
    $sql = "INSERT INTO Gusteaus.cliente (nome_completo, email, senha, data_nascimento, telefone_id_telefone, endereco_id_endereco)
    VALUES (?,?,?,?,?,?);";

    $clienteArray = [
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

  // public function getAll() {
  //   $db = new Database();
  //   $sql = "SELECT * FROM Gusteaus.cliente";
  //   $db->execute($sql);

  //   return $db->getAll(Cliente::class);
  // }

  // public function getById($id) {
  //   $db = new Database();
  //   $sql = "SELECT * FROM Gusteaus.cliente WHERE id_cliente = ?;";
  //   $db->execute($sql, [$id]);

  //   return $db->get(Cliente::class);
    
  // }

  public function edit(Cliente $cliente) {
    $db = new Database();
    $sql = "UPDATE Gusteaus.cliente
            SET nome_completo = ?, email = ?, senha = ?, data_nascimento = ?, telefone_id_telefone = ?, endereco_id_endereco = ?
            WHERE id_cliente = ?;";

    $clienteArray = [
      $cliente->nome_completo,
      $cliente->email,
      $cliente->senha,
      $cliente->data_nascimento,
      $cliente->telefone_id_telefone,
      $cliente->endereco_id_endereco,
      $cliente->id_cliente
    ];

    // Retorna true se der certo, ou false se ocorrer um erro
    return $db->execute($sql, $clienteArray);
     
  }

  public function delete(Cliente $cliente) {
    $db = new Database();
    $sql = "DELETE FROM Gusteaus.cliente WHERE id_cliente = ?;";

    // Retorna true se der certo, ou false se ocorrer um erro
    return $db->execute($sql, [$cliente->id_cliente]);
  }

}