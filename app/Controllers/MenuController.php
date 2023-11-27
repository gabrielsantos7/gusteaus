<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class MenuController extends Controller {
  public function index() 
  {
    $this->loadView('menu');
    // require './app/Views/menu.php';
  }
}