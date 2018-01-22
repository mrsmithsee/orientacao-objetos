// Objetos
<?php

class Funcionario     // receita, forma para criar os objetos
{
  public $nome;
  public $salario;
}

$funcionario = new Funcionario();  // guarda o endereco do objeto na memoria
$funcionario->nome = "Marcelo Martins";
$funcionario->salario = 19000.32;

$funcionario2 = new Funcionario();  // guarda o endereco do objeto na memoria
$funcionario2->nome = "Rafael Martins";
$funcionario2->salario = 18000.52;

echo "Nome: $funcionario->nome". PHP_EOL;
echo "Salario: $funcionario->salario \n". PHP_EOL;

echo "Nome: $funcionario2->nome". PHP_EOL;
echo "Salario: $funcionario2->salario". PHP_EOL;
