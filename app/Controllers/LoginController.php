<?php

namespace Gusteaus\Controllers;
use Gusteaus\Core\Controller;
use Gusteaus\Models\Entities\Cliente;
use Gusteaus\Models\Entities\Endereco;
use Gusteaus\Models\Entities\Telefone;

use Gusteaus\Models\DAO\ClienteDAO;
use Gusteaus\Models\DAO\EnderecoDAO;
use Gusteaus\Models\DAO\TelefoneDAO;

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
    $nome = $this->post('nome');
    $email = $this->post('email');
    $senha = $this->post('senha');
    $dataNascimento = $this->post('data-nascimento');
    
    $cidade = $this->post('cidade');
    $bairro = $this->post('bairro');
    $rua = $this->post('rua');
    $numero = $this->post('numero');  

    $telefoneCompleto = $this->post('telefone');

    $cliente = new Cliente();
    $cliente->nome_completo = $nome;
    $cliente->email = $email;
    $cliente->setSenha($senha);
    $cliente->data_nascimento = $dataNascimento;
    $cliente->telefone_id_telefone = 1;
    $cliente->endereco_id_endereco = 1;

    $endereco = new Endereco();
    $endereco->rua = $rua;
    $endereco->numero = $numero;
    $endereco->bairro = $bairro;
    $endereco->cidade = $cidade;

    // Remova os parênteses e o traço para obter apenas os números
    $telefoneNumeros = preg_replace('/[^0-9]/', '', $telefoneCompleto);
    // Separe o DDD e o número
    $ddd = substr($telefoneNumeros, 0, 2);
    $numero = substr($telefoneNumeros, 2);

    // Criar instância de Telefone
    $telefone = new Telefone();
    $telefone->ddd = $ddd;
    $telefone->numero = $numero;

    if(TelefoneDAO::insert($telefone) && EnderecoDAO::insert($endereco) && ClienteDAO::insert($cliente)) {
      $this->loadView('cadastrarconta');
    }
  }
}