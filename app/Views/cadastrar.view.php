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

      <h3 class="font-poppins text-center pt-2 font-white">
        Cadastro
      </h3>

      <div class="d-flex justify-content-center align-items-center">
        <form action="" id="form-cadastro" class="py-3">

          <div class="ctn-1 d-none">
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
            </div>

            <div class="col-12">
              <label for="senha" class="form-label font-poppins fw-bold">Repita sua Senha:</label>
              <input required type="password" class="form-control mb-3" name="confirm-senha" id="confirm-senha"
                placeholder="Senha" />
            </div>

            <div class="row pl-3 my-3">
              <div class="col-6">
                <label for="telefone" class="form-label font-poppins fw-bold">Telefone:</label>
                <input required type="telefone" class="form-control" name="telefone" id="telefone"
                  placeholder="(XX)XXXXX-XXXX" />
              </div>

              <div class="col-5 ml-4">
                <label for="data" class="form-label font-poppins fw-bold">Data de Nascimento:</label>
                <input required type="date" name="data-nascimento" id="data-nascimento" class="form-control"
                  placeholder="Escolha uma data..." />
              </div>
            </div>
          </div>
          <div class="ctn-2">

          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>