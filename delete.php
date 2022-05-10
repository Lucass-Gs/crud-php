<?php
echo "<link rel=”stylesheet” type=”text/css” href=”main.css” />"
?>
<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Excluir');

use App\Entity\Cliente;

//VALIDAÇÃO DO ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
      header('location: index.php?status=error');
      exit;
}

//CONSULTA  O CLIENTE
$obCliente = Cliente::getCliente($_GET['id']);

//VALIDAÇÃO DO CLIENTE
if (!$obCliente instanceof Cliente) {
      header('location: index.php?status=error');
      exit;
}

//VALIDAÇÃO DO POST
if (isset($_POST['excluir'])) {
      $obCliente->excluir();

      header('location: index.php?status=success');
      exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__  . '/includes/confirm-delete.php';
include __DIR__ . '/includes/footer.php';
