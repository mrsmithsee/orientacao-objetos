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
    // nao podemos concatenar entrada de dados com SQL
    // $sql = "INSERT INTO clientes values (null, '$cliente->nome', '$cliente->email')";
    // passamos como parametro para o driver:
    $sql = "INSERT INTO clientes (nome, email) values (?, ?)";

    //$saida = $conn->query($sql);
    $comando = $conn->prepare($sql);
    $comando->bind_param("ss", $cliente->nome, $cliente->email);
    $saida = $comando->execute();

     ?>
     <h1>Cliente</h1>
     <?php if ($saida === TRUE) { ?>
     <h3>Cliente salvo com sucesso</h3>
   <?php } else {
     //var_dump($conn);?>
     <h3>Erro: <?= $conn->error ?></h3>
     <h3><?= $sql ?></h3>
   <?php }
       $comando->close();
       $conn->close();
    ?>

  </body>
</html>
