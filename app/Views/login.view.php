<?php
$cssPath = PUBLIC_PATH . 'css/login.css';
$jsPath = PUBLIC_PATH . 'js/login.js';
$title = 'Login';


require VIEW_PATH .  'components/header.php'
?>

<main>

<section>
    <div class="container-fluid" id="ctn-form-login">
    
      <h2 class="text-center font-satisfy font-yellow pt-3">
        Bem Vindo De Volta!
      </h2>

      <h3 class="font-poppins text-center pt-2 font-white">
        Login
      </h3>
      
      <div class="row d-flex justify-content-center align-items-center">
        <form action="" id="form-login" class="py-3">

          <div class="col-12 my-3">
            <label for="email" class="form-label font-poppins fw-bold">Digite seu e-mail:</label>
            <input required type="email" class="form-control" name="email" id="email" placeholder="Informe seu endereço de e-mail..." />
          </div>

          <div class="col-12">
            <label for="senha" class="form-label font-poppins fw-bold">Digite sua senha:</label>
            <input required type="password" class="form-control mb-3" name="senha" id="senha" placeholder="Informe sua senha..." />
            <input type="checkbox" name="mostrar-senha" id="mostrar-senha"> <span class="font-poppins text-white">Mostrar senha</span>
          </div>

          <div class="row d-flex justify-content-around align-items-center">
            <button type="submit" id="btn-login" class="py-2 px-5 btn mt-4 bg-yellow font-poppins fw-bold font-white">
              Entrar
            </button>

            <a href="" id="btn-cadastro" class="py-2 px-5 btn mt-4 bg-gray font-poppins fw-bold font-yellow">
              Cadastrar
            </a>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>