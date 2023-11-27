<?php
declare(strict_types = 1);

use Gusteaus\Controllers\ErrorController;
use Gusteaus\Controllers\HomeController;
use Gusteaus\Controllers\LoginController;
use Gusteaus\Controllers\MenuController;

require __DIR__ . '/vendor/autoload.php';

$erorController = new ErrorController();
$homeController = new HomeController();
$loginController = new LoginController();
$menuController = new MenuController();

$url = $_GET['url'] ?? '/';

switch ($url) {
  case '/':
    $homeController->index();
    break;
  case 'cardapio':
    $menuController->index();
    break;
  case 'login':
    $loginController->login();
    break;
  case 'cadastro':
    $loginController->createAccount();
    break;
  default:
    $erorController->error404();
    break;
}