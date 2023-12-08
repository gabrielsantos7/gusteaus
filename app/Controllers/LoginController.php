<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class LoginController extends Controller {
  public function login() 
  {
    $this->loadView('login');
  }

  public function createAccount() 
  {
    $this->loadView('cadastrar');
  }

  public function cadastrarConta() 
  {
    var_dump($_POST);
  }
}