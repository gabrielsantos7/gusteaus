<?php

namespace Gusteaus\Core;

class Router
{

    protected static array $rotas = []; 

    public static function add(string $rota, string $controller, string $acao)
    {
       static::$rotas[$rota] = [$controller, $acao];
    }

    public static function exec(string $url)
    {
        $url = "/" . $url;
        $rotas = static::$rotas;

        if( array_key_exists($url, $rotas) ){
            [$controller,$metodo] = $rotas[$url];   
        }else{
            [$controller,$metodo] = $rotas['__error'];         
        }

        static::loadController($controller,$metodo);
    }

    protected static function loadController($controller,$metodo)
    {
        $controller = NS_CONTROLLERS . $controller;
        $ctr = new $controller();
        $ctr->$metodo();
    }

}