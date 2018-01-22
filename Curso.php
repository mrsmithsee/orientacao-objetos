<?php
class Curso
{
  // public acesso de qualquer classe
  // private somente acessa dentro dessa classe
  // protected

  public $nome;   // atributos  com public private ou protected
  public $sala;
}

$curso = new Curso();
$curso->nome = "Algoritmos em Java";
$curso->sala ="B05";

echo "Nome do curso: $curso->nome" . PHP_EOL;
echo "Sala: $curso->sala" . PHP_EOL;
