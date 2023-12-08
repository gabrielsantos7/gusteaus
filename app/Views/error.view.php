<?php
$cssPath = PUBLIC_PATH . 'css/error.css';
extract($dados);
require VIEW_PATH .  'components/header.php';
?>

<main>
  <h2>
    <?=$msgTitle?>
  </h2>
  <p><?=$message?></p>
  <a href="<?=BASE_URL?>" class="btn btn-primary px-4 py-2 mt-5 fw-bold">Voltar para a página inicial</a>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>