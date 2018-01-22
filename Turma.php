// Objetos
<?php

class Turma     // receita, forma para criar os objetos
{
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

$turma = new Turma();
$turma->periodo = "Tarde";
$turma->serie = 8;
$turma->sigla = "A";
$turma->tipoDeEnsino = "Fundamental";

$turma2 = new Turma();
$turma2->periodo = "Manha";
$turma2->serie = 5;
$turma2->sigla = "B";
$turma2->tipoDeEnsino = "Fundamental";

echo "Periodo: $turma->periodo". PHP_EOL;
echo "Serie: $turma->serie". PHP_EOL;
echo "Sigla: $turma->sigla" . PHP_EOL;
echo "tipoDeEnsino: $turma->tipoDeEnsino \n" . PHP_EOL;

echo "Periodo: $turma2->periodo". PHP_EOL;
echo "Serie: $turma2->serie". PHP_EOL;
echo "Sigla: $turma2->sigla" . PHP_EOL;
echo "tipoDeEnsino: $turma2->tipoDeEnsino \n" . PHP_EOL;
