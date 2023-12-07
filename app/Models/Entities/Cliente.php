<?php 

namespace Gusteaus\Models\Entities;

use Gusteaus\Core\Database;

class Cliente {
  private int $idCliente;
  private string $nomeCompleto;
  private string $email;
  private string $senha;
  private string $dataNascimento;
  private int $telefoneIdTelefone;
  private int $enderecoIdEndereco;
  
  protected \PDO $conexao;
  protected \PDOStatement $stmt;

  public function __construct()
  {
    
  }

  public function insert() {
    $db = new Database();
    $sql = "INSERT INTO Gusteaus.cliente (nome_completo, email, senha, data_nascimento, telefone_id_telefone, endereco_id_endereco)
    VALUES (?,?,?,?,?,?);";
    $dados = ['Gabriel', 'gabriel@exemplo.com', 'senha123', '1998-01-20', 2, 2];
    
    // Se exibir true é porque deu certo
    var_dump($db->execute($sql, $dados));
  }

  public function getIdCliente() {
    return $this->idCliente;
  }

  public function setIdCliente($idCliente) {
    $this->idCliente = $idCliente;
  }
  
  public function getNomeCompleto() {
    return $this->nomeCompleto;
  }

  public function setNomeCompleto($nomeCompleto) {
    $this->nomeCompleto = $nomeCompleto;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function getDataNascimento() {
    return $this->dataNascimento;
  }

  public function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
  }

  public function getTelefoneIdTelefone() {
    return $this->telefoneIdTelefone;
  }

  public function setTelefoneIdTelefone($telefoneIdTelefone) {
    $this->telefoneIdTelefone = $telefoneIdTelefone;
  }

  public function getEnderecoIdEndereco() {
    return $this->enderecoIdEndereco;
  }

  public function setEnderecoIdEndereco($enderecoIdEndereco) {
    $this->enderecoIdEndereco = $enderecoIdEndereco;
  }
}