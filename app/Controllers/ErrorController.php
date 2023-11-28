<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class ErrorController extends Controller {
  public function error404() 
  {
    $this->loadView('error404');
  }
}