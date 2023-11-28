<?php
$cssPath = PUBLIC_PATH . 'css/error404.css';
$title = 'Cardápio';
require VIEW_PATH .  'components/header.php'
?>

<main>
  <h2>Ops! Página não encontrada</h2>
  <p>A página que você está procurando não foi encontrada. Verifique a rota e tente novamente.</p>
  <a href="<?=BASE_URL?>" class="btn btn-primary mt-5">Voltar para a página inicial</a>
</main>