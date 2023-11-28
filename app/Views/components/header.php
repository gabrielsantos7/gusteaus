<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

  <!-- JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
  </script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <!-- CSS do header e footer -->
  <link rel="stylesheet" href="./public/css/header-and-footer.css">

  <!-- CSS do projeto -->
  <link rel="stylesheet" href="<?=$cssPath?>">

  <!-- Verifica se jsPath está definido antes de incluir o script -->
  <?php if (isset($jsPath)): ?>
  <script src="<?=$jsPath?>" defer></script>
  <?php endif; ?>

  <link rel="shortcut icon" href="<?=PUBLIC_PATH . 'img/Main/favicon.ico'?>" type="image/x-icon">

  <title><?=$title?></title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="">Oi</a></li>
        <li><a href="">Oi de novo</a></li>
        <li><a href="">link no header</a></li>
      </ul>
    </nav>
  </header>