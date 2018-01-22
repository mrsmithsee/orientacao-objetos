<?php
class CartaoDeCredito{
  public $numero;
  public $dataDeValidade;
}

//require 'lib/Carbon.php';
//use Carbon\Carbon;


$cartao = new CartaoDeCredito();
$cartao->numero = "111111";
$cartao->dataDeValidade = "01/01/2013";

//$cartao->dataDeValidade =
//   Carbon::createFromDate(2022, 3, 7, 'America/Sao_Paulo');

$cartao2 = new CartaoDeCredito();
$cartao2->numero = "222222";
$cartao2->dataDeValidade = "01/01/2014";

echo "Numero: $cartao->numero" . PHP_EOL;
echo "dataDeValidade: $cartao->dataDeValidade \n" . PHP_EOL;

echo "Numero: $cartao2->numero" . PHP_EOL;
echo "dataDeValidade: $cartao2->dataDeValidade" . PHP_EOL;
