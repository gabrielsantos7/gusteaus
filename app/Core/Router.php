<?php

namespace Gusteaus\Core;

class Router
{

    protected static array $rotas = []; 

    public static function get(string $rota, string $controller, string $acao) {
        static::add($rota, $controller, $acao, 'GET');
    }

    public static function post(string $rota, string $controller, string $acao) {
        static::add($rota, $controller, $acao, 'POST');
    }

    protected static function add(string $rota, string $controller, string $acao, string $metodo)
    {
       static::$rotas[$rota] = [$controller, $acao, $metodo];
    }

    public static function exec(string $url, string $metodoHTTP)
    {
        $url = "/" . $url;
        $rotas = static::$rotas;

        if( array_key_exists($url, $rotas) ){
            [$controller,$acao, $metodo] = $rotas[$url];  
            if($metodo == $metodoHTTP) {
                static::loadController($controller,$acao);
            } else {
                static::error(405);
            }
        }else{
            static::error(404);        
        }
    }

    protected static function loadController($controller,$metodo)
    {
        $controller = NS_CONTROLLERS . $controller;
        $ctr = new $controller();
        $ctr->$metodo();
    }

    protected static function error(int $codigo = 400)
    {
        http_response_code($codigo);
        $controller = NS_CONTROLLERS. 'ErrorController';
        $ctr = new $controller();
        $ctr->error($codigo);
    }


}