<?php
$cssPath = PUBLIC_PATH . 'css/cadastrarconta.css';
$title = 'Sucesso!';

require VIEW_PATH .  'components/header.php'
?>

<main>
  <div class="container text-center">
    <h2 class="fw-bold text-yellow my-5">Sucesso ao criar conta!</h2>
    <p>Parabéns! Sua conta foi criada com sucesso! Agora você pode desfrutar de todas as funcionalidades oferecidas. Faça pedidos, reserve mesas e aproveite ao máximo a sua experiência conosco. Bem-vindo!</p>
    <a href="/gusteaus/cardapio" class="btn btn-primary my-5">Fazer pedido</a>
  </div>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>