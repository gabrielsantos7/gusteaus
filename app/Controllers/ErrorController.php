<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class ErrorController extends Controller {
  public function error404() 
  {
    echo "Error 404";
    // return $this->loadView('home');
  }
}