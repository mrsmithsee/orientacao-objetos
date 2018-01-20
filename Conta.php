// Objetos
<?php

class Conta     // receita, forma para criar os objetos
{
  public $numero;  // atributos
  public $saldo; // atributos

}
$x = new Conta();  // guarda o endereco do objeto na memoria
$x->numero = 123;
$x->saldo = 1000;

echo "Número: $x->numero". PHP_EOL;
echo "Saldo: $x->saldo". PHP_EOL;

$y = new Conta();  // guarda o endereco do objeto na memoria
$y->numero = 133;
$y->saldo = 10400;

echo "Número conta y: $y->numero". PHP_EOL;
echo "Saldo conta y: $y->saldo". PHP_EOL;
