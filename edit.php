<?php
echo "<link rel=”stylesheet” type=”text/css” href=”main.css” />"
?>

<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar');

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
if (isset($_POST['nome'], $_POST['data_nasc'], $_POST['email'], $_POST['num'])) {
      $obCliente->nome = $_POST['nome'];
      $obCliente->data_nasc = $_POST['data_nasc'];
      $obCliente->email = $_POST['email'];
      $obCliente->num = $_POST['num'];
      $obCliente->atualizar();

      header('location: index.php?status=success');
      exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__  . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
