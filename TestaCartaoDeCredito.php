<?php

require 'lib/Carbon.php';
require 'Cartao.php';   // a classe esta em outro arquivo
use Carbon\Carbon;

$cartao = new CartaoDeCredito();
$cartao->numero = 55555;
$cartao->dataDeValidade =
   Carbon::createFromDate(2022, 3, 7, 'America/Sao_Paulo');

echo "Carto de Credito: $cartao->numero" . PHP_EOL;
echo "Validade: {$cartao->dataDeValidade->format('d/m/Y')}" . PHP_EOL;
