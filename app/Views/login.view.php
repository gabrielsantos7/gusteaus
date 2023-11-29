<?php
$cssPath = PUBLIC_PATH . 'css/menu.css';
$jsPath = PUBLIC_PATH . 'js/menu.js';
$title = 'Login';

require './app/Core/products.php';

$bestSellers = [$mainDishes[1], $mainDishes[2],  $drinks[3], $desserts[3]];

require VIEW_PATH .  'components/header.php'
?>

<main>

<section>
    <div class="container-fluid" id="ctn-form-reserva">
      <form action="" class="my-5" id="form-reserva">
        <h2 class="text-center font-satisfy text-yellow pt-5">
          Reserve uma mesa
        </h2>

        <div class="row col-12 mt-5 mb-3">
          <div class="col-12 col-md-4">
            <label for="nome" class="form-label">Nome completo:</label>
            <input required type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome..." />
          </div>

          <div class="col-12 col-md-4">
            <label for="telefone" class="form-label">Telefone:</label>
            <input required type="text" inputmode="tel" name="telefone" id="telefone" class="form-control"
              placeholder="Informe seu telefone..." />
          </div>

          <div class="col-12 col-md-4">
            <label for="email" class="form-label">E-mail:</label>
            <input required type="email" class="form-control" name="email" id="email"
              placeholder="Informe seu endereço de e-mail..." />
          </div>
        </div>

        <div class="row col-12">
          <div class="col-12 col-md-4">
            <label for="data" class="form-label">Data:</label>
            <input required type="date" name="data" id="data" class="form-control" placeholder="Escolha uma data..." />
          </div>

          <div class="col-12 col-md-4">
            <label for="hora" class="form-label">Horário:</label>
            <input required type="time" name="hora" id="hora" class="form-control" placeholder="Escolha um horário..."
              min="11:00" />
          </div>

          <div class="col-12 col-md-4">
            <label for="num-pessoas" class="form-label">Número de pessoas:</label>
            <input required type="number" class="form-control" name="num-pessoas" id="num-pessoas"
              placeholder="Informe o número de pessoas..." min="1" />
          </div>
        </div>

        <div class="row col-12 my-3">
          <div class="col-12">
            <label for="observacoes" class="form-label">Informações adicionais ou preferências:</label>
            <textarea rows="5" class="form-control" name="observacoes" id="observacoes"
              placeholder="(Opcional) adicione informações extras sobre sua reserva, como decoração especial, necessidades dietéticas, tipo de ocasião, etc."></textarea>
          </div>
        </div>

        <div class="row flex align-items-center justify-content-center">
          <button type="submit" class="px-3 py-1 btn mt-4 item-active btn-yellow">
            Verificar disponibilidade
          </button>
        </div>
      </form>
    </div>
  </section>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>