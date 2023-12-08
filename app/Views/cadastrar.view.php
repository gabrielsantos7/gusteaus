<?php
$cssPath = PUBLIC_PATH . 'css/login.css';
$jsPath = PUBLIC_PATH . 'js/cadastrar.js';
$title = 'Cadastrar';

require VIEW_PATH .  'components/header.php'
?>

<main class="main">
  <section>
    <div class="container-fluid" id="ctn-form-login">
      <h2 class="text-center font-satisfy font-yellow pt-1">
        Seja Bem Vindo!
      </h2>

      <h3 class="font-poppins text-center pt-1 font-white" id="h3-form-title">
        Criar Conta
      </h3>

      <div class=" d-flex justify-content-center align-items-center">
        <form action="/gusteaus/cadastrarconta" method="post" id="form-cadastro" class="needs-validation my-5"
          novalidate>

          <div id="ctn-1">
            <div class="col-12 my-3">
              <label for="nome" class="form-label font-poppins fw-bold">Nome completo:</label>
              <input required type="text" class="form-control" name="nome" id="nome" placeholder="Nome e sobrenome"
                pattern=".*\s.*" title="Deve conter nome e sobrenome." />
              <div class="invalid-feedback">
                Por favor, informe um nome válido.
              </div>
            </div>

            <div class="col-12 my-3">
              <label for="email" class="form-label font-poppins fw-bold">E-mail:</label>
              <input required type="email" class="form-control" name="email" id="email" placeholder="E-mail" />
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido.
              </div>
            </div>

            <div class="col-12">
              <label for="senha" class="form-label font-poppins fw-bold">Criar uma Senha:</label>
              <input required type="password" class="form-control mb-3" name="senha" id="senha" placeholder="Senha"
                pattern="(?=.*[A-Z])(?=.*\d).{8,}"
                title="A senha deve ter no mínimo oito caracteres, uma letra maiúscula e um número." />
              <div class="invalid-feedback">
                A senha deve conter no mínimo 8 caracteres, uma letra maíuscula e um número.
              </div>
              <input type="checkbox" name="mostrar-senha" id="mostrar-senha"> <span
                class="font-poppins text-white">Mostrar senha</span>
            </div>

            <div class="row pl-3 my-3">
              <div class="col-6">
                <label for="telefone" class="form-label font-poppins fw-bold">Telefone:</label>
                <input required type="text" class="form-control" name="telefone" id="telefone"
                  placeholder="(XX) XXXXX-XXXX" pattern="^\(\d{2}\) \d{5}-\d{4}$"
                  title="Formato válido: (XX) XXXXX-XXXX" />
                <div class="invalid-feedback">
                  Número de telefone inválido.
                </div>
              </div>

              <div class="col-5 ml-4">
                <label for="data-nascimento" class="form-label font-poppins fw-bold">Data de Nascimento:</label>
                <input required type="date" name="data-nascimento" id="data-nascimento" class="form-control"
                  placeholder="Escolha uma data..." />
                <div class="invalid-feedback">
                  Por favor,informe sua data de nascimento.
                </div>
              </div>
            </div>

            <div class="row d-flex justify-content-end align-items-end mr-4">
              <button type="button" class="btn font-white bg-yellow fw-bold py-2 px-4"
                id="btn-prosseguir">Próximo</button>
            </div>

          </div>

          <div id="ctn-2" class="d-none">
            <div class="col-12 my-3">
              <label for="cidade" class="form-label font-poppins fw-bold">Cidade:</label>
              <input required type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" />
              <div class="invalid-feedback">
                Por favor, informe o nome da sua cidade.
              </div>
            </div>

            <div class="col-12 my-3">
              <label for="bairro" class="form-label font-poppins fw-bold">Bairro:</label>
              <input required type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" />
              <div class="invalid-feedback">
                Por favor, informe o nome do seu bairro.
              </div>
            </div>

            <div class="row pl-3 my-3">
              <div class="col-9">
                <label for="rua" class="form-label font-poppins fw-bold">Rua:</label>
                <input required type="text" class="form-control" name="rua" id="rua" placeholder="Rua" />
                <div class="invalid-feedback">
                  Por favor, informe o nome da sua rua.
                </div>
              </div>

              <div class="col-3">
                <label for="numero" class="form-label font-poppins fw-bold">Número:</label>
                <input required type="text" class="form-control" name="numero" id="numero" placeholder="Número"
                  pattern="^(S\/N|s\/n|[1-9]\d*)$" title="Deve ser S/N ou um número válido." />
                <div class="invalid-feedback">
                  Número inválido.
                </div>
              </div>
            </div>

            <div class="row mt-4 d-flex justify-content-around align-items-center mr-4">
              <button type="button" id="btn-voltar" class="btn bg-gray font-white fw-bold py-2 px-4">Voltar</button>
              <button type="submit" class="btn font-white bg-yellow fw-bold py-2 px-4" id="btn-criar">Criar
                conta</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>