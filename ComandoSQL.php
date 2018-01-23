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

    $servername = "localhost";
    $username = "root";
    $password = "senha";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Create database
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
    } else {
      echo "Error creating database: " . $conn->error;
    }

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
     ?>

    <h1>Cliente</h1>

    <h3>Nome: <?= $cliente->nome ?> </h3>
    <h3>Email: <?= $cliente->codigo ?> </h3>
  </body>
</html>
