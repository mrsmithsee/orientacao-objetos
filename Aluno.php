// Objetos
<?php

class Aluno     // receita, forma para criar os objetos
{
  public $nome;
  public $rg;
  public $dataNascimento;

}

$aluno = new Aluno();  // guarda o endereco do objeto na memoria
$aluno->nome = "Marcelo Martins";
$aluno->rg = "33333333-3";
$aluno->dataNascimento = "02/04/1985";

echo "Nome: $aluno->nome". PHP_EOL;
echo "rg: $aluno->rg". PHP_EOL;
echo "dataNascimento: $aluno->dataNascimento \n" . PHP_EOL;

$aluno2 = new Aluno();  // guarda o endereco do objeto na memoria
$aluno2->nome = "Rafael Consentino";
$aluno2->rg = "22222222-2";
$aluno2->dataNascimento = "30/10/1984";

echo "Nome: $aluno2->nome". PHP_EOL;
echo "rg: $aluno2->rg". PHP_EOL;
echo "dataNascimento: $aluno2->dataNascimento" . PHP_EOL;
