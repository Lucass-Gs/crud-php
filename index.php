<?php
echo "<link rel=”stylesheet” type=”text/css” href=”main.css” />"
?>
<?php

require __DIR__ . '/vendor/autoload.php';

use App\Entity\Cliente;

$clientes = Cliente::getClientes();

include __DIR__ . '/includes/header.php';
include __DIR__  . '/includes/list.php';
include __DIR__ . '/includes/footer.php';
