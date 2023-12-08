<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;

class ErrorController extends Controller {
  public function error($codigo) 
  {
    switch ($codigo) {
      case 404:
        $pageTitle = 'Erro 404 - Página não encontrada';
        $messageTitle = 'Ops! Página não encontrada';
        $message = 'A página solicitada não pôde ser encontrada. Por favor, verifique a URL e tente novamente.';
        break;
        
      case 400:
        $pageTitle = 'Erro 400 - Requisição Inválida';
        $messageTitle = 'Requisição Inválida';
        $message = 'Houve um problema na requisição feita. Verifique os dados enviados e tente novamente.';
        break;
        
      case 405:
        $pageTitle = 'Erro 405 - Método Não Permitido';
        $messageTitle = 'Método Não Permitido';
        $message = 'O método de requisição utilizado não é suportado para este recurso. Por favor, verifique o método HTTP utilizado.';
        break;
        
      default:
        $pageTitle = 'Erro Desconhecido';
        $messageTitle = 'Erro Desconhecido';
        $message = 'Ocorreu um erro desconhecido. Por favor, entre em contato com o suporte para assistência.';
    }

    $errorData = [
      'title' => $pageTitle, 
      'msgTitle' => $messageTitle, 
      'message' => $message
    ];
    
    $this->loadView('error', $errorData);
  }
}