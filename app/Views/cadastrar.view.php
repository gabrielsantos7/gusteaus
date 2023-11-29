<?php
$cssPath = PUBLIC_PATH . 'css/cadastrar.css';
$jsPath = PUBLIC_PATH . 'js/cadastrar.js';
$title = 'Cadastrar';


require VIEW_PATH .  'components/header.php'
?>

<main>

<section>
    <div class="container-fluid" id="ctn-form-login">
    
    <h2 class="text-center font-satisfy font-yellow pt-3">
        Seja Bem Vindo!
    </h2>

    <h3 class="font-poppins text-center pt-2 font-white">
        Cadastro
    </h3>

    <div class="row d-flex justify-content-center align-items-center">
        <form action="" id="form-login" class="py-3">

    <div class="col-12 my-3">
        <label for="nome" class="form-label font-poppins fw-bold">Nome:</label>
        <input required type="nome" class="form-control" name="nome" id="nome" placeholder="Nome" />
    </div>

    <div class="col-12 my-3">
        <label for="email" class="form-label font-poppins fw-bold">E-mail:</label>
        <input required type="email" class="form-control" name="email" id="email" placeholder="E-mail" />
    </div>

    <div class="col-12">
        <label for="senha" class="form-label font-poppins fw-bold">Criar uma Senha:</label>
        <input required type="password" class="form-control mb-3" name="senha" id="senha" placeholder="Senha" />
        <input type="checkbox" name="mostrar-senha" id="mostrar-senha">
    </div>

    <div class="col-12 my-3">
        <label for="telefone" class="form-label font-poppins fw-bold">Telefone:</label>
        <input required type="telefone" class="form-control" name="telefone" id="telefone" placeholder="(XX)" />
    </div>

