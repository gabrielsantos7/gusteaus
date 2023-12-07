<?php 

namespace Gusteaus\Models\Entities;

class Item {
  private $idItem;
  private $nome;
  private $precoUnitario;
  private $descricao;

  public function getIdItem() {
      return $this->idItem;
  }

  public function setIdItem($idItem) {
      $this->idItem = $idItem;
  }

  public function getNome() {
      return $this->nome;
  }

  public function setNome($nome) {
      $this->nome = $nome;
  }

  public function getPrecoUnitario() {
      return $this->precoUnitario;
  }

  public function setPrecoUnitario($precoUnitario) {
      $this->precoUnitario = $precoUnitario;
  }

  public function getDescricao() {
      return $this->descricao;
  }

  public function setDescricao($descricao) {
      $this->descricao = $descricao;
  }
}