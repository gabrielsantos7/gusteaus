<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class HomeController extends Controller {
  public function index() 
  {
    return $this->loadView('home');
  }
}