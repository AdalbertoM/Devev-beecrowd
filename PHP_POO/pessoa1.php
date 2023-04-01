<?php
class Pessoa {
  public $nome;
  public $sobrenome;
  public $idade;
  public $sexo;
  public $cidade;
  
  public function __construct($nome, $sobrenome, $idade, $sexo, $cidade) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->cidade = $cidade;
  }
  
  public function apresentar() {
    echo "Nome: {$this->nome}\n";
    echo "Sobrenome: {$this->sobrenome} \n";
    echo "Idade: {$this->idade} \n";
    echo "Sexo: {$this->sexo} \n";
    echo "Cidade: {$this->cidade} \n";
  }
}

$nome = readline("Digite seu nome: ");
$sobrenome = readline("Digite seu sobrenome: ");
$idade = readline("Digite sua idade: ");
$sexo = readline("Digite seu sexo:");
$cidade = readline("Digite sua cidade: ");

$pessoa = new Pessoa($nome, $sobrenome, $idade, $sexo, $cidade);
$pessoa->apresentar();

?>