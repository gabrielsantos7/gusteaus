<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class PedidosController extends Controller {
  public function index() 
  {
    $this->loadView('Pedidos');
  }
}