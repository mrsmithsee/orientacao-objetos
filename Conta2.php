// Objetos
<?php

class Conta     // receita, forma para criar os objetos
{
  public $numero;  // atributos
  public $saldo; // atributos
  public $limite;

}
$x = new Conta();  // guarda o endereco do objeto na memoria
$x->numero = 123;
$x->saldo = 1000;
$x->limite = 2000;

echo "Número: $x->numero". PHP_EOL;
echo "Saldo: $x->saldo". PHP_EOL;
