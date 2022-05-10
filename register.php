<?php
echo "<link rel=”stylesheet” type=”text/css” href=”main.css” />"
?>
<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar cliente');

use App\Entity\Cliente;
$obCliente = new Cliente();

//VALIDAÇÃO DO POST
if (isset($_POST['nome'], $_POST['data_nasc'], $_POST['email'], $_POST['num'])) {
      $obCliente->nome = $_POST['nome'];
      $obCliente->data_nasc = $_POST['data_nasc'];
      $obCliente->email = $_POST['email'];
      $obCliente->num = $_POST['num'];
      $obCliente->registrar();
      header('location: index.php?status=success');
      exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__  . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
