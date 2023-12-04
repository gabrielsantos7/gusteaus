<?php
$cssPath = PUBLIC_PATH . 'css/login.css';
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

      <h3 class="font-poppins text-center pt-2 font-white" id="h3-form-title">
        Criar Conta
      </h3>

      <div class=" d-flex justify-content-center align-items-center">
        <form action="" method="post" id="form-cadastro" class="py-3">

          <div id="ctn-1" class="d-none">
            <div class="col-12 my-3">
              <label for="nome" class="form-label font-poppins fw-bold">Nome:</label>
              <input required type="text" class="form-control" name="nome" id="nome" placeholder="Nome" />
            </div>

            <div class="col-12 my-3">
              <label for="email-user" class="form-label font-poppins fw-bold">E-mail:</label>
              <input required type="email" class="form-control" name="email-user" id="email-user"
                placeholder="E-mail" />
            </div>

            <div class="col-12">
              <label for="senha" class="form-label font-poppins fw-bold">Criar uma Senha:</label>
              <input required type="password" class="form-control mb-3" name="senha" id="senha" placeholder="Senha" />
            </div>

            <div class="col-12">
              <label for="confirm-senha" class="form-label font-poppins fw-bold">Repita sua Senha:</label>
              <input required type="password" class="form-control mb-3" name="confirm-senha" id="confirm-senha"
                placeholder="Senha" />
            </div>

            <div class="row pl-3 my-3">
              <div class="col-6">
                <label for="telefone" class="form-label font-poppins fw-bold">Telefone:</label>
                <input required type="text" class="form-control" name="telefone" id="telefone"
                  placeholder="(XX)XXXXX-XXXX" />
              </div>

              <div class="col-5 ml-4">
                <label for="data-nascimento" class="form-label font-poppins fw-bold">Data de Nascimento:</label>
                <input required type="date" name="data-nascimento" id="data-nascimento" class="form-control"
                  placeholder="Escolha uma data..." />
              </div>
            </div>

            <div class="row d-flex justify-content-end align-items-end mr-4">
              <button type="button" class="btn font-white bg-yellow fw-bold py-2 px-4"
                id="btn-prosseguir">Próximo</button>
            </div>

          </div>

          <div id="ctn-2">
            <div class="col-12 my-3">
              <label for="cidade" class="form-label font-poppins fw-bold">Cidade:</label>
              <input required type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" />
            </div>

            <div class="col-12 my-3">
              <label for="bairro" class="form-label font-poppins fw-bold">Bairro:</label>
              <input required type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" />
            </div>

            <div class="row pl-3 my-3">
              <div class="col-9">
                <label for="rua" class="form-label font-poppins fw-bold">Rua:</label>
                <input required type="text" class="form-control" name="rua" id="rua" placeholder="Rua" />
              </div>

              <div class="col-3">
                <label for="numero" class="form-label font-poppins fw-bold">Número:</label>
                <input required type="text" class="form-control" name="numero" id="numero" placeholder="Número" />
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