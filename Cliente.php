<?php

class Cliente
{
  public $nome;
  public $codigo;
}

$cli = new Cliente();
$cli->nome = "Rafael Cosentino";
$cli->codigo = 1;

$cli2 = new Cliente();
$cli2->nome = "Jonas Hirata";
$cli2->codigo = 2;

echo "Nome: $cli->nome".PHP_EOL;
echo "Codigo: $cli->codigo".PHP_EOL;

echo "Nome: $cli2->nome".PHP_EOL;
echo "Codigo: $cli2->codigo".PHP_EOL;
