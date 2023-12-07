<?php 

namespace Gusteaus\Models\Entities;

class Cliente {
  protected int $idCliente;
  protected string $nomeCompleto;
  protected string $email;
  protected string $senha;
  protected string $dataNascimento;
  protected int $telefoneIdTelefone;
  protected int $enderecoIdEndereco;

  public function __construct(
    string $nomeCompleto,
    string $email,
    string $senha,
    string $dataNascimento,
    int $telefoneIdTelefone,
    int $enderecoIdEndereco
) {
    $this->nomeCompleto = $nomeCompleto;
    $this->email = $email;
    $this->senha = $senha;
    $this->dataNascimento = $dataNascimento;
    $this->telefoneIdTelefone = $telefoneIdTelefone;
    $this->enderecoIdEndereco = $enderecoIdEndereco;
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