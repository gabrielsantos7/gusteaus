<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class CadastrarController extends Controller {
  public function createAccount() 
  {
    $this->loadView('cadastrar');
  }
}