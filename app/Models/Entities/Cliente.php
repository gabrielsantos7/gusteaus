<?php 

namespace Gusteaus\Models\Entities;

class Cliente {
  private int $idCliente;
  private string $nomeCompleto;
  private string $email;
  private string $senha;
  private string $dataNascimento;
  private int $telefoneIdTelefone;
  private int $enderecoIdEndereco;

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