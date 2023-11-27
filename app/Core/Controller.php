<?php

namespace Gusteaus\Core;

abstract class Controller 
{

    
    protected function loadView(string $arquivo,array $dados=[])
    {
        extract($dados); 
        require VIEW_PATH."{$arquivo}.view.php";
    }



}