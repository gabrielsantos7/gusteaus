<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class HomeController extends Controller {
  public function index() 
  {
    echo "Welcome";
    // return $this->loadView('home');
  }
}