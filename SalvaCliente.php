<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'Cliente.php';
    $server = "localhost";
    $usuario = "root";
    $senha = "senha";
    $banco = "verao";

    $conn = new mysqli($server, $usuario, $senha, $banco) or
    die("Erro ao conectar: $conn->connect_error");

    $cliente = new Cliente();
    $cliente->nome = $_POST['nome'];
    $cliente->email = $_POST['email'];

    $sql = "INSERT INTO clientes values (null, '$cliente->nome', '$cliente->email')";

    $saida = $conn->query($sql);

     ?>
     <h1>Cliente</h1>
     <?php if ($saida === TRUE) { ?>
     <h3>Cliente salvo com sucesso</h3>
   <?php } else { ?>
     //vardump($conn);
     <h3>Erro: <?= $conn->error ?></h3>
   <?php }
       $conn->close();
    ?>

  </body>
</html>
