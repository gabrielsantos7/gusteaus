<?php 

namespace Gusteaus\Models\Entities;

class Telefone {
  private int $idTelefone;
  private string $ddd;
  private string $numero;

  public function getIdTelefone() {
      return $this->idTelefone;
  }

  public function setIdTelefone($idTelefone) {
      $this->idTelefone = $idTelefone;
  }

  public function getDdd() {
      return $this->ddd;
  }

  public function setDdd($ddd) {
      $this->ddd = $ddd;
  }

  public function getNumero() {
      return $this->numero;
  }

  public function setNumero($numero) {
      $this->numero = $numero;
  }
}