<?php 

namespace Gusteaus\Models\Entities;

class Pedido {
  private $idPedido;
  private $valorTotal;
  private $dataHora;
  private $statusPreparo;
  private $observacoes;

  public function getIdPedido() {
      return $this->idPedido;
  }

  public function setIdPedido($idPedido) {
      $this->idPedido = $idPedido;
  }

  public function getValorTotal() {
      return $this->valorTotal;
  }

  public function setValorTotal($valorTotal) {
      $this->valorTotal = $valorTotal;
  }

  public function getDataHora() {
      return $this->dataHora;
  }

  public function setDataHora($dataHora) {
      $this->dataHora = $dataHora;
  }

  public function getStatusPreparo() {
      return $this->statusPreparo;
  }

  public function setStatusPreparo($statusPreparo) {
      $this->statusPreparo = $statusPreparo;
  }

  public function getObservacoes() {
      return $this->observacoes;
  }

  public function setObservacoes($observacoes) {
      $this->observacoes = $observacoes;
  }
}