<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe inf do cliente</title>
  </head>
  <body>
    <?php
    require 'Cliente.php';
    $cliente = new Cliente();
    $cliente->nome = $_POST['nome'];
    $cliente->codigo = $_POST['email'];
     ?>

    <h1>Cliente</h1>

    <h3>Nome: <?= $cliente->nome ?> </h3>
    <h3>Email: <?= $cliente->codigo ?> </h3>
  </body>
</html>
