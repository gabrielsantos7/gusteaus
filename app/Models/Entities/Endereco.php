<?php 

namespace Gusteaus\Models\Entities;

class Endereco {
  private int $idEndereco;
  private string $rua;
  private string $numero;
  private string $bairro;
  private string $cidade;

  public function getIdEndereco() {
    return $this->idEndereco;
  }

  public function setIdEndereco($idEndereco) {
    $this->idEndereco = $idEndereco;
  }

  public function getRua() {
    return $this->rua;
  }

  public function setRua($rua) {
    $this->rua = $rua;
  }

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $this->numero = $numero;
  }

  public function getBairro() {
    return $this->bairro;
  }

  public function setBairro($bairro) {
    $this->bairro = $bairro;
  }

  public function getCidade() {
    return $this->cidade;
  }

  public function setCidade($cidade) {
    $this->cidade = $cidade;
  }
}