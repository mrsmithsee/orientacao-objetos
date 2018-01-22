<?php
class Agencia{
  public $numero;
}

  $agencia = new Agencia();
  $agencia->numero = 1234;

  $agencia2 = new Agencia();
  $agencia2->numero = 5678;

  echo "Numero: $agencia->numero \n" . PHP_EOL;
  echo "Numero: $agencia2->numero" . PHP_EOL;
